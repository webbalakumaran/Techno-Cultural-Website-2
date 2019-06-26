<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 , user-scalable=0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300|Nunito+Sans:200,300,400|Dosis:500|Cormorant+SC:400|Marck+Script|Roboto:300" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" href="taknew logo.png">
<title>About Us</title>
<style type="text/css">
body{
  background-image: url(img/t/au2.jpg);
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


header{
height: 40px;}
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
  padding:3px;
  text-decoration: none;
  font-size: 20px;
  color: #f8b74f;
  display: block;
  transition: 0.3s;
  text-align:center;}

.sidenav a:hover {
  color: #f1f1f1;}

.sidenav .closebtn {
  position: absolute;
  top: -10px  ;
  right: 10px;
  font-size: 40px;
  margin-left: 50px;}

.container{margin: 0px;
text-align: center;
align-content: center;}
.logo{margin-top: 50%;
text-align: center;}

h1{font-weight: 200;}
h2{font-family: 'Roboto', sans-serif;
font-weight: 300;
font-size: 28px;}
h4{
  font-family: 'Marck Script', cursive;
font-weight: 300;
font-size: 26px;
line-height: 26px;
text-indent: 2.7em;
text-align: justify;}
.para{
  font-family: 'Marck Script', cursive;
}
.welc_txt{
  margin-top: 16px;
}
footer{
width:100%;
position:fixed;
display: inline-block;
text-align: center;
bottom: 0px;}
.bigfol-inner{
    padding: 5px;
    border-radius: 15px 15px 0px 0px;
    width: 150px;
    text-align: center;
    display: inline-block;
}
img{margin: 0;}
.folus{
	text-align: center;
    font-size: 13px;
	color:#3F4460;}
.fab{  -webkit-transition:-webkit-transform 0.3s;
	   transition:transform 0.3s;
  font-size: 20px;}
.fab:hover{  -webkit-transform: scale(1.5,1.5);
transform: scale(1.5,1.5);}
footer{text-align: center;}
a{text-decoration: none;
color: #303F54;}
a:hover{text-decoration: none;
color: #3F4460;}

@media only screen and (max-width:500px){
	.logo{margin-top: 10%;}
	.citlogo{width:300px;}
  footer{
    background-color: #f0ab43;
    box-shadow: 0px 0px 10px 5px #1e1e1e;
  }
  body{
    background-color: #f0ab43;
    background-image: none;
  }
	.sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  .row{
    display: inline-block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
}

</style>
</head>
<body >
	<header>
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
</header>
	<div class="container">
		<div class="row">
		<div class="col-md-3">
			<div class="logo">
    			<img src="taknew logo.png" style="width: 150px;height: 150px;">
    			<h1>About Us</h1>
            </div>
         </div>
    	<div class="col-md-9">
			<center><h2>TAKSHASHILA</h2></center>
     			<p class="para"><h4>Takshashila, three days define and set a benchmark for cultural extravaganza which trails in the sands of time and memory. With dynamic cultural principles, for over two years this fest has been poetically rendering itself into a beautiful sonnet. Technical events which are organised by departments placed with equal importance to all geeks we adore. For the people who groove with a wide sense of euphoria, the non- technical events are carried out together with an emotion of unity by the students of Chennai Institute of Technology.</h4></p>
    		<center><h2>ABOUT THE COLLEGE</h2></center>
     			<p class="para"><h4>A metaphorically young institution with a nine year old history, living to its brightest days, we haven't surrendered to the excuse of time. With a glorifying status of standing tall among the other colleges, we have flourished over the days. With all this pride, we also have something which makes us look red in a bag of blue - we have made collaborations with various universities and industries worldwide for better enhancement in industrial and technical sectors of knowledge.</h4></p>
     	</div>
 		</div><br><br><br><br><br>
	</div>
    <footer>
        <div class="bigfol-inner">
     	<div class="folus">Follow us</div>
     	<div class="folus_icons">
          <a href="https://www.facebook.com/cittakshashila/" target="_blank">
            <i class="fab fa-facebook-f glow"></i></a>
          <a href="https://www.instagram.com/cittakshashila/" target="_blank">
            <i class="fab fa-instagram glow"></i></a>
          <a href="https://twitter.com/cittakshashila" target="_blank">
            <i class="fab fa-twitter glow"></i></a>
          <a href="https://www.youtube.com/channel/UC3dqkYXtt3qA3GHYop75Yeg" target="_blank">
            <i class="fab fa-youtube glow"></i></a>
        </div>
    </div>
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
