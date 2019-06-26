<?php session_start() ?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Proshows</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans|Dosis:500'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="css/proshows.css">
      <link rel="icon" href="taknew logo.png">
 <style type="text/css">
@font-face {
  font-family: tak;
  src: url(font/takfont.ttf);
}
header{
 		color: ivory;
 	  text-align: center;
}
.h1{
    text-align: center;
    color: ivory;
    font-weight: 300;
}
.welc_txt{
  margin-top: 16px;
}
.thalaipu{
  color: ivory;
  font-size: 90px;
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
.btn{
  border: 2px solid white;
  border-radius: 20px;
  color: white;
  background: transparent;
  margin-bottom: 50px;
}
.btn:hover{
  background: rgba(240,240,240,0.7);
}
.music{
  font-size: 20px;
  text-align: justify;
  margin: auto 20%;
}
@media only screen and (max-width: 500px){
  .thalaipu{
    font-size: 60px;
    margin-top: 20px;
  }
  .cont{
    padding: 0px 8px 0px 8px;
  }
  .el__content{
    width: 100%;
    background-position: center;
    background-size: cover;
  }
  .menu{
    font-size: 15px;
    top: ;
  }
  .thalaipu h1{
    text-indent: 20px;
  }
  .el__bg{
    background-size: cover;
    background-position: center;
    width:100vw;
  }
  .el__heading{
    margin-left: 10px!important;
  }
  .edam{
    padding: 10px;
    width: 100%;
  }
  .music{
    margin: inherit;
  }

}
</style>
</head>

<body>
	<div class="" style="text-align: center;">
    <div id="mySidenav" class="sidenav">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     <ul class="list-unstyled">
       <li><a href="index.php">HOME</a></li>
       <li><a href="events.php">EVENTS</a></li>
       <li><a href="proshows.php">PROSHOWS</a></li>
  <li><a href="sponsor.php">SPONSORS</a></li>       <li><a href="gallery.php">GALLERY</a></li>
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
    <div class="thalaipu">
	 	<h1 style="font-family: tak;color: #bc994e;">PROSHOWS</h1>
      </div>

	</div>
  <div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">PLUSH<br>Mr.& Ms. TAKSHASHILA</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><p>
<h1>PLUSH</h1>
<p class="subtitles">Walk like the elements are compromised.</p>
<h5>Registration</h5>
<p class="content">1.College ID is mandatory.<br>
2.This event falls under premium registration.<br>
3.Participants are requested to report the college premises before 3pm.<br>
4.Entry fee per head Rs.200<br>
5.Online and on-spot registrations are available.<br>
6.Entry fee for on spot registrations is Rs.250 per head.<br>
7.The music should be provided to the coordinator at the registration desk.<br>
8.Music should be submitted by 5PM.</p>
<h5>Rules</h5>
<p class="content">1.Marks are allotted based on team coordination and costumes. <br>
2.Cross over teams are also permitted.<br>
3.Each team can have a maximum of 8 members.<br>
4.Maximum of 5+1 Minutes will be allotted for a team. <br>
5.Green room will be provided.<br>
6.No usage of harmful properties.<br>
7.Vulgarity and obscenity is not permitted.<br>
8.Judges’ and organizers’ decision will be final.</p>

<center><a href="https://www.townscript.com/e/takshashila-001402"><button  id="plush" onclick="showHint(id)" class="btn">Add to Event</button></a></center>
<h1>Mr.& Ms.TAKSHASHILA</h1>
<p class="subtitles">What all could you go through to become the ultimatum.<br>This is the event to hunt for the next face of this grand event.<br>Let’s see what you have and what it takes for you to become the One in many.</p>
<h5>ROUND 1</h5>
<p class="content" >The first round is where we come to know who you really are, send us your talent through our whatsapp numbers.<br>
Hannah Felix - +91 9962287100<br>
Monisha - +91 8248065593</p>
<h5>ROUND 2</h5>
<p class="content">5 boys 5 girls<br>
5 boys and 5 girls will be shortlisted based on their individual style of showcasing their talents.<br></p>
<h5>ROUND 3</h5>
<p class="content">A popular celebrity will be anchoring this grand event. <br>Selection process is completely based on talent.</p>
</p></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">1</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="1">1</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading" style="color: black">MUSIC NIGHT</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><p>
            	<h1>MUSIC NIGHT</h1>
            	<p class="subtitles">The rhythms that capture the air are the tunes that encase the soul.</p>
            <p class="music">This takshashila, we present you our own hometown nightingale.
               From singing stars of Sakthi, Rakshitha, Anand, Soundarya, Rajaganapathy and Shreekanth
                to the ever rocking Allan Preetham and band, this musical night is all we can dream of.
             And in here we will rhythm our thime through the night.</p></p>
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">2</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="2">2</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">CHOREO NIGHT <br> DJ NIGHT</h2>
          </div>
          <div class="el__content">
            <div class="el__text"><p>
<h1>CHOREO NIGHT</h1>
<p class="subtitles">Unleash the infamous skills that you’ve got rolled up in your sleeves<br>and give the crowd the right moves</p>
<h5>Category</h5>
<p class="content">Non theme (all styles)</p>
<h5>Registration</h5>
<p class="content">1.College ID and Bonafied are mandatory.<br>
2.This event falls under premium registration.<br>
3.Participants are requested to report the college premises before 3pm.<br>
4.Online registration Only - <strong style="font-weight: bolder;">Rs.200/-</strong><br>
5.The music should be provided to the coordinator at the registration desk.<br>
6.Music should be submitted by 4PM.</p>
<h5>Rules</h5>
<p class="content">1.Marks are allotted based on team coordination and costumes. <br>
2.Cross over teams are also permitted.<br>
3.Minimum 8 and maximum 30 members on stage including backstage helpers.<br>
4.Time limit is 6 to 7 minutes.<br>
5.Green room will be provided.<br>
6.No usage of harmful properties.<br>
7.Vulgarity and obscenity is not permitted.<br>
Judges’ and organizers’ decision will be final.</p>

<center><a href="https://www.townscript.com/e/takshashila-001402/booking"><button id="choreonight" onclick="showHint(id)" class="btn">Add to Event</button></a></center>

<br>

<h5>Category</h5>
<p class="content">Theme (Open Theme)</p>
<h5>Registration</h5>
<p class="content">1.College ID and Bonafied are mandatory.<br>
2.This event falls under premium registration.<br>
3.Participants are requested to report the college premises before 3pm.<br>
4.Online registration Only - <strong style="font-weight: bolder;">Rs.200/-</strong><br>
5.The music should be provided to the coordinator at the registration desk.<br>
6.Music should be submitted by 4PM.</p>
<h5>Rules</h5>
<p class="content">1.Marks are allotted based on team coordination and costumes. <br>
2.Cross over teams are also permitted.<br>
3.Minimum 8 and maximum 30 members on stage including backstage helpers.<br>
4.Time limit is 6 to 7 minutes.<br>
5.Green room will be provided.<br>
6.No usage of harmful properties.<br>
7.Vulgarity and obscenity is not permitted.<br>
Judges’ and organizers’ decision will be final.</p>

<center><a href="https://www.townscript.com/e/takshashila-001402/booking"><button id="choreonight" onclick="showHint(id)" class="btn">Add to Event</button></a></center>
            	<h1>DJ NIGHT</h1>
            	<p class="subtitles">Little drops of beats form a mighty ocean of steps.</p></p></div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">3</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="3">3</div>
        </div>
      </div>
    </div>
    <!-- el end -->
  </div>
  <!-- cont inner end -->
</div>
<div class="edam"></div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
//ajax add
function showHint(str) {
  var xhttp;
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "two.php?q="+str, true);
  xhttp.send();
}
</script>
<script  src="js/proshows.js"></script>
</body>
</html>
