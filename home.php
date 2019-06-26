<?php session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" href="taknew logo.png">

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700);
@import url("https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300,500,900|Dosis:500");
*, *:before, *:after {
  box-sizing: border-box;}
html, body {
height: 100%;
display: grid;
background-image: url("img/t/bg.jpg");
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
body {
  position: relative;}
.container{width: 100vw;}
.menu{
  position: absolute;
  right: 0%;
  margin-right: 4%;
  cursor:pointer;
  font-size:25px;
  z-index: 1; }
.fas{
  color:#1e1e1e;
  font-size: 30px;}
.box{
  padding: 10px;
  }
.sidenav {
  height: 330px;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 3px;
  right:3px;
  background-color:#2b261e;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;}

.sidenav a {
  font-family: 'Dosis', sans-serif;
  padding:3px;
  text-decoration: none;
  font-size: 20px;
  color: #bc994e;
  display: block;
  transition: 0.3s;
  text-align:center;}

.sidenav a:hover {
  color: #ECE9E2;}

.sidenav .closebtn {
  position: absolute;
  top: -10px;
  right: 10px;
  font-size: 40px;
  margin-left: 50px;}
.wrap {
  height: 100%;
  position: relative;
  overflow: hidden;}
.wrap .bg {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  background-image: url("img/t/bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  -webkit-transform: scale(1.1);
          transform: scale(1.1);}
.main{text-align: center;
	color: #f6f4f3;}
.title{

font-weight: lighter;
font-size: 60px;
color:#f38810;}
.container {
  display: grid;
  position: relative;
  overflow: hidden;
  width: 100%;}
.tak{height:110px;width: 110px;margin-top: 5px;}
.takname{height: 110px;}
#timer {
  color: #f3f3f3;
  text-align: center;
  text-transform: uppercase;
  font-family: "Lato", sans-serif;
  font-size: .7em;
  letter-spacing: 2px;
margin-top: 55px;}
.days, .hours, .minutes, .seconds {
  display: inline-block;
  padding: 25px;
  width: 100px;
  height: 100px;
  border-radius: 5px;
  background: #020202;}

.numbers {
  font-family: "Montserrat", sans-serif;
  font-weight: 900;
  color: #bc994e;
  font-size: 2em;}
.datte{color:  #dce0e8  ;
      font-family: "Montserrat", sans-serif;
      font-weight: 500;
      font-size: 30px;
      line-height: 20px;
      margin-top: 5%;
      text-shadow: 0px 0px 2px black; }
.folus{background-color: transparent;
	text-align: center;
	font-weight: lighter;
  font-size: 17px;
  margin-bottom: 3px;
	color:red;}
 .fab{  -webkit-transition:-webkit-transform 0.3s;
  font-size: 25px;
}
.welc_txt{
  margin-top: 16px;
}
footer{
  text-align: center;
  position: fixed;
  bottom: 0px;
  width: 100%;
}
.dappa{
  width: 200px;
  display: inline-block;
  text-align: center;
  padding-bottom: 5px;
  background-color: rgba(0,0,0,0.8);
  border-radius: 10px 10px 0px 0px;
}
.fab:hover{  -webkit-transform: scale(1.5,1.5);}
a{text-decoration: none;}
a:hover{text-decoration: none;}
.fa-twitter{color: #1da1f2}
.fa-twitter:hover{color: #1da1f2}
.fa-facebook-f{color: #4867aa}
.fa-facebook-f:hover{color: #4867aa}
.fa-youtube{color: #ff0000}
.fa-youtube:hover{color: #ff0000;}

@media only screen and (max-width: 760px){
  .tak{width: 90px;
    height: 90px;}
  .takname{width: 300px;
    height: 110px;}
	.container {width: 100vw;}
	.days, .hours, .minutes, .seconds {
  display: inline-block;
  width: 80px;
  height: 80px;
  border-radius: 5px;
text-align: center;}
    .numbers {font-size: 18px;
    	font-weight: lighter;}
    .datte {font-size: 20px;
    	margin-top: 150px;
    	line-height: 10px;}
    .logo {width: 250px;}
}
@media only screen and (max-width: 420px){
  .wrap .bg{
    background-image: url(img/t/bg.jpeg);
    background-size: cover;
      -webkit-transform: none;
          transform: none;
  }
  .container{
    width: 100vw;
  }
  .datte{
    color: #dc2121;
  }
}
@media only screen and (max-width: 376px){
  .wrap .bg{
    background-image: url("img/t/bg.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  .tak{width: 70px;
    height: 70px;}
  .takname{width: 250px;
    height: 90px;}
  .container{
    width: 100vw;
  }
  .days, .hours, .minutes, .seconds {
  display: inline-block;
  width: 60px;
  height: 60px;
  border-radius: 5px;
  text-align: center;}
  .numbers {font-size: 13px;
  font-weight: lighter;
  margin-top: -5px;
  margin-left: -5px;
  text-align: center;}
  .datte {font-size: 20px;
  margin-top: 80px;
  line-height: 10px;}
}
@media only screen and (max-width:500px){
  .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
      #main {
  position: absolute;}

}

</style>
<title>CIT Takshashila</title>
</head>
<body id="main">
  <div class="wrap">
  <div class="bg"></div>
              <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <ul class="list-unstyled">
            <li><a href="home.php">HOME</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="proshows.php">PROSHOWS</a></li>
            <li><a href="sponsor.php">Sponsor</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li style="font-family: 'Varela', sans-serif; font-size:14px; color:white; text-align:center;">
              <?php  if (isset($_SESSION['email'])) : ?>
               <p class="welc_txt">Welcome <strong><?php echo $_SESSION['username']; ?></strong><br>
            <a href="index.php?logout='1'" style="color:#d6492c; font-size:16px;">Logout</a> </p>
        <?php else: ?>
            <a href="index.php">LOGIN</a><?php endif ?>
          </li>
        </ul>
  </div>
  <div class="menu" title="Menu" onclick="openNav()"><div class="box"><i class="fas fa-bars">
  	<span style="font-weight:100;"></span></i></div>
  </div>

  	<div class="main">
  		<center><img class="logo" src="citlogo.png"></center>


  		    <p style="font-family: Corbel Light;font-weight:lighter;font-size: 17px;line-height: 16px;color: #000;">proudly presents</p>
  			<center>
  				<div ><img class="tak" src="taknew logo.png" style=""><img class="takname" src="takname.png"></div></center>
  			<div class="container">
                     <div id="timer"></div>
                     </div>
                 </div>
            <center><div class="datte"><P>21<sup>st</sup>-23<sup>rd</sup>,February 2019.</P>
           	</div></center>
            <footer><div class="dappa"><div class="folus"> Follow us</div>
              <div>
          <a href="https://www.facebook.com/cittakshashila/" target="_blank">
            <i class="fab fa-facebook-f glow"></i></a> &nbsp;
          <a href="https://www.instagram.com/cittakshashila/" target="_blank">
            <img class="fab" style="width: 23.8px; height: 23px;margin-top: -6.9px;" src="img/logo/instagram.png"></a>&nbsp;
          <a href="https://twitter.com/cittakshashila" target="_blank">
            <i class="fab fa-twitter glow"></i></a>&nbsp;
          <a href="https://www.youtube.com/channel/UC3dqkYXtt3qA3GHYop75Yeg" target="_blank">
            <i class="fab fa-youtube glow"></i></a>&nbsp;
</div></div>
      </footer>
      </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="index.js"></script>
          <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginRight = "0px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.9)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight = "0";
  document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>

