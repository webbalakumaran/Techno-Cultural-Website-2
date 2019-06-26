<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="icon" href="taknew logo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="css/login.css">
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Dosis:500);
@font-face{
  font-family: tak;
  src:url(font/takfont.ttf);
}
.logo{font-size: 20px;
  	margin: 0;
}
img{margin-left: 2%;
        	padding: 0;
            left: 0;
            position: relative;}
      	.txt{text-align: center;
      		font-size: 15px;
      	    font-weight: lighter;}
      	a:hover{color: #C5CACD;
      		text-decoration: none;}
      	.logbtn{border-radius: 80px;}
.welc_txt{
    margin-top: 16px;
}
.menu{
  float: right;
	margin-right: 4%;
	cursor:pointer;
    font-size:20px;
    color: #91a6b9;
    font-family: Dosis,sans-serif;
	}
  .fas{
    font-size: 23px;
  }
.sidenav {
  height: 330px;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 3px;
  right:3px;
  background-color:#283541;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;}

.sidenav a {
  padding: 3px;
  text-decoration: none;
  font-size: 20px;
  color: #8FBAE4;
  font-family: 'Dosis', sans-serif;
  display: block;
  transition: 0.3s;text-align:center;}

.sidenav a:hover {
  color: #f1f1f1;}
.sidenav .closebtn {
  position: absolute;
  top: -10px;
  right: 10px;
  font-size: 40px;
  margin-left: 50px;
}
.cs{
  text-align: center;
  font-size: 50px;
  font-family: tak;
}
</style>
</head>
<body class="login">
<div id="particles-js"></div>
<header></header>
		<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <ul class="list-unstyled">
          <li><a href="index.php">HOME</a></li>
          <li><a href="events.php">EVENTS</a></li>
          <li><a href="proshows.php">PROSHOWS</a></li>
    <li><a href="sponsor.php">SPONSORS</a></li>      <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
      </ul>
</div>
<div class="menu" onclick="openNav()">&#9776;&nbsp;Menu
</div>
    <div class="uno">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="logo" style="background-color:">
				<img style="width: 102px;height:105px;"  src="taknew logo.png">
			</div>
      <!--<div class="cs">COMING SOON</div>-->

			<div class="welcome"><strong>Welcome,</strong> please login</div>

			<form class="form-horizontal login-form" method="post" action="login.php">
        <?php include('errors.php'); ?>
      	<div class="form-group relative">
					<input id="login_username" name="username" class="form-control input-lg" type="text" placeholder="Username" required>
  					<i class="fa fa-user"></i>
				</div>
        <div class="form-group relative">
          <input id="login_username" name="email" class="form-control input-lg" type="email" placeholder="Email" required>
          <i class="fa fa-user"></i>
        </div>
				<div class="form-group relative password">
					<input id="login_password" name="password" class="form-control input-lg" type="password" placeholder="Password" required>
					<i class="fa fa-lock"></i>
				</div>
			  <div class="form-group ">
			    <button type="submit" class="btn btn-success btn-lg btn-block logbtn" name="login_user">Login</button>
			  </div>
			  <div class="txt"><p>Not a member?<a href="register.php">SIGN UP NOW</a></p>

<br>
<div>
  <p style="color: white;">Pay your Entrance Fee here </p>
<a href="https://www.townscript.com/e/takshashila-001402"><button type="button" name="button" class="btn btn-info">Payhere</button></a>
</div>

			  </div>
       <!-- <div class="checkbox pull-left">
			    <label><input type="checkbox"> Remember</label>
			  </div>
			  <div class="checkbox pull-right">
			    <label> <a class="forget" href="" title="forget">Forgot your password</a> </label>
			  </div>-->
			</form>
		</div>
	</div>
</div>

  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script  src="js/login.js"></script>
     <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
