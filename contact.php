<?php session_start()?>
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
<link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:500" rel="stylesheet">
<link rel="icon" href="taknew logo.png">
<title>Contact Us</title>
<style type="text/css">
body{
  background-image: url(contact-bg.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
body::-webkit-scrollbar {
    width: 8px;

}
 body::-webkit-scrollbar-track {

}
body::-webkit-scrollbar-thumb {
  background-color: grey;
  border-radius: 6px;
}

.welc_txt{
  margin-top: 16px;
}

header{padding: 12px;}
#main {
  transition: margin-right .5s;

}
.menu{
  float: right;
  margin-right: 4%;
  cursor:pointer;
    font-size:25px;
  }
.sidenav {
  height: 330px;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 3px;
  right:3px;
  background-color:#000;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;}
.sidenav a {
  font-family: 'Dosis', sans-serif;
  padding: 3px;
  text-decoration: none;
  font-size:20px;
  color: #f8b74f;
  display: block;
  transition: 0.3s;
  text-align:center;}

.sidenav a:hover {
  color: #f1f1f1;}

.sidenav .closebtn {
  position: absolute;
  top: -10px;
  right: 10px;
  font-size: 40px;
  margin-left: 50px;}

.container{margin: 0px;}
.logo{margin-top: 50%;
text-align: center;}
h1{font-weight: lighter;}
h2{font-weight: normal;}
h3{font-weight: lighter;}
h4{font-family:Palatino Linotype;
font-weight: lighter;}
footer{
width:100%;
position:relative;
bottom: 0px;
}
.bigfol{
    padding: 5px;
    border-radius: 15px 15px 0px 0px;
    width: 150px;
    margin-left: 200px;
    display: inline-block;}
.folus{background-color: transparent;
	text-align: center;
	font-weight: bold;
    font-size: 13px;
	color:#005cad;}

.fab{  -webkit-transition:-webkit-transform 0.3s;
	   transition:transform 0.3s;
  font-size: 20px;}

footer{text-align: justify;}
.fab:hover{  -webkit-transform: scale(1.5,1.5);
transform: scale(1.5,1.5);}
a{text-decoration: none;
color:#005cad;}
a:hover{text-decoration: none;
color:#005cad;}
iframe{width: 500px;
height: 500px;}
.pdf{
  margin-top: 25px;
}
.pdf h4{
  font-size: 20px;
  display: inline-block;
  font-family: 'Raleway', sans-serif;

}
.pdf .btn{
  background-color: green;
}

@media only screen and (max-width:500px){
	.logo{margin-top: 10%;}
	.citlogo{width:300px;}
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    iframe{width: 98%;
height: 500px;}
  .row{
    display: inline-block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
  .container a,h4{
    font-size: 20px;
  }
  h2{
    font-size: 25px;
  }
  h3{
    font-size: 22px;
  }
  #main {
  position: absolute;}

.bigfol{
margin-left: 0px;

}
body{
background-image: none;
    
background-color: #fbe8cc;

}

}

@media only screen and (max-width:450px){
   .folus{margin-top: 2px;}
   .citlogo{width:250px;}
   iframe{width: 90%;
height: 350px;}
   .sidenav{
    color: #f0ab43;
   }
   body{width: 100%;}
   footer{
    background-color: #f0ab43;
    box-shadow: 0px 0px 10px 5px #1e1e1e;
   }
   body{
background-image: none;
background-color: #fbe8cc;

   }
.bigfol{
margin-left: 0px;

}

}

</style>
</head>
<body id="main">
  <header></header>
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

	<div class="container">
		<div class="row">
		<div class="col-md-3">
			<div class="logo">
    			<img src="taknew logo.png" style="width: 150px;height: 150px;">
    			<h1>Contact Us</h1>
            </div>
         </div>
    	<div class="col-md-8">
          <center>
            <h4>For any queries feel free to write or contact at <a href="mailto:takshashila@citchennai.net">takshashila@citchennai.net</a></h4></center>
              <center>
                <h2>For queries on:</h2>
                <h3>Registration: +919551781237.  </h3>
                <h3>Events: +919080714310.  </h3>
                <h3>Logistics: +918148182887.</h3>
              </center>
      <center><div class="pdf"><h4>Bus Routes :&nbsp;<a href="Bus-Routes-with-Timings.pdf" download><button type="button" class="btn btn-success" name="button">Download <i class="fa fa-download" aria-hidden="true"></i></button></a></h4></div> </center>  <br>
          <center><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124416.13999603194!2d79.97338045888525!3d12.971571635731657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a52f4d07355bab5%3A0xbb6063169c4ed4d9!2schennai+institute+of+technology!3m2!1d12.971580999999999!2d80.043421!5e0!3m2!1sen!2sin!4v1514441623305" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
     	</div>

 		</div>

<br><br>
        <center>
     	<div class="bigfol">
<div class="folus"> Follow us</div>
              <div>
          <a href="https://www.facebook.com/cittakshashila/" target="_blank">
            <i class="fab fa-facebook-f glow"></i></a> &nbsp;
          <a href="https://www.instagram.com/cittakshashila/" target="_blank">
            <img class="fab" style="width: 23.8px; height: 23px;margin-top: -6.9px;" src="img/logo/instagram.png"></a>&nbsp;
          <a href="https://twitter.com/cittakshashila" target="_blank">
            <i class="fab fa-twitter glow" style="color:deepskyblue;"></i></a>&nbsp;
          <a href="https://www.youtube.com/channel/UC3dqkYXtt3qA3GHYop75Yeg" target="_blank">
            <i class="fab fa-youtube glow" style="color:red;"></i></a>&nbsp;
</div>    </div>
</center>


<br><br><br><br>
	</div>
    <footer">
     <div style="color: ; text-align:center;">

      <p><strong>Website Developed and Maintained by:</strong></p>
      <p>Sathiya Narayanan.S.L(EEE) , Ashok Kumar.K(EEE) , Rushitha.P(CSE) , Vinith selva.S(CSE), Gokulnath.S(EEE) , Balakumaran.N(CSE)</p> 

     </div>

     </footer>

     <footer>


     </footer>
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
