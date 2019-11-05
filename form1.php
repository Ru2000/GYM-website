<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registeration form</title>
    <link rel="stylesheet" href="css/style_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    .main_footer{
      background: #232323;
      height:400px;
      width: 100%;
      position:absolute;
      top: 120%;
      left: 0;
      right:0;
      bottom:0%;
      margin-bottom: 0;
    }
    .first_section{
      width: 33%;
      height: 100%;
      float: left;
      /*background: red;*/

    }


    .second_section{
      width: 33%;
      height: 100%;
      float: left;

    }

    .third_section{s
      width: 33%;
      height: 100%;
      float: left;
    }
    .second_section .ul-sec .li-sec{
      list-style: none;
    }

    .second_section .ul-sec .li-sec a{
      text-decoration:none;
      font-size: 18px;
      color: white;
      letter-spacing: 2px;

    }
    .second_section .ul-sec .li-sec a:hover{
      color: red;
      letter-spacing: 2px;

    }
    .copyright{
      background-color: rgba(0,0,0,7);
    }
    footer{
      background:rgba(0,0,0,0.5);
    }
    .social_links_ul li{
      display: inline-block;
      color: white;
      font-size: 22px;
      position: relative;
      bottom: 20px;
      margin-left: 10px

    }

      .social_links_ul li:hover{
        color: red;
      }
    </style>

  </head>
  <body>
    <section class="hike-1">
      <div class="navbar">
          <a class="li-1-a"  href="index.html#home">Home</a>
          <a class="li-1-a" href="#facility">Facility</a>
          <a class="li-1-a" href="index.html#trainer">Trainers</a>
          <a class="li-1-a" href="index21.html#membership">Membership Detail</a>
          <a class="li-1-a" href="#contact">Contact us</a>
          <a  class="active-register-1"href="form1.php">Register</a>
      </div>
    </section>
      <section class="sec-1-form">
        <div class="simple-form">
            <h1 class="h1-form">Registeration form</h1>
          <form id="registration" action="" method="post">
             <input type="text" name="fname" id="button" placeholder="First Name" required><br />
             <br>
             <input type="text" name="lname" id="button" placeholder="Last Name" required><br />
              <br>
             <input type="email" name="email" id="button" placeholder="info@mail.com" required><br />
              <br>
              <select class="phonecode" name="phonecode"required >
              <option selected hidden value="">Select</option>
              <option value="91">+91</option>
              <option value="97" >+97</option>
              <option value="99">+99</option>
              <option value="98">+98</option>
              <option value="96">+96</option>
              <option value="92">+92</option>
              <option value="93">+93</option>
              </select>
              <input type="phone"  class="phone"placeholder="Enter phone number" name="phone" required><br><br>
                  <select class="package" name="package"required >
                  <option selected hidden value="">Select Packages</option>
                  <option value="standard">Standard</option>
                  <option value="professional" >Professional</option>
                  <option value="elite">Elite</option>
                  </select><br><br />
                  <h3>Gender:</h3>
                  <input type="radio" name="gender" class="rd" value="m" required><span class="but">Male</span>
                  <input type="radio" name="gender" class="rd" value="f"required><span class="but">Female</span>
                  <input type="radio" name="gender" class="rd" value="o"required><span class="but">Other</span><br /><br>
                  <input type="submit" value="Register" class="butt"name"">

          </form>

      </section>

      <footer id="contact">
          <div class="main_footer">
            <div class="footer_wrapper">
                <div class="first_section">
                  <h1 style="color:white; text-align:center;">
                    About us
                  </h1>
                  <p style="color:white; text-align:center; letter-spacing:1px; text-align:justify">
                    In 1932,Fitness World Better Value Fitness Limited set up its
                       first gym in Mumbai, and we’ve been guiding our customers towards healthy living ever
                       since! With over 176 gyms spanning 85 cities in India and Sri Lanka, we’ve garnered a
                        membership of over 150,000. At Fitness World, we offer gym, spa and health counselling
                        services along with a wide range of fitness and weight
                       loss programs including Aerobics, Yoga, Zumba, Nuform and Reduce.
                  </p>
                </div>
                <div class="second_section">
                    <h1  class="" style="color: white; padding-left:40px"> Quick links</h1>
                    <ul class="ul-sec" style="padding-left:150px;padding-top:10px;">
                      <li class="li-sec"><a href="index.html">Home</a></li><br>
                      <li class="li-sec"><a href="index21.html#membership">Membership</a></li><br>
                      <li class="li-sec"><a href="form1.php"> Register</a></li><br>
                      <li class="li-sec"><a href="index22.html">FAQ</a></li><br>
                      <li class="li-sec"><a href="">Social Links</a></li><br>
                    </ul>
                    <ul style="padding-left:150px"; class="social_links_ul">
                      <li><li><i class="fa fa-whatsapp" ></i></li></li>
                      <li><li><i class="fa fa-facebook" ></i></li></li>
                      <li><li><i class="fa fa-youtube" ></i></li></li>
                      <li><li><i class="fa fa-twitter" ></i></i></li></li>
                    </ul>
                </div>
                <div class="third_section">
                  <h1 style="color:white;padding-bottom:10px;">Contact us</h1>
                    <div style="color:white; padding-bottom:10px;">B-1304, Landmark towers</div>
                    <div style="color:white; padding-bottom:10px;">OPP wadala telephone exchange</div>
                    <div style="color:white; padding-bottom:10px;">Naigoan, Dadar-East 400014</div>
                    <div style="color:white; padding-bottom:10px;">Phone:+91 123456767</div>
                    <div style="color:white; padding-bottom:10px;">Email:info@example.com</div>
                </div>
            </div>
          </div>
            <div class="copyright" style="position:absolute; top:162%; width:100%; left:0;right: 0; bottom:0; color:white;">
              <p style="text-align:center">"All rights reserved" is a copyright formality indicating that the
                 copyright holder reserves, or holds for its own use, all the rights provided by copyright law.<br /> Originating in the Buenos Aires Convention of 1910, it is unclear
                 if it has any legal effect in any jurisdiction<br />&copy All right reserved 2019 | Hrithik Gaikwad | Rutuja Avhad<br /></p>
            </div>

      </footer>


  </body>
</html>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phonecode = $_POST['phonecode'];
$phone = $_POST['phone'];
$package = $_POST['package'];
$gender = $_POST['gender'];

if(!empty($fname)|| !empty($lname)|| !empty($email) || !empty($phonecode) ||
!empty($phone) || !empty($package) || !empty($gender)){
  $host ="localhost";
  $dbUsername ="root";
  $dbPassword ="";
  $dbname ="register";

  //create fann_get_total_connections
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }else {
    $SELECT ="SELECT email FROM register Where email = ? Limit 1";
    $INSERT ="INSERT Into register(fname,lname,email,phonecode,phone,package,gender)
    values(?,?,?,?,?,?,?) ";
    $stmt =$conn ->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum =$stmt->num_rows;
    if ($rnum==0) {
      $stmt->close();

      $stmt =$conn->prepare($INSERT);
      $stmt->bind_param("sssiiss",$fname,$lname,$email,$phonecode,$phone,$package,$gender);
      $stmt->execute();
      echo '<script type="text/javascript">';
      echo ' alert("You have registered successfully")';  //not showing an alert box.
      echo '</script>';
    }else {
      echo '<script type="text/javascript">';
      echo ' alert("This Email is already Register ")';  //not showing an alert box.
      echo '</script>';

    }
      $stmt->close();
      $conn->close();
  }

}else {
  echo "All field are Required";
  die();
}

?>
