<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->

    <style>
      * {
    font-family: Teko;
  }
  
  .landing_page .responsive-container-block {
    min-height: 75px;
    height: fit-content;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    justify-content: flex-start;
  }
  .share-icon{
    color: white;
    font-size: x-large;
  }
  
  .landing_page .text-blk {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    line-height: 25px;
  }
  
  .landing_page .responsive-cell-block {
    min-height: 75px;
  }
  
  .landing_page .responsive-container-block.container {
    max-width: 1320px;
    margin-top: 60px;
    margin-right: auto;
    margin-bottom: 60px;
    margin-left: auto;
    position: relative;
  }
  
  .landing_page .form-box {
    background-color: #2b2d2ea8;
    color: white;
    padding-top: 35px;
    padding-right: 33px;
    padding-bottom: 35px;
    padding-left: 33px;
    max-width: 506px;
  }
  
  .landing_page .text-blk.contactus-head {
    font-size: 30px;
    line-height: 40px;
    color:red;
  }
  
  .landing_page .text-blk.contactus-subhead {
    color: #d4d4d4;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 18px;
    margin-left: 0px;
  }
  
  .landing_page .input {
    width: 100%;
    height: 50px;
    color: white;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    font-size: 18px;
    padding-top: 1px;
    padding-right: 125px;
    padding-bottom: 1px;
    padding-left: 22.5px;
    border-top-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-top-color: #767676;
    border-right-color: #767676;
    border-bottom-color: #767676;
    border-left-color: #767676;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    background-color: #212223;
    padding: 1px 12.5px 1px 22.5px;
  }
  
  .landing_page .textinput {
    width: 100%;
    height: 233px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 0px;
    font-size: 18px;
    padding-top: 22px;
    padding-right: 22px;
    padding-bottom: 22px;
    padding-left: 22px;
    background-color: #212223;
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-style: none;
    border-right-style: none;
    color: white;
    border-bottom-style: none;
    border-left-style: none;
    border-top-color: #767676;
    border-right-color: #767676;
    border-bottom-color: #767676;
    border-left-color: #767676;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
  }
 
.contact-icons {
    list-style: none;
    padding-left: 33px;
    color: red;
}

/* Style for each list item */
.contact-icons li {
    font-size: 23px;
    padding-bottom: 10px;
}

/* Remove text decoration from anchor tags */
.contact-icons a {
    text-decoration: none;
    margin-left: 3px;
    color: white; /* Adjust the color as needed */
}

  .landing_page .submit-btn {
    width: 100%;
    height: 56px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    background-color: red;
    font-size: 18px;
    font-weight: 600;
    color: white;
    border-top-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-top-color: #146132;
    border-right-color: #146132;
    border-bottom-color: #146132;
    border-left-color: #146132;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    transition-duration: 1s;
 
 }
  .landing_page .submit-btn:hover {
    background-color: white;
    transition: 300ms ease-in;
    color:Red;
  }
  .landing_page .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-6.wk-ipadp-6.emial {
    padding-top: 0px;
    padding-right: 10px;
    padding-bottom: 0px;
    padding-left: 0px;
  }
  
  .landing_page .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6.right-one {
    display: flex;
    justify-content: center;
  }
  
  .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
    display: flex;
    justify-content: flex-start;
    color: white;
  }
  
  .landing_page .text-blk.section-subhead {
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 20px;
    max-width: 420px;
    font-size: 22px;
    color: #b6b6b6;
  }
  
  .landing_page .text-blk.section-head {
    font-size: 88px;
    color: red;
    line-height: 67px;
    font-weight: 800;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 15px;
    margin-left: 0px;
    max-width: 480px;
  }
  
  .landing_page .icons-container {
    max-width: 450px;
    display: flex;
    justify-content: space-evenly;
  }
  
  .landing_page .img {
    width: 31px;
    height: 31px;
  }
  
  .landing_page .responsive-container-block.big-container {
    background-color: black;
    padding-top: 0px;
    padding-right: 50px;
    padding-bottom: 0px;
    padding-left: 50px;
    position: relative;
  }
  
  .landing_page .bg-img {
    width: 100%;
    position: absolute;
    left: 0px;
    right: 0px;
    bottom: 0px;
    top: 0px;
    height: 100%;
    opacity: 0.5;
    object-fit: cover;
  }
  
  @media (max-width: 768px) {
    .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
      justify-content: center;
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 30px;
      margin-left: 0px;
    }
  iframe{
    display:none;
  }
    .landing_page .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-6.wk-ipadp-6.emial {
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
    }
  
    .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
      margin: 0 0 40px 0;
    }
  }
  
  @media (max-width: 500px) {
    .landing_page .text-blk.section-head {
      font-size: 26px;
      line-height: 40px;
    }
  
    .landing_page .responsive-container-block.big-container {
      padding-top: 0px;
      padding-right: 20px;
      padding-bottom: 0px;
      padding-left: 20px;
    }
  
    .landing_page .text-blk.section-subhead {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 30px;
      margin-left: 0px;
      font-size: 16px;
    }
  
    .landing_page .form-box {
      padding-top: 30px;
      padding-right: 15px;
      padding-bottom: 30px;
      padding-left: 15px;
    }
  
    .landing_page .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12.left-one {
      margin: 0 0 30px 0;
    }
  
    .landing_page .input {
      height: 45px;
    }
  
    .landing_page .text-blk.contactus-head {
      font-size: 24px;
      line-height: 34px;
      color:red;
    }
  }

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }
  .landing_page .text-blk.section-head {
    font-size: 57px;
    line-height: 40px;
}
  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }
  .landing_page .text-blk.section-head {
    font-size: 57px;
    line-height: 40px;
}
  iframe{
    display:none;
  }
  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }
  .landing_page .text-blk.section-head {
    font-size: 57px;
    line-height: 40px;
}

  iframe{
    display:none;
  }
  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
.landing_page .file-upload-container {
  display: flex;
  flex-direction: column; /* Stack elements vertically */
  align-items: flex-start; /* Align items to the start */
  margin-top: 10px; /* Space between elements */
}

.landing_page .file-info {
  margin-top: 5px; /* Space between button and file info */
  color: #d4d4d4; /* Light color for file info */
  font-size: 16px; /* Adjust font size */
}

.landing_page .file-types {
  margin-top: 2px; /* Space between file info and types */
  color: #b6b6b6; /* Slightly lighter color for types */
  font-size: 14px; /* Smaller font for allowed types */
}
.landing_page input[type="file"] {
  display: none; /* Hide the default file input */
}

.landing_page .file-upload-label {
  display: inline-block;
  width: 100%;
  height: 50px; /* Same height as other inputs */
  background-color: #212223; /* Match the background */
  color: white; /* Text color */
  font-size: 18px; /* Font size */
  border: 2px solid #767676; /* Border styling */
  border-radius: 5px; /* Rounded corners */
  text-align: center; /* Center text */
  line-height: 50px; /* Center text vertically */
  cursor: pointer; /* Pointer cursor on hover */
  transition: background-color 0.3s ease; /* Transition for hover effect */
}

.landing_page .file-upload-label:hover {
  background-color: #3a3b3c; /* Darker on hover */
}
.accordion{
  background-color: #0f0f0f;
  margin: 20px 135px;
 
}
.accordion-button {
  background-color: #0f0f0f; /* Black background */
  color: white; /* Red text */
  border: 1px solid transparent; /* Remove default border */
  padding: 20px 15px; /* Padding for better appearance */
  font-weight: bold; /* Bold text */
  font-size: 25px;
  }
.title2{
  font-size: 23px;
    text-transform: uppercase;
    text-align: center;
    color: #b6b6b6;
    margin-top: 43px;
}
/* Change border color when the accordion is open */
.accordion-button:not(.collapsed) {
  background-color: #0f0f0f; /* Maintain black background when open */
  color: red; /* Maintain red text when open */
  border-bottom: 1px solid darkgray; /* Optional: add a border at the bottom */
}

/* Change color on hover */
.accordion-button:hover {
  background-color: darkgray; /* Dark gray on hover */
}

/* Style for the accordion body */
.accordion-body {
  color: rgb(255, 255, 255); /* White text for the accordion body */
  background-color: #0f0f0f; 
  font-weight: 100;/* Dark background for the body */
}

/* Optional: Style the accordion item */
.accordion-item {
  background-color: #0f0f0f;
  border: none; /* Remove border from the accordion item */
  margin-bottom: 10px; /* Space between items */
}
.accordion-item .accordion-button{
  background-color: #0f0f0f;
  border-bottom: solid gray 1px;
}
body{
  background: #0f0f0f;
}
.title1{
  font-size: 64px;
  text-transform: uppercase;
  text-align: center;
  color: white;
}
    </style>
   </head>
<body>
<?php include(__DIR__ . '/../shared/navigationbar.php'); ?>
  
<div style="margin-top:10px;" class="landing_page">
    <div class="responsive-container-block big-container">
      <img class="bg-img" id="iq5bf" src="<?php echo BASE_URL; ?>/assets/img/photo-1534438327276-14e5300c3a48.avif">
      <div class="responsive-container-block container">
        <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 left-one">
          <div class="content-box">
            <p class="text-blk section-head">
              GET IN TOUCH WITH US
            </p>
            <p class="text-blk section-subhead">
            Also, You can contact us on :
            </p>
            <ul class="contact-icons">
             
            <li>
                <i class="fas fa-phone-alt"></i> Telephone: <a href="tel:01200193672">01200193672</a>
            </li>
            <li>
                <i class="fas fa-envelope"></i> Email: <a href="mailto:polalabib33@gmail.com">polalabib33@gmail.com</a>
            </li>
            </ul>
            <p class="text-blk section-subhead">
              Also, You can Find us in :
              <div style="
                  -webkit-filter: grayscale(100%);
                  filter: grayscale(100%);
                  margin-top: 10px;
    margin-left: 32px;">
                  <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.3020121668005!2d31.494766773957085!3d30.171801814151497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581b067faedd41%3A0xd41c05d46cba7f28!2sMiu%20-%20R%20building!5e0!3m2!1sar!2seg!4v1729775574902!5m2!1sar!2seg"></iframe>
              </div>

              </p>
            
            <div class="icons-container">
              <a class="share-icon" href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a class="share-icon" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a class="share-icon" href="#">
                <i class="fab fa-google"></i>
              </a>
              <a class="share-icon" href="#">
                  <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6 right-one" id="i1zj">
          <form action="https://api.web3forms.com/submit" method="POST" class="form-box">
            <div class="container-block form-wrapper">
              <p class="text-blk contactus-head">
                <input type="hidden" name="access_key" value="4c5d3918-51db-497b-965c-0d50819fd9ad">
                MAKE A TICKET
              </p>
              <p class="text-blk contactus-subhead">
                We will get back to you in 24 hours
              </p>
              <div class="responsive-container-block">
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-7">
                  <input class="input" id="ijowk-7" name="FirstName" placeholder="First Name" required>
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i1ro7">
                  <input class="input" id="indfi-5" name="Last Name" placeholder="Last Name" required>
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-6 wk-ipadp-6 emial" id="ityct">
                  <input class="input" id="ipmgh-7" name="Email" placeholder="Email" required>
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <input class="input" id="imgis-6" name="PhoneNumber" placeholder="Phone Number">
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-7">
                  <textarea aria-placeholder="Type message here" name="message" class="textinput" id="i5vyy-7" placeholder="Type message here" required></textarea>
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <div class="file-upload-container">
                    <label class="file-upload-label" for="file-upload">Choose a file</label>
                    <input type="file" id="file-upload" name="attachment" accept=".jpg, .png, .pdf">
                    <span class="file-info">No file chosen</span>
                    <span class="file-types">Allowed types: .jpg, .png, .pdf</span>
                </div>                
              </div>
              </div>
              <button type="submit" class="submit-btn">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div> 
<div>
  <h2 class="title2">Frequently asked question</h2>
  <h1 class="title1"> Gym beginners guide  </h1>
  
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        How to start at the gym as a beginner?
            </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, fuga itaque? Natus, officia. Ut, non libero molestias iusto fuga quas magni aliquid consequuntur mollitia omnis doloremque. Quo at sapiente optio!</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet recusandae adipisci distinctio qui ad quia similique ducimus reiciendis. Maxime nam accusamus quos unde voluptatibus minus dolor culpa enim nobis.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        How do I find a gym routine for beginners?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, fuga itaque? Natus, officia. Ut, non libero molestias iusto fuga quas magni aliquid consequuntur mollitia omnis doloremque. Quo at sapiente optio!</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet recusandae adipisci distinctio qui ad quia similique ducimus reiciendis. Maxime nam accusamus quos unde voluptatibus minus dolor culpa enim nobis.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        How many hours should a beginner gym?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, fuga itaque? Natus, officia. Ut, non libero molestias iusto fuga quas magni aliquid consequuntur mollitia omnis doloremque. Quo at sapiente optio!</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet recusandae adipisci distinctio qui ad quia similique ducimus reiciendis. Maxime nam accusamus quos unde voluptatibus minus dolor culpa enim nobis.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
        What to do in the gym for the first time?
            </button>
    </h2>
    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, fuga itaque? Natus, officia. Ut, non libero molestias iusto fuga quas magni aliquid consequuntur mollitia omnis doloremque. Quo at sapiente optio!</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet recusandae adipisci distinctio qui ad quia similique ducimus reiciendis. Maxime nam accusamus quos unde voluptatibus minus dolor culpa enim nobis.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
        What is the best routine for the gym?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, fuga itaque? Natus, officia. Ut, non libero molestias iusto fuga quas magni aliquid consequuntur mollitia omnis doloremque. Quo at sapiente optio!</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet recusandae adipisci distinctio qui ad quia similique ducimus reiciendis. Maxime nam accusamus quos unde voluptatibus minus dolor culpa enim nobis.
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

document.getElementById('file-upload').addEventListener('change', function() {
    const fileInfo = document.querySelector('.file-info');
    const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
    fileInfo.textContent = fileName; // Display the file name
});
</script>
</body>
</html>
<?php include(__DIR__ . '/../shared/footer.php'); ?>
