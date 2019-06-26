<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en" >
<head>
      <link rel="icon" href="taknew logo.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
  <meta charset="UTF-8">
  <title>Sign up</title>
      <link rel="stylesheet" href="css/signup.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style type="text/css">
body{
}
.topic{
  font-weight:400;
  margin-top: 50px;
}
.menu{
  float: right;
	margin-right: 4%;
	cursor:pointer;
  font-size: 20px;

}
.sidenav {
  height: 250px;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 3px;
  right:3px;
  background-color:#010814;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;}
.sidenav ul{
  list-style: none;
  list-style-type: none;
  padding-left: 0px;
}
.sidenav a {
  font-family: 'Dosis', sans-serif;
  padding: 3px;
  text-decoration: none;
  font-size: 20px;
  color: #8FBAE4;
  display: block;
  transition: 0.3s;
  text-align:center;}

.sidenav a:hover {
  text-decoration: none;
  color: #f1f1f1;}
.sidenav .closebtn {
  position: absolute;
  top: -10px;
  right: 10px;
  font-size: 40px;
  margin-left: 50px;
}
.logo {
  text-align: center;
  position: absolute;
  margin: 0 auto;
  left: 35%;
  border-radius: 50%;
  top: -45px;
  background-color: #2C3D4F;
  padding: 2px;
}
@media (min-width: 481px) and (max-width: 767px) {

.signup{
  margin-top: 20px!important;
}
}
</style>
</head>

<body >
<div id="particles-js"></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="proshows.php">PROSHOWS</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
        </ul>
  </div>
  <div class="menu" onclick="openNav()">&#9776;&nbsp;Menu
  </div>
  <div id="login-box">
  	<div class="logo" style="background-color:">
				<img style="width: 100px;height:100px;"  src="taknew logo.png">
			</div>
  <div class="left">
    <h1 class="topic">Sign up</h1>
          <form method="post" action="server.php">
    <div class="sign_up_content">

    <input type="text" id="name" name="name" placeholder="Name" required oninvalid="this.setCustomValidity('Enter your name')" oninput="setCustomValidity('')" />
    <input type="number" id="year" name="year" placeholder="Current Year"min="1" max="4" maxlength="1"required oninvalid="this.setCustomValidity('Enter your current year')" oninput="setCustomValidity('')"/>
    <input type="text" id="department" name="department" placeholder="Department" required oninvalid="this.setCustomValidity('Enter your department')"oninput="setCustomValidity('')"  />
    <input type="text" id="collegename" name="collegename" placeholder="College" required oninvalid="this.setCustomValidity('Enter ypur college name')" oninput="setCustomValidity('')" />
    <input type="number" id="mobile"min="1000000000"max="9999999999" maxlength="10" name="mobile" placeholder="Mobile Number" oninvalid="this.setCustomValidity('Enter valid mobile number')" oninput="setCustomValidity('')" required/>
    <input type="text" id="mail" name="email" placeholder="Mail-Id" required oninvalid="this.setCustomValidity('Enter your E-mail')" oninput="setCustomValidity('')"/>
    <input type="password" id="password" name="password_1" placeholder="Password" oninvalid="this.setCustomValidity('Enter a password')" oninput="setCustomValidity('')" required/>
    <input type="password" id="password2" name="password_2" placeholder="Retype password" oninvalid="this.setCustomValidity('Re-enter the password')" oninput="setCustomValidity('')" required/>
  <!--  <p>
      Already a member? <a href="login.php">Sign in</a> </br>
    </p>-->
  </div>
    <input type="submit" class="signup" name="reg_user" value="Sign me up" />
  </div>
          </form>
</div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script  src="js/login.js"></script>
     <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginRight = "0px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight = "0";
  document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>
