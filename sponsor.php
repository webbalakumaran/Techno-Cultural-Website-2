<?php  session_start() ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1", maximum-scale=1, user-scalable=>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Dosis:500|Cinzel:400|Cinzel+Decorative|Poppins:300" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" href="taknew logo.png">
<style type="text/css">
@font-face{
	font-family: taks;
	src:url("font/takfont.ttf");
}
*, *:before, *:after {
  box-sizing: border-box;}
html, body {
height: 100%;
display: grid;}
body {
  position: relative;}
.wrap {
  height: 100%;
  position: relative;
  overflow: hidden;}
.wrap .bg {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -500;
  background-image: url("img/t/background.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.wrap .overbg{
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: -400;
}
.menu{
  position: absolute;
  right: 0px;
  margin-right: 2%;
  z-index: 10;		
  cursor:pointer;
  font-size:25px;}
.fas{color:#f7c14f;}
.box{padding: 10px;}
.sidenav {
  height: 380px;
  width: 0;
  position: fixed;
  z-index: 11;
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
  right: 8px;
  font-size: 40px;
  margin-left: 50px;}

.overlay h1{
	text-align: center;
	color: #f7c14f;
	margin-top: 3rem;
	font-size: 3.5rem;
/*	font-family: 'Cinzel', serif;
	font-family: 'Cinzel Decorative', cursive;*/
	font-family: taks;

}
.title_sponser{
	width: 40%;
	height: 90%;
	margin-top: 5%;
	display: inline-block;
/*	background-color: rgba(50,50,50,0.5);*/
	text-align: center;
	font-family: 'Poppins', sans-serif;
	color: #f7c14f;
}
.title_sponsers h4{
	margin-bottom: 0px;
}
.logo2{
	margin-top: 2%;
}
.col-md-6{
	display: inline-block;
	text-align: center;
}
.fakecenter{
	width: 100%;
	text-align: center;
	display: inline-block;
}
.second_sponsers{
	position: relative;
	display: inline-block;
	text-align: center;
	width: 60%;
	margin-top: 2%;
/*	background-color: rgba(50,50,50,0.5);*/
	color: #f7c14f;
	font-family: 'Poppins', sans-serif;
}
.col-md-4 h4{
	text-align: center;
}
.third-sponsers{
	width: 90%;
	height: 100%;
	margin: 0 5%;
	margin-top: 2%;
	color: #f7c14f;
/*    background-color: rgba(30,30,30,0.5);*/
	text-align: center;
	font-family: 'Poppins', sans-serif;
}
.row{
	margin-bottom: 100px;
}
.logoone{
	display: inline-block;
	width: 300px;
	text-align: center;
	height: 120px;
}
.title{
	background-image: url(img/logos/vtat.png);
	background-repeat: no-repeat;
	background-position: center;
	background-size: contain;

}
.logotwo{
	display: inline-block;
	width: 300px;
	height: 150px;
	text-align: center;
}
.sec-row-one{
	padding: 25px 0 10px 0;
}
.sec-row-one-a{
	position: relative;
	height: 90%;
	width: 100%;
	background-image: url(img/logos/radiomirchi.jpg);
	background-repeat: no-repeat;
	background-position: center;
	background-size: contain;
}
.sec-row-two{
	background-image: url(img/logos/playmonk.png);
	background-position: center;
	background-size: contain;
	background-repeat: no-repeat;
}
.logothree{
	display: inline-block;
	text-align: center;
	width: 300px;
	height: 150px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: contain;
}
.th-one{
	background-image: url(img/logos/zebronics.jpg);
}
.th-two{
	background-image: url(img/logos/iecabroad.jpg);
}
.th-three{
	background-image: url(img/logos/poorvika.png);
}
.fo-one{
	background-image: url(img/logos/crizaze.png);
}
.fo-two{
	background-image: url(img/logos/candc1.jpg);
}
.fo-three{
	background-image: url(img/logos/essensuals.jpg);
}
.fi-one{
	background-image: url(img/logos/assgame1.png);
}
.fi-two{
	background-image: url(img/logos/assgame2.png);
}
.fi-three{
	background-image: url(img/logos/blazze.png);
}
.si-one{
	background-image: url(img/logos/freeindia.jpg);
}
.si-two{
	background-image: url(img/logos/fun-city.png);
}
.si-three{
	background-image: url(img/logos/lakshman.png);
}
@media only screen and (max-width: 420px){
	.row{
		margin:0px;
		padding: 0px;
	}
	.overlay h1{
		font-size: 2.75rem;
	}
	.title_sponser{
		width: 100%;
		background-color: transparent;
		margin-bottom: 20px;
	}
	.second_sponsers{
		width: 100%;
		background-color: transparent;
		display: block;
		margin: 20px 0px;
	}
	.third-sponsers{
		background-color: transparent;
		margin: 0%;
		width: 100%;
		margin: 20px 0;
	}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg"></div>
		<div class="overbg"></div>
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
<div class="menu" onclick="openNav()"><div class="box"><i class="fas fa-bars"></i></div>
</div>
		<div class="overlay">
			<h1>OUR&nbsp;&nbsp;&nbsp;SPONSORS</h1>			
			<div class="container">
			<div class="row">
				<div class="fakecenter">
			<div class="title_sponser logo1"> 
			<a target=_blank href=" https://www.vigneshtat.com/m/index.html#/nav/n4/home">	<div class="logoone title"></div> </a>
				<h4>Travel Partner</h4>
				</div>
			</div>
			</div>
				<div class="row">
					<div class="col-md-6">
						<div class="second_sponsers">
						<a target=_blank href="http://www.radiomirchi.com/chennai">	<div class="logotwo sec-row-one"><div class="sec-row-one-a"></div></a></div>
							<h4>Radio Partner</h4>
						</div>
					</div>
					<div class="col-md-6">
						<div class="second_sponsers">
						<a target=_blank href="https://playmonk.com">	<div class="logotwo sec-row-two"></div></a>
							<h4>Premium Gaming Partner</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="third-sponsers">
       				<a target=_blank href="https://zebronics.com"	>	<div class="logothree th-one"></div> </a>
							<h4>Audio Partner</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href="https://www.poorvikamobile.com/index.php?route=mobile/home">	<div class="logothree th-three"></div></a>
							<h4>Certificate Partner</h4>
						</div> 
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href=" https://www.iecabroad.com"><div class="logothree th-two"></div> </a>
						<h4>Education Partner</h4> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href=" https://www.cropsncurls.com">	<div class="logothree fo-two"></div> </a>
							<h4>Style Partner</h4>
						</div> 
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
							<a target=_blank href="https://crizaze.com">	<div class="logothree fo-one"></div> </a>
						<h4>Fashion Partner</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href="https://essensuals.com">	<div class="logothree fo-three"></div></a>
							<h4>Style Partner</h4>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href="http://www.arknemesisgaming.com/">	<div class="logothree fi-one"></div></a>
							<h4>Associate Gaming Partner</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href=" https://instagram.com/chennailasertag?utm_source=ig_profile_share&igshid=1rdg4tn6csvs0">	<div class="logothree fi-two"></div></a>
							<h4>Associate Gaming Partner</h4>
						</div> 
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href=" http://www.blazzesoapyfootball.com">	<div class="logothree fi-three"></div> </a>
							<h4>Sports Partner</h4>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="third-sponsers">
						<a target=_blank href=" http://www.freeingindia.in">	<div class="logothree si-one"></div> </a>
							<h4>Entertainment Partner</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href=" http://funcityindia.com/m">	<div class="logothree si-two"></div> </a>
							<h4>Entertainment Partner</h4>
						</div> 
					</div>
					<!--<div class="col-md-4">
						<div class="third-sponsers">
						<a target=_blank href="http://www.lakshmansruthi.com/index.asp">	<div class="logothree si-three"></div> </a>
							<h4>Music Partner</h4>
						</div>
					</div>-->
					
				</div>
			</div>
		</div>
	</div>
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
