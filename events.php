<?php session_start()?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400|Italiana|Bangers|Montserrat|Dosis:500'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="css/events.css">
      <link rel="icon" href="taknew logo.png">
 <style type="text/css">
@font-face{
  font-family: tak;
  src:url("font/takfont.ttf");
}

.welc_txt{
  margin-top: 16px;
}
header{
	text-align: center;
}
body{
  background-image: url("img/t/background.jpg");
  background-repeat: repeat;
  background-position: center;
  background-size: cover;
}
.thalaipu{
  font-size:75px;
  margin-top: 12px;
  width: 100px;
  color: #bc994e;
  margin-left: 6%;
  text-align: center;
}
 #logo{
  width: 80px;height:80px;
}
.h1{
  text-align: center;
  color: ivory;
  font-weight: 300;
  z-index: 100;
}
a{
  font-size: 30px;
  font-family: 'Italiana', serif;
  font-weight: 400;
  color: ivory;
  text-decoration: none;
  transition: font-size 1s;
}
a:hover{
  text-decoration: none;
  font-size: 34px;
}
.el:not(.s--active) {
cursor: context-menu;
}
.menu{
  color: #bc994e;
  float: right;
  top: 10px;
  margin-right: 4%;
  cursor:pointer;
  font-size:25px;
  font-weight: lighter;
}
.sidenav {
  height: 330px;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 3px;
  right:3px;
  background-color:#010814;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;}
.sidenav a {
  font-family: 'Dosis', sans-serif;
  padding: 3px;
  text-decoration: none;
  font-size: 20px;
  color: #bc994e;
  display: block;
  transition: 0.3s;
  text-align:center;
}
.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: -10px;
  right: 10px;
  font-size: 40px;
  margin-left: 50px;
}
.folus{
  background-color: transparent;
  text-align: center;
  font-weight: lighter;
  font-size: 17px;
  color:tan;}
.fab{
  -webkit-transition:-webkit-transform 0.3s;
  font-size: 25px;
}
.fab:hover{
  -webkit-transform: scale(1.5,1.5);
}
a{
  text-decoration: none;
}
a:hover{
  text-decoration: none;
}
.fa-twitter{color: #1da1f2}
.fa-twitter:hover{color: #1da1f2}
.fa-facebook-f:hover{color: #4867aa}
.fa-facebook-f{color: #4867aa}
.fa-youtube{color: #ff0000}
.fa-youtube:hover{color: #ff0000;}
@media only screen and (max-width: 500px){
  .thalaipu{
    font-size: 55px;
    padding-top: 20px;
    margin-left: 2%;
  }
  img{
    margin-top: 20px;
  }
  .fas{
    margin-top: 30%;
    font-size: 26px;
  }
  #logo{
    width: 50px;
    height: 50px;
  }
}
 </style>


</head>

<body id="bod">
    <div class="" style="text-align: center;">
    <div id="mySidenav" class="sidenav">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     <ul class="list-unstyled">
       <li><a href="index.php">HOME</a></li>
       <li><a href="events.php">EVENTS</a></li>
       <li><a href="proshows.php">PROSHOWS</a></li>
   <li><a href="sponsor.php">SPONSORS</a></li>
      <li><a href="gallery.php">GALLERY</a></li>
       <li><a href="about.php">ABOUT US</a></li>
       <li><a href="contact.php">CONTACT US</a></li>
       <li style="font-family: 'Varela', sans-serif; font-size:14px; color:white; text-align:center;">
         <?php  if (isset($_SESSION['email'])) : ?>
          <p class="welc_txt">Welcome <strong><?php echo $_SESSION['username']; ?></strong><br>
       <a href="login.php?logout='1'" style="color:#d6492c; font-size:16px;">Logout</a> </p>
   <?php else: ?>
       <a href="login.php">LOGIN</a><?php endif ?>
     </li>
   </ul>
</div>
<div class="menu" onclick="openNav()"><i class="fas fa-bars">
<span style="font-weight:100;"></span></i>
</div>
	<div style="text-align:left">
	 	<h1 class="thalaipu" style="font-family: tak;display: inline;"><img id="logo" src="taknew logo.png">EVENTS</h1>
	</div>
  <div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <a href="cultural events.php">
          <div class="el__preview-cont">
            <h2 class="el__heading">CULTURAL EVENTS</h2>
          </div>
          </a>
        </div>
      </div>

    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <a href="sympo.php">
          <div class="el__preview-cont">
            <h2 class="el__heading">SYMPOSIUM</h2>
          </div></a>
        </div>
      </div>
    </div>
    <!-- el end -->
  </div>
  <!-- cont inner end -->
</div>
<div class="folus"> Follow us</div>
              <div>
          <a href="https://www.facebook.com/cittakshashila/" target="_blank">
            <i class="fab fa-facebook-f glow"></i></a> &nbsp;
          <a href="https://www.instagram.com/cittakshashila/" target="_blank">
            <img class="fab" style="width: 24px; height: 24px;margin-top: -6px;" src="img/logo/instagram.png"></a>&nbsp;
          <a href="https://twitter.com/cittakshashila" target="_blank">
            <i class="fab fa-twitter glow"></i></a>&nbsp;
          <a href="https://www.youtube.com/channel/UC3dqkYXtt3qA3GHYop75Yeg" target="_blank">
            <i class="fab fa-youtube glow"></i></a>&nbsp;
</div>
<script  src="js/proshows.js"></script>
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
