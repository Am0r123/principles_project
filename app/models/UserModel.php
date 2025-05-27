<?php
class UserAdminFactory {
    public static function create($type) {
        switch ($type) {
            case 'user':
                return new User();
            case 'admin':
                return new Admin();
            case 'coach':
                return new Coach();
            default:
                throw new Exception("Invalid user type: $type");
        }
}}
abstract class BaseUser {
    protected $con;
    protected $type;

    public function __construct($type) {
        $this->con = getDatabaseConnection();
        $this->type = $type;
    }

    public function add($name, $email, $password, $workout_id = null) {
        $workoutPart = ($this->type === 'user' && $workout_id !== null) ? ", workout_id" : "";
        $workoutValue = ($this->type === 'user' && $workout_id !== null) ? ", $workout_id" : "";

        $sql = "INSERT INTO user (name, email, password, type$workoutPart) 
                VALUES ('$name', '$email', '$password', '{$this->type}'$workoutValue)";
        return $this->executeAndRespond($sql, ucfirst($this->type) . " added successfully!");
    }

    public function edit($id, $name, $email, $password, $workout_id = null) {
        $workoutPart = ($this->type === 'user' && $workout_id !== null) ? ", workout_id = $workout_id" : "";

        $sql = "UPDATE user SET name = '$name', email = '$email', password = '$password', 
                type = '{$this->type}'$workoutPart WHERE ID = $id";
        return $this->executeAndRespond($sql, ucfirst($this->type) . " updated successfully!");
    }

    public function delete($id) {
        $sql = "DELETE FROM user WHERE ID = $id";
        return $this->executeAndRespond($sql, ucfirst($this->type) . " deleted successfully!");
    }

    public function getAll() {
        $sql = "SELECT * FROM user WHERE type = '{$this->type}'";
        $result = $this->con->query($sql);
        $users = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }

    protected function executeAndRespond($sql, $successMessage) {
        if ($this->con->query($sql) === TRUE) {
            return $this->generateMessage($successMessage, "success");
        } else {
            return $this->generateMessage("Error: " . $this->con->error, "error");
        }
    }

    protected function generateMessage($message, $type) {
        return "<script>
            document.addEventListener('DOMContentLoaded', function() {
                showPopupMessage('$message', '$type');
                showSection('{$this->type}')
            });
        </script>";
    }

    public function __destruct() {
        if ($this->con) {
            $this->con->close();
        }
    }
}
class Admin extends BaseUser{
    public function __construct() {
        parent::__construct('admin');
    }
}
class User extends BaseUser{
    public function __construct() {
        parent::__construct('user');
    }
}

class Coach extends BaseUser{
    public function __construct() {
        parent::__construct('coach');
    }
}

?>
