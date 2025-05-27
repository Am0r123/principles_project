<?php
abstract class UserAuthTemplate  {
    protected $con;

    public function __construct() {
        $this->con = new mysqli("localhost", "root", "", "software_project");
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    public function execute(...$args) {
        if (!$this->validate(...$args)) {
            return false;
        }
        return $this->query(...$args);
    }

    abstract protected function validate(...$args);
    abstract protected function query(...$args);
}
class RegisterUser extends UserAuthTemplate  {

    protected function validate(...$args) {
        [$name, $password, $email] = $args;
        return !empty($name) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    protected function query(...$args) {
        [$name, $password, $email] = $args;
        $sql = "INSERT INTO user (name, password, email) VALUES (?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sss", $name, $password, $email);
        return $stmt->execute();
    }
}
class LoginUser extends UserAuthTemplate  {

    protected function validate(...$args) {
        [$email, $password] = $args;
        return !empty($email) && !empty($password);
    }

    protected function query(...$args) {
        [$email, $password] = $args;
        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>