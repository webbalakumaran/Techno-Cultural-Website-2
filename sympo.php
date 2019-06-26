
<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Symposium</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web|Exo+2:300|Dosis:500|Orbitron:500|Source+Sans+Pro:200,400" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/popup.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1, user-scalable=0">
<link rel="icon" href="taknew logo.png">

<style type="text/css">
@font-face {
  font-family: tak;
  src: url(font/takfont.ttf);
}
body{
background-image: url("img/t/background.jpg");
  background-repeat: repeat;
  background-position: center;
  background-size: cover;
}
.welc_txt{
  margin-top: 16px;
}
.back{
  position: absolute;
  left: 0%;
  cursor:pointer;
  font-size:30px;
  top: 20px;
  margin-left: 2%;
  font-weight: 100;}

.back a{
  color: #f7c14f;}
.back a:hover{
  color: #f7c14f;
}
.box1{background-image: url(img/logo/cse.png);
background-position: center;
background-size: cover;}


.box2{background-image: url("img/logo/ece.png");
background-position: center;
background-size: cover;}

.box3{background-image: url("img/logo/eee.png");
background-position: center;
background-size: cover;
f}

.box4{background-image: url(img/logo/mct.png);
background-position: center;
background-size: cover;}

.box5{background-image: url(img/logo/civil.png);
background-position: center;
background-size: cover;}

.box6{background-image: url("img/logo/mech.png");
background-position: center;
background-size: cover;}
.heading{
  padding: 0px 40px;
  width: 100%;
  height: 45%;
  top: 0;
  display: inline-block;
  position: absolute;
  text-align: center;
}
.logo{
  height: 150px;
  width: 150px;
}
h1{
  margin-top: 55px;
  font-family: tak;
  font-size: 90px;
  font-weight: 300;
  color: #f7c14f;
}
p{margin-top:30px;
font-size: 25px;
text-align: center;
font-family: 'Exo 2', sans-serif;
color: #f7c14f;

}
body{
  background-color:#282828;
}
.menu{
  position: absolute;
  cursor:pointer;
  right: 0%;
  margin-right: 4%;
  font-size:25px;
  top: 20px;
  z-index: 2;
  font-weight: 100;}
.fas{color:#f7c14f;}
.box{padding: 10px;}
.sidenav {
  height: 330px;
  width: 0;
  position: fixed;
  z-index: 10;
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
  padding: 6px;
  text-decoration: none;
  font-size: 20px;
  font-weight: lighter;
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
  margin-left: 50px;
}

.innerbox{
	height: 99%;
  margin-bottom: 50px;
	width: 80%;
	position: relative;
	top: 200px;
}
.inbox{
  background-color: rgba(01,01,01, 0.6);
  margin-bottom: 5%;
  padding-bottom: 5%;
  box-shadow: 0px 0px 15px 2px #f7c14f;
}
.ibox1,.ibox2,.ibox3{
    border-radius: 100px 2px 100px 2px;
}
.kutty{
	background-color:transparent;
	width: 155px;
	height: 155px;
	border-radius: 0%;
	margin-top: 50px;
}
.kutty{
    -webkit-transition: -webkit-transform .5s;
    transition: transform .5s;
}
.kutty:hover{
    -ms-transform: scale(1.1, 1.1); /* IE 9 */
    -webkit-transform: scale(1.1, 1.1); /* Safari */
    transform: scale(1.1, 1.1);

}
.row{
	top: 23px;
}
.t_head{
  position: relative;
  font-size: 35px;
  font-family: 'Orbitron', sans-serif;
  color: ivory;
  text-align: center;
  padding-top: 50px;
}
h2{
  text-align: center;
  font-family: 'Montserrat', sans-serif;
    font-weight: 300;
    font-size: 30px;
}
a{
  text-decoration: none;
}
a:hover{text-decoration: none;}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
	z-index: 30;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 0.5s;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
.popup {
  margin: 5px 0px 5px;
  padding: 1px;
  background: #1e1e1e;
  border-radius: 5px;
  width: 95%;
  height: 98%;
  position: relative;
  transition: all 1s ease-in-out;
}
.popup h2 {
  font-size: 30px;
color: #db2620;}
.popup .close {
  position: absolute;
  top: 20px;
  right: 40px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 50%;
  overflow: auto;
}
.tabs a {
  padding: 0 15px;
}
  #popup1 .tabs a{
    padding: 0 20px;
    width: 100%;
  }
    #popup2 .tabs a{
    padding: 0 15px;
    width: 100%;
    font-size: 20px;
  }
#popup3 .tabs a{
    padding: 0 15px;
    width: 100%;
    font-size: 20px;
}
#popup4 .tabs a{
    padding: 0 15px;
    width: 100%;
    font-size: 20px;
}
#popup5 .tabs a{
  padding: 0 10px;
  font-size: 18px;
}
#popup6 .tabs a{
  padding: 0 10px;
  font-size: 15px;
}
#popup11 li{
  margin-bottom: 0px;
  font-family: 'Oswald', sans-serif;
  color: grey;
}
.btn{
  margin-bottom: 50px;
  border-radius: 20px;
}
.riprpbro{
  font-size: 18px;
  font-weight: 200;
  bottom: 0px;
  right: 0px;
  margin-top: -50px;
  margin-right: -100px;
  color:#f3ece4;
  text-align: left;
  float: right;
  font-family: 'Source Sans Pro', sans-serif;
}
.riprpbro span{
  font-weight: 400;
  font-size: 25px;
}
@media only screen and (max-width: 770px) and (max-height: 1050px){
  .heading{
    height: 30%;
  }
  h1{
    font-size: 70px;
  }
  .kutty{
    height: 120px;
    width: 120px;
  }
  .tabs a{
    padding: 0 20px;
  }
  #popup1 .tabs a{
    padding: 0 20px;
    width: 100%;
  }
  #popup2 .tabs a{
    padding: 0 5px;
  }
  #popup3 .tabs a{
    padding: 0 15px;
  }
  #popup4 .tabs a{
    padding: 0 15px;
    width: 300px;
  }
  .tab_content{
    height: 700px;
  }
  .tab{
    padding-top: 10px;
    width: 90%;
  }
}

@media only screen and (max-width: 1024px) and (max-height: 1366px){
  .heading{
    height: 30%;
  }
  h1{
    font-size: 90px;
  }
  .kutty{
    height: 155px;
    width: 155px;
  }
  .tabs a{
    padding: 0 25px;
  }
  #popup1 .tabs a{
    padding: 0 20px;
    width: 100%;
  }
  #popup2 .tabs a{
    padding: 0 5px;
  }
  #popup3 .tabs a{
    padding: 0 25px;
  }
  #popup4 .tabs a{
    padding: 0 15px;
    width: 300px;
  }
  .tab_content{
    height: 700px;
  }
  .tab{
    padding-top: 10px;
    width: 90%;
  }
}
@media only screen and (max-width: 500px){
  h1{
    font-size: 45px;
    margin-top: 40px;
  }
  p{
    font-size: 17px;
  }
  .heading{
    height: 32%;
  }
  .kutty{
    width: 75px;
    height: 75px;
    margin-top: 25px;
  }
  .innerbox{
    width: 95%;

    top:170px;
  }
  .ibox1,.ibox2,.ibox3{
    border-radius: 50px 2px 50px 2px;
  }

  .row{
    top: 20px;
  }
  .tab{
    margin-top: 20px;
    height: 100%;
  }
  .tab ul{
    border:2px solid red;
    border-bottom: none;
    text-align: center;
    display: block;
    border-radius: 10px 10px 0px 0px;
    box-shadow: 0px 0px 5px 0px rgba(240,240,240,0.2);

  }
  .tab li{
    width: 100%;

  }
  .tab li:active{
    box-shadow: 2px 5px 20px 0.5px #00ff00;
  }
  .tabs a{
    border-radius: 0px;
    width: 100%;
    margin: 0px;
    font-size: 20px;
  }
  .tab_content{
    border:2.3px solid red;
    border-top: none;
    border-radius: 0px 0px 10px 10px;
    height: 65%;
    top: 0px;

  }
  .tab_content::-webkit-scrollbar {
  width: 2px;
  }
  #popup4 .tabs a{
  padding: 0 20px;
  width: 100%;
  }
	.t_head{
		font-size: 20px;
	}
  .riprpbro{
    font-size: 9px;
    margin-right: 0px;
    margin-top: -60px;
  }
  .riprpbro span{
    font-size: 12px;
  }
}
@media only screen and (max-height: 570px){
  .tab_content{
    height: 230px;
  }
  .tab a {
    font-size: 15px;
  }
}
</style>
</head>
<body>
    <div class="container" style="padding: 0;margin: 0;">
  <div class="heading">
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
<div class="back"><a href="events.php"><i class="fas fa-arrow-left"></i></a></div>
<br>
    <h1>SYMPOSIUM</h1>
  </div>
</div>
	<center>
		<div class="container innerbox">
      <div class="inbox ibox1">
      <h2 class="t_head" style="text-align: center;">TECHNICAL EVENTS</h2>
			<div class="row">
				<div class="col">
            <a href="#popup1">
              <div class="kutty box1">

            </div>
            <p>CSE</p></a>
        </div>
        	<div class="col">
            <a href="#popup2"><div class="kutty box2">
            </div>
            <p>ECE</p></a>
        </div>
        	<div class="col">
            <a href="#popup3"><div class="kutty box3">
            </div>
            <p>EEE</p></a>
        </div>
        </div>
        <div class="row">
				<div class="col">
            <a href="#popup4"><div class="kutty box4">
            </div>
            <p>MCT</p></a>
        </div>
        	<div class="col">
            <a href="#popup5"><div class="kutty box5">
            </div>
            <p>CIVIL</p></a>
        </div>
        	<div class="col">
            <a href="#popup6"><div class="kutty box6">
            </div>
            <p>MECH</p></a>
        </div>
        </div>
        </div>
        <div class="inbox ibox2">
        <h2 class="t_head" style="text-align: center;">NON TECHNICAL EVENTS</h2>
        <div class="row">
				<div class="col">
            <a href="#popup7"><div class="kutty box1">
            </div>
            <p>CSE</p></a>
        </div>
        	<div class="col">
            <a href="#popup8"><div class="kutty box2">
            </div>
            <p>ECE</p></a>
        </div>
        	<div class="col">
            <a href="#popup9"><div class="kutty box3">
            </div>
            <p>EEE</p></a>
        </div>
        </div>
        <div class="row">
				<div class="col">
            <a href="#popup10"><div class="kutty box4">
            </div>
            <p>MCT</p></a>
        </div>
        	<div class="col">
            <a href="#popup11"><div class="kutty box5">
            </div>
            <p>CIVIL</p></a>
        </div>
        	<div class="col">
            <a href="#popup12"><div class="kutty box6">
            </div>
            <p>MECH</p></a>
        </div>
        </div>
      </div>
      <div class="inbox ibox3">
         <h2 class="t_head" style="text-align: center;">WORKSHOP</h2>
      <div class="row">
        <div class="col">
            <a href="#popup13">
              <div class="kutty box1">

            </div>
            <p>CSE</p></a>
        </div>
          <div class="col">
            <a href="#popup14"><div class="kutty box2">
            </div>
            <p>ECE</p></a>
        </div>
          <div class="col">
            <a href="#popup15"><div class="kutty box3">
            </div>
            <p>EEE</p></a>
        </div>
        </div>
        <div class="row">
        <div class="col">
            <a href="#popup16"><div class="kutty box4">
            </div>
            <p>MCT</p></a>
        </div>
          <div class="col">
            <a href="#popup17"><div class="kutty box5">
            </div>
            <p>CIVIL</p></a>
        </div>
          <div class="col">
            <a href="#popup18"><div class="kutty box6">
            </div>
            <p>MECH</p></a>
        </div>
        </div>
      </div>
        <br><br><br><br>
		<div id="popup1" class="overlay">
			<div class="popup">
			<h2>HACKERZ</h2>
			<a class="close" href="#">&times;</a>
					<div class="tab">

              <ul class="tabs">
                <li><a href="#">GOBLET OF TALE</a></li>
                <li><a href="#">COPY CAT</a></li>
                <li><a href="#">MISHMASH</a></li>
                <li><a href="#">TECH BUZZ</a></li>
                <li><a href="#">WARLOCK</a></li>
              </ul>
            <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">"On stage lets the fear off stage"</p>
        <p><h4>Description:</h4>
        Here is our platform where you can expose your
knowledge on diverse domains. We provide you
opportunity on unbarred thesis.Expose the
talent & Seize the reward.
        </p>
      <p><h4>Rules :</h4>
1. Team should consist of a maximum of two
members (irrespective of department and
year)   <br>
2. Team members should be of the same college    <br>
3. Participants are requested to register in
advance   <br>
4. Contact the event co-ordinator for the
submission details  <br>
5. Panel decision is final   <br><br>
<h5>Contact :</h5>
Sushmitha - 8124003062<br>
Sundari - 9789094486<br>
</p>
<center><button id="gobletoftale" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position: relative;">Add to Event</button></center>

<br><br>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">"Walking on water and developing software from
a specification are easy if both are frozen."</p>
<p><h4>Description :</h4>Here is our platform which gives frozen set of
tangled code which have to be swapped up.
Fasten your fingers,clutch the premium.</p>
      <p><h4>Rules :</h4>
1. Team should consist of a maximum of two
members (irrespective of department and year)   <br>
2. Team members should be of the same college   <br>
3. Participants are requested to register in
advance  <br>
4. Event consist of two rounds   <br>
5. First round is TECHGEEK. Teams that qualify
TECHGEEK will move to the finals   <br>
6. FINALS: Teams will be given a task on the
spot and required to design a website within a
specified time   <br>
7. Panel decision is final   <br><br>
<h5>Contact :</h5>
Sivakarthick - 8610251141<br>
Joyce Jenifer - 9551544660<br>

</p><center><button id="copycat" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>  <br><br>
    </div>
    <div class="tabs_item">
      <p class="subtitles">"A Perfect Duplicate will become a Replicate"</p>
<p><h4>Description :</h4>Here is our platform which gives a set of
duplicates which have to be constructed as
replicates.</p>
      <p><h4>Rules :</h4>
1. Team should consist of a maximum of two
members (irrespective of department and year)   <br>
2. Team members should be of the same college  <br>
3. Participants are requested to register in
advance   <br>
4. Event consist of two rounds   <br>
5. First round is TECHGEEK. Teams will be
grilled with technical questions and the team
that answers most question in short time will
qualify   <br>
6. Teams that qualify TECHGEEK will move to
round2 called DEBUG  <br>
7. Teams will be given a task which has to be
completed within the given duration   <br>
8. Internet usage is strictly prohibited   <br>
9. Panel decision is final   <br><br>
<h5>Contact :</h5>
Carolyn - 960061554<br>
Poojitha - 9912955526<br>

</p><center><button id="mishmash" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">"Thinking is slave of Effective thinking"</p>
    <p><h4>Rules :</h4>Here is our platform where you have to brace
yourselves for the effective thinking.
Accelerate your skills of tech jump into
the race and pierce the buzz</p>
      <p><h4>Rules :</h4>
1. Team should consist of a maximum of two
members (irrespective of department and year)
<br>2. Team members should be of the same college
<br>3. Participants are requested to register in
advance
<br>4. Event consist of two rounds
<br>5. First round is TECHGEEK. Teams will be
grilled with technical questions and the team
that answers most question in short time will
qualify
<br>6. Teams that qualify TECHGEEK will move to
round2
<br>7. Teams will be given a task which has to be
completed within the given duration
<br>8. Internet usage is strictly prohibited
<br>9. Panel decision is final<br><br>
<h5>Contact :</h5>
S.Hariharan - 8825491599<br>
karthiga - 7418788691
</p>
<center><button id="techbuzz" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">"Hacking begins from the root not from the leaf".</p>
        <p><h4>Description :</h4>Here is our platform where you have to dig
security of application and capture the whole
tree with the root.</p>     
    <p><h4>Rules :</h4>
        1. Team should consist of a maximum of two
members (irrespective of department and year)
<br>2. Team members should be of the same college
<br>3. Participants are requested to register in
advance.<br>
4. Event consist of two rounds
<br>5. First round is TECHGEEK. Teams will be
grilled with technical questions and the team
that answers most question in short time will
qualify
<br>6. Teams that qualify TECHGEEK will move to
round2
<br>7. Teams will be given a task on the spot which
has to be completed within the given duration
<br>8. Systems with internet will be provided
<br>9. Panel decision is final
<br><br><h5>Contact :</h5>
A. Dinesh Kumar - 7845831316<br>
Nivetha Jenifer - 6374932990</br>
D.Vishal - 7904651565
</p><center><button id="warlock" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    </div>
    </div>
				</div>
				</div>
        <div id="popup2" class="overlay">
      <div class="popup">
      <h2>VIDYUTRENZ</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">

              <ul class="tabs">
    <li><a href="#">TECHNOVATION</a></li>
    <li><a href="#">TRICKY CIRCUITS</a></li>
    <li><a href="#">EX-QUIZ-ME</a></li>
    <li><a href="#">DROID TROOPER</a></li>
    <li><a href="#">TECHNODIUM</a></li>
    <li><a href="#">HACKNOFEST</a></li>
              </ul>
             <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">This event provides an opportunity for student researchers to disseminate their latest research results, an excellent platform to showcase your original ideas and exchange views on the future research directions in various fields of electronics and communication engineering. Presenting “technovation” a paper presentation contest.</p>
      <p>
       <h5>Rules:</h5>
1.   Maximum of three participants per team.
<br>2.   Paper should be in IEEE format in the following domains: Embedded system, Internet of Things, Networking, Biomedical Electronics, Automation, VLSI, Communication System, Antenna Design.
<br>3.   Soft copy of the paper should be submitted on or before 15th February to the given mail ID.
<br>4.   Hard copy of the paper should be submitted before the presentation.
<br>5.   Judges decision is final.
<br><br><h5>Contact :</h5>
M. Mahidhar
<br>Phone number: 8072108981
<br>Mail-Id: vidyutrenz.ece@citchennai.net

      </p>
      <center><button id="technovation" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position: fixed, relative, sticky">Add to Event</button></center> <br>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Do you think only coders can debug? Come let us prove them wrong!<br>
      Presenting Tricky circuits, where the Tech geeks bring out their debugging powers.</p>
      <p>
      <h5>Rules :</h5>
1. Maximum of two participants per team.<br>
2. <b>Round 1:</b> MCQ (Basic electronics and physics).<br>
3. <b>Round 2:</b> Complete and name the given circuit.<br>
4. <b>Round 3:</b> Enthrall your curiosity to conquer this round<br>
5. Judges decision is final.<br><br>

<h5>Contact :</h5>
S. Jaganathan<br>
Phone number : 9789964637<br>
Mail-Id: vidyutrenz.ece@citchennai.net<br>
      </p>
      <center><center><button id="trickycircuits" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center> <br>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">A pursuit of trivial knowledge! Try getting yourself tested or be assured, Ex-quiz-me would make you know what you didn't! Get ready for roller coaster ride into an intense world of techno-quizzing.</p>
      <p>
        <h5>Rules:</h5>
1.   Maximum of three participants per team.<br>
2.   Round 1: MCQs (based on electronics and physics).<br>
3.   Round 2: Visual round.<br>
4.   Round 3: Fascinate yourself with the mystery behind the round. <br>
5.   Judges decision is final. <br>
<br>
<h5>Contact :</h5>
P. Shirish<br>
Phone number: 9003694164 <br>
Mail-Id: vidyutrenz.ece@citchennai.net
<br>      </p><center><button id="exquizme" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center> <br>
    </div>

    <div class="tabs_item">
      <p class="subtitles">If your robot obeys all the rules and moves forward to victory destination in a line,<br> then come here and grab the exciting prizes. Don't forget that your champ must follow the line.</p>
      <p>
         <h5>Rules :</h5>
1. Maximum of two participants per team.<br>
2. The Robot should be autonomous.<br>
3. Round 1: Simple track with no obstacles; The Fastest Robot will be qualified. 3 touches and 2 skips allowed.<br>
4. Round 2: Complex track with points. 3 touches and two skips allowed.<br>
5. Track width is 25mm-30mm.<br>
6. Judges decision is final.<br><br>
<h5>Contact:</h5>
R. Tharani Balan<br>
Phone number: 7373038767<br>
Mail-Id: vidyutrenz.ece@citchennai.net
      </p>
    <center><button id="droidtrooper" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center> <br>
    </div>

    <div class="tabs_item">
      <p class="subtitles">We welcome all the budding technocrats to unleash your potential Project expo by showcasing your innovative ideas through working models, prototypes and simulations.</p>
      <p>
        <h5>Rules:</h5>
1.  Maximum of three participants per team.<br>
2.  Submit the abstract of working models/prototypes/Simulations to the given mail id on or before 13th February.<br>
3.  Specify the project domain.<br>
4.  Confirmation mail will be sent to the shortlisted projects.<br>
5.  Judges decision is final.<br><br>

<h5>Contact :</h5>
M. Alex<br>
Phone number: 9442559075<br>
Mail-Id: vidyutrenz.ece@citchennai.net

      </p>
      <center><button id="technodium" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center> <br>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Hacknofest an intensive problem-solving session that often focuses on microcontroller programming!</p>
      <p>
        <h5>Rules:</h5>
1. Maximum of 3 participants per team.<br>
2. ROUND 1: MCQs (Questions based on microprocessor and microcontroller).<br>
3. ROUND 2: Complete the given program.<br>
4. ROUND 3: Write the program for the given scenario. Come with your own Arduino.<br>
5. Judges decision is final.<br><br>

<h5>Contact :</h5>
R. Sivakumar<br>
Phone number: 9962438870<br>
Mail-Id: vidyutrenz.ece@citchennai.net<br>
</p><center><button id="hacknofest" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center> <br>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup3" class="overlay">
      <div class="popup">
      <h2>IMPULSE</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
              <ul class="tabs">
    <li><a href="#">MODEL EXPO</a></li>
    <li><a href="#">ENQUIZTA</a></li>
    <li><a href="#">COMPO QUEST</a></li>
    <li><a href="#">BRAIN WAVES</a></li>
    <li><a href="#">CIRCUIT DESIGINING	</a></li>

              </ul> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Display of projects related to Electrical and Electronics concepts .
Working model along with power point presentation is required.</p>
      <p>       <h4>Rules :</h4>

1. Team size can be of maximum 3 members. A person cannot be a take part in two teams.
<br>2. Single team can also display more than one project.
<br>3. Entry fee will be Rs.100 per team.
<br>4. Results will be announced on the same day itself.
<br> <br><h4>Contact :</h4>
Vigneshwaran.J <br>
Phone number:  8608015887   <br>
Mail-Id: impulse@citchennai.net  <br>


</p><center><button id="modelexpo" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">The purpose of this effort is to test your technical knowledge.
It consists of prelims, those who get selected in this will go to final round. Result will be declared on the same day itself.</p>
      <p>
        <h4>Rules :</h4>
1. Only team participation is allowed. Two members per team.
<br>2. Team discussion is allowed but not with neighbouring team.
<br>3. Answering time will be 30 secs per question. 10 marks for correct answer and -5 for wrong ones.
<br>4. Replacement of team member after registration is not allowed.
<br><br><h4>Contact :</h4>
Amrudha.G.A
<br>Phone number : 8778594971
<br>Mail-Id: impulse@citchennai.net
</p><center><button id="enquizta" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Do you think you have those sherlock instincts in you ? or Are  you  a good treasure hunter like Indiana jones? . Then this is the perfect platform to exhibit your talent. The Event is simple,
you would  be assigned  to design a circuit....
but wait it wont be that easy . The components will be hidden inside the campus. you would be given the hint to find the missing component and you should finish it before time runs away!
so we welcome all electrical and electronics students who have the smartest mind  to join our event and win exciting prizes. (we would be playing thupparivalan music in behind to encourage you)!!

</p>
      <p><h4>Rules :</h4>
1. Two members per team, with basic knowledge about circuits.
<br>2. Team should  find (roam inside the campus in search of) certain components that will be missing in a particular circuit based on the clues provided.
<br>3. As a final task the teams should design the circuit and make it work.
<br><br> <h4>CONTACT : </h4>
Bharani Prakash.G
<br>Phone number : 9003986258.
<br>Mail-Id: impulse@citchennai.net
</p><center><button id="compoquest" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Content of the presentation with unique abstract in concepts related to EEE. Projectors for presentation will be provided.</p>
      <p><h4>Rules :</h4>
1. A team can have maximum of two members.
<br>2. Duration for each team will be 10 mins.
<br>3. Two sets of soft copy of the Presentation is required, will be analyzed by the experts.
<br>4. Result will be announced on the same day itself.
<br><br> <h4>CONTACT :</h4>
Abhilash.S
<br>Phone number : 7358068236.
<br>Mail-Id: eee.impulse2k19@gmail.com</p><center><button id="brainwaves" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">A card with description of circuit will be given to one person of each team to memorize it.
The other team member should construct the circuit with the help of instruction given by their counter part.</p>
      <p>
              <h4>Rules :</h4>
1. 2-3 members per team.
<br>2. A written test is conducted to short list the teams for final round (round 1- 25 question each 1 mark).
<br>3. Only two members of each team is allowed to participate in final round.<br>
4. Two teams are awarded.
<br><br><h5> CONTACT :</h5> Santhosh kumar.I
<br>Phone number : 9655186983.
<br>Mail-Id: impulse@citchennai.net
</p><center><button id="circuitdesigining" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup4" class="overlay">
      <div class="popup">
      <h2>JARVIS</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#tab16" class="active">Mr.G</a></li>
    <li><a href="#tab17">SLIDEDESK</a></li>
    <li><a href="#tab18">ELECTRO ON WHEELS</a></li>
    <li><a href="#tab19">WAR OF TITANS</a></li>
    <li><a href="#tab20">TECHMAZE</a></li>
    <li><a href="#tab21">CRACK IT</a></li>
                </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p>
        <h4>Rules : </h4>
1. Team can have a Maximum of 6 members.
<br>2. Multiple teams are allowed from a college.
<br>3. Participant cannot be part of more than one team.
<br><br>
<h4>Prelims</h4>

1. Every team must submit a two page of abstract of their project.
<br>2. Teams can use visual aids as charts and presentations.<br><br>
<h5>Contact :</h5>
Shalini - 8608523488

</p><center><button id="mrg" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p>         <h4>Topics :</h4>

1.  Unmanned Aerial Vehicle
<br>2.  Autotronics
<br>3.  Industrial Application using Internet Of Things (IOT)
<br>4.  Robotics in hazardous environment.



   <br><br>   <h4>Rules :</h4>
   1.  Maximum 3 Members per team.
<br>2.  Presentations limits ten minutes.
<br>3.  Last date for paper submission 21/02/2019
<br><br>
<h5>Contact :</h5>
Sathurya - 8610119646
</p><center><button id="slidedesk" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p><h4>Rules :</h4>

1.  Maximum 5 members per team.
<br>2.  Ready made bots are not allowed
<br>3.  Bot Specification:

<br>4.  Car dimensions of maximum 30X30X30cm
<br>5.  Must bean battery operated.
<br>6.  Wired (or) wireless.
<br>7.  Extra batteries and other accessories will not be provided.
<br>8.  The event must bean time based event.
<br>9.  From the team only two members will be allowed in the track
<br><br>
<h5>Contact :</h5>
Sanjay - 9042351174
</p>
<center><button id="electroonwheels" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p>
                <h4>Rules :</h4>

1.  Maximum 7 members per team.
<br>2.  Only wired or wireless controlled bots are allowed.
<br>3.  We are not responsible for any damage caused to the bot.
<br>4.  From the team only 2 members will be allowed in the arena.
<br>5.  Any team is not ready on time will be disqualified.
<br>6.  Jammers and high power magnets / electormagnets are not used.
<br>7.  Gums, tapes, net and other entanglement devices are not allowed.
<br>8.  Machines can be powered electrically only, usage of IC engine in any form is not allowed.
<br>9.  If Bot immobilized for 30 seconds will be disqualified.
<br>10.  If Bot damages the arena, the team will be disqualified.
<br>11.  Throwing objects, firing, water, acids and explosives should not be used.
<br>12.  Any parts should not be intentionally detached or added to the bot
<br><br>
<h4>BOT specification :</h4>
<br>1.  Maximum dimension of 50x50x50 (with all executing motion)
<br>2.  Maximumweightupto50kg(includingbattery,pneumaticsystemandothercomponents)
<br><br>
<h5>Contact :</h5>
Paremesh - 9962118728
</p><center><button id="waroftitans" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p><h4>Rules :</h4>
1.  Maximumof 3members per team
<br>2.  This as a twostage events
<br>3.  Prelims is a written round with 20 questions
<br>4.  Finalround will be a buzzer round
<br>5.  Decisionof the quiz master will be the final
<br><br>
<h5>Contact :</h5>
Saranya - 8015762815
</p><center><button id="techmaze" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p>       <h4>Rules :</h4>

1.  Team should be a member of four
<br>2.  Problem statement will be given on the spot
<br>3.  Time duration of 1 hour
<br>4.  An abstract and presentation should be submitted
<br><br>
<h5>Contact :</h5>
Vishnu - 8778620590
      </p>
      <center><button id="crackit" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->

    </div>
    </div>
        </div>
        </div>
        <div id="popup5" class="overlay">
      <div class="popup">
      <h2>KARIGAALA</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">PAPER PRESENTATION</a></li>
    <li><a href="#">CADD'iz</a></li>
    <li><a href="#">As per IS</a></li>
    <li><a href="#">CUBE CASTING</a></li>
    <li><a href="#">SITE ENGINEER</a></li>

              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Innovation is subjected to contest. With these subjects  bring your ideas to see if it fits the professionals.</p>
      <p><h4>Rules :</h4>
1. Only upto two members per team
<br>2. 10 topics will be provided from which the team can choose. (if necessary)
<br>3. Ideas and documents should be submitted in prior to the event.  Submit at karigaala@citchennai.net
<br>4. Plagiarism is strictly restricted.
<br>5. Questionnaire session will begin once the presentation is done.
<br>6. Only technical topics related to the disciplinary of Civil and it’s subjects are allowed.
<br>7. Time for presentation- 20mins.
<br><br><h5>Contact :</h5>
Sundharam<br>
Phone Number: 9445871467<br>
</p><center><button id="paperpresentationcivil" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Designing a structure in CAD is a job, but applying it under specifications is a task. Yet here the task is to ace it.</p>
      <p>
        <h4>Rules :</h4>
   1. 2 rounds will be conducted, prelims and finals.
<br>2. Only a maximum of 2 members are allowed in a team.
<br>3. Materials and requirements will be provided by the organisers.
<br><br><b>Prelims :</b> A sketch from Engineering Graphics shall be drawn by the team.
<br><b>Finals :</b> Planning with specifications in CAD.
<br><br><h5>Contact :</h5>
Ashwini<br>
Phone Number: 9585741898<br>

</p><center><button id="caddiz" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">A quiz sparks not an answer but a solution for the question shot.</p>
      <p>
           <br><h4>Rules :</h4>
   1. Only a maximum of 2 members per team
<br>2. First round is a quiz competition based on IS code book.
<br>3. Second round will be dealing with code cracking.
<br>4. Time for each round will be decided on spot.
<br><br><h5>Contact :</h5>
Ramya Priya <br>
Phone Number: 7401770563<br>

</p><center><button id="asperis" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Cast your own cube.</p>
      <p>
        <h4>Rules :</h4>
1. The grade of concrete should be M50
<br>2. Make three cubes of nominal size 150*150*150.
<br>3. The prepared concrete property should be similar to that of concrete used for pile foundation.
<br>4. Proper report should be submitted beforehand.
<br>5. Concrete shall be checked for  7 days of curing time and a specified object should be casted along the concrete which will be intimidated 7 days prior to the event. <br>
<br><br><h5>Contact :</h5>
Raj Kannan<br>
Phone Number: 7200586758<br>

</p><center><!--<button id="cubecasting" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button>--></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Do you see yourself as a next Raguvaran?
come and test your skills here.</p>
      <p>
        <h4>Rules :</h4>
1. 2 rounds will be conducted, prelims and finals.
<br>2. Materials and requirements will be provided by the organiser.
<br>3. Time limit will be decided on spot.
<br><br><h5>Contact :</h5>
Jaya Kumar<br>
Phone Number: 9655138964<br>
</p><center><button id="siteengineer" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->

    </div>
    </div>
        </div>
        </div>
        <div id="popup6" class="overlay">
      <div class="popup">
      <h2>MECH GUST</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#tab27" class="active">PAPER PRESENTATION</a></li>
    <li><a href="#tab28">WATER ROCKETRY</a></li>
    <li><a href="#tab29">CAD/CAM</a></li>
    <li><a href="#tab30">CAE MODELLING</a></li>
    <li><a href="#tab31">TECHNICAL QUIZ</a></li>
    <li><a href="#tab98">Mr.MACHINIST</a></li>
    <li><a href="#tab97">MOULDING</a></li>

          </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Paper presentation is important skills for research and development, and paper presentation
Will introduce the class to wide variety of haptic system.</p>
      <p>

      <h4>Rules :</h4>
1. Team contains only two members
<br>2. Team members should be from same college
<br>3. Advance Registration
<br>4. Topic can be from any domain
<br>5. Contact the event coordinator for the submission details
<br>6. Panel decision is final
<br><br><h5>Contact :</h5>
Iraianbu - 7904269125.<br>
Irulangudi - 7904125693.<br>
Mail-Id: mechgust2k19@gmail.com
      </p>
      <center><button id="paperpresentationmech" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">The use of common water bottle and a compressor to explain aerodynamics in a much
subtle objective is the been output of the event.
 The hierarchy off lying range will be the judgement.</p>
<h5>Rules :</h5>
1. Team sholud consist of a maximum of three members
<br>2. All design materials should be brought by the participants
<br>3. Only compressor will be provided by the institution
<br>4. Rocket should be made of common water bottles
<br><br><h5>Contact :</h5>
Mugil Varnan - 9486126363.<br>
Raj Kumar - 9865943712.<br>
Mail-Id: mechgust2k19@gmail.com</p>
<center><button id="waterrocketry" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>
    </div>
    <div class="tabs_item">
      <p class="subtitles">A good engineer is a person who makes a design that works with a few ideas.<br> Make up your
mind to master your manufacturing design skills on the contest.</p>
<h5>Rules :</h5>
1. Team consist of two members
<br>2. Round1 : Written test related to design.
<br>3. Round2 : Software design.
<br><br><h5>Contact :</h5>
Dharma Raj - 7397548532.<br>
Naveen Kumar - 7291198920.<br>Mail-Id: mechgust2k19@gmail.com</p>
<center><button id="cadcam" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Not everything we design is perfect, which is by analysing place a major role.<br> In this event, an analysis of the given part should be completed within the given time limit.</p>
      <p>
<h5>Rules :</h5>
1. Team consist of two members
<br>2. Round1 : Written test related to analysis.
<br>3. Round2 : Design analysis.
<br><br><h5>Contact :</h5>
Shyam Sundar - 9092706349.<br>
Raghul - 9551008278.<br>Mail-Id: mechgust2k19@gmail.com
</p><center><button id="caemodelling" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>

    </div>
    <div class="tabs_item">
      <p class="subtitles">Get ready for a roller coaster ride into the intense world of techno quizing try getting yourself
 tested and make yourself known what you didn't know.</p>
 <h5>Rules :</h5>
1. Each team can hold upto three members
<br>2. Round1 : General topic
<br>3. Round2 : Tecnical topics
<br><br><h5>Contact :</h5>
Jeeva - 6374256400.<br>
Praveen Kumar - 8270234711.<br>Mail-Id: mechgust2k19@gmail.com</p>
<center><button id="technicalquiz" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Somewhere, something incridble is waiting to be known. Machine the component with
machine minds and machine hearts! Let your heart machine the sculptor in you!</p>
<h5>Rules :</h5>
1. Round1 : Students sholud answer the given number of questions in a given period of
time. Those who clear the round will be qualified to the next round.
<br>2. Round2 : A diagramatic job will be given with dimensions.
<br>3. A model should be made in lathe machine for the given dimensions with accuracy in a
short period of time.
<br><br><h5>Contact :</h5>
Deepak - 8778424670.<br>
Dhanasekar - 8610489569.<br>Mail-Id: mechgust2k19@gmail.com</p>
<center><button id="mrmachinist" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Time has come to mould your brain & explore core engineering skills in making core and
cavity mould designing and manufacturing industrial components in CNC.</p>
<h5>Rules :</h5>
1. Round1 : Design the model for given dimensions
<br>2. Round2 : To Create the core and cavity of the given workpiece.
<br>3. Round3 : To generate the code for the given model.
<br>4. Round4 : To machine the workpiece.
<br><br><h5>Contact :</h5>
Madhu Suthanan: 7639971924
<br>Mail-Id: mechgust2k19@gmail.com</p>
<center><button id="moulding" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br>	<br>
    </div> <!-- / tabs_item -->
    </div>
    </div>
        </div>
        </div>
        <div id="popup7" class="overlay">
      <div class="popup">
      <h2>HACKERZ</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#" class="active">GAMING</a></li>
    <li><a href="#">OASIS</a></li>
    <li><a href="#">PHOTOGRAPHY</a></li>
    <li><a href="#">SQUARE BATTLE </a></li>

              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">We cannot change the cards we are dealt, just how we play the game!!</p>
      <p><h4>Rules :</h4>
1.  Team should consist of a maximum of two
members (irrespective of department and year)
<br>2.  Team members should be of the same college
<br>3.  Contact the event co-ordinator for the
submission details
<br>4.  Panel decision is final
<br><br><h5>Contact :</h5>
Sudharsan - 9087946426<br>
Om Prakash - 9003016930

</p><center><button id="gaming" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Do you like live audiences, with real
people- Virtual reality is no substitute
</p>
      <p><h4>Rules :</h4>

1.  Team should consist of a maximum of two
members (irrespective of department and year)
<br>2.  Team members should be of the same college
<br>3.  Participants are requested to register in
advance
<br>4.  Contact the event co-ordinator for the
submission details
<br>5.  Panel decision is final </p>
<br><br><h5>Contact :</h5>
Abilash - 9791041849<br>
Naren.T - 8939512157
<center><button id="oasis" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Taking an image, Freezing a
moment, reveals how beautiful reality truly
is.</p>
      <p><h4>Rules :</h4>

1.  Participants are requested to register in
advance
<br>2.  Participants should bring camera on their own
<br>3.  Contact the event co-ordinator for the
submission details
<br>4.  Panel decision is final
<br><br><h5>Contact :</h5>
B.Hariharan - 9003202368<br>
Raj Niranjan - 9176424445
</p><center><button id="photography" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Chess is a game played with mind and not with pieces</p>
      <p><h4>Rules :</h4>
1.  Square Battle is 32-player strategy ground game played on a chessboard layout.
<br>2.  The game will be between two teams. (16 VS 16)
<br>3.  Roles will be choosen by the participants itself by discussing with their teammates at the venue.
<br>4.  Participants are requested to register in
advance
<br>5.  Contact the event co-ordinator for the
submission details
<br>6. NOTE: This game is extremely difficult, it requires more team work, patience, knowledge, coordination and discipline. </p>
<h5>Contact :</h5>
Balakumaran - 6381533204<br>
Mukesh - 9445914214
<center><button id="squarebattle" onclick="showHint(id); registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br><br>

    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup8" class="overlay">
      <div class="popup">
      <h2>VIDYUTRENZ</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#tab36" class="active">THRIFT VENTURE</a></li>
    <li><a href="#tab37">FOTOGRAFIA</a></li>
    <li><a href="#tab38">ESCAPADE</a></li>
    <li><a href="#tab39">VOICE OVER</a></li>
    <li><a href="#tab40">SUPRISE EVENT !</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">If you are in the mood to track the glory, hit the hurdles and unearth some priceless treasure, then come and join the hunt! we will create a complete bespoke experience for your team. Get your squad in the front line to experience the unique challenge.</p><p>
        <h5>Rules :</h5>
1. 3 participants per team.<br>
2. The task has to be done in the stipulated time.<br>
3. Judges decision will be final.<br><br>
<h5>CONTACT :</h5>
A.  Royal<br>
Phone Number: 7092926166 <br>
Mail Id: vidyutrenz.ece@citchennai.net
</p><center><button id="thriftventure" onclick="showHint(id) registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Ready to freeze your moments ?? We present you the Fotografia with most interesting theme  "Go green". The best thing in life is to capture moments.so come and capture with us! Nature is not a place to visit, it is a home.</p>
      <p><h5>Rules :</h5>

 THEME: Go Green.
<br>1. Maximum of 3 entries.
<br>2. No filter or editing must be made in pictures.
<br>3. DEADLINE: February 18th.
<br>4. Drop your pictures  in given mail id.
<br>5. You're required to provide name, contact number, college name and mail id.
<br><br>
<h5> CONTACT :</h5>
S. Deepak Kumar<br>
Phone Number: 7010958887<br>
Mail Id: vidyutrenz.ece@citchennai.net


</p><center><button id="fotografia" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">If nothing goes right, go left. Are you eager to join the fun? Hop into escapade the one and only event with vow of fun and frenzy. Lets have some hilarious events in sands of time.</p>
      <p><h5>Rules :</h5>

1. 2 participants per team.
<br>2. Round 1: Dumb Charades.
<br>3. Round 2: Beat the seat.
<br>4. Round 3: Office Tennis.
<br>5. The task must be done in the stipulated time.
<br><br>
<h5>CONTACT :</h5>
G. Keerthana
<br>Phone Number: 7845902209
<br>Mail Id: vidyutrenz.ece@citchennai.net

</p><center><button id="escapade" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">We welcome all the  show stoppers to  unleash your skills here by showcasing your excellent dubbing talents.</p>
      <p><h5>Rules :</h5>

1. 2-3 participants per team .
<br>2. It should necessarily be cultured and pleasant piece of art.
<br>3. Judges decision will be final.
<br><br>
<h5>CONTACT:</h5>
K. Nandhini<br>
Phone Number: 9087428859<br>
Mail Id: vidyutrenz.ece@citchennai.net
</p>
<center><button id="voiceover" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">A overloading joy is waiting for you. Everyone wants to be surprised in their life. Surprise is the one which unpredictable and unforgettable too. So don't miss this opportunity.</p>
      <p>Why be participants when you have the privilege of naming the event. Your suggestions are welcomed in Official instagram page: @vidyutrenz_2k19.</p> <br><br>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup9" class="overlay">
      <div class="popup">
      <h2>IMPULSE</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#tab49" class="active">LO-GUESS</a></li>
    <li><a href="#tab50">CONNECTIONS</a></li>
    <li><a href="#tab51">MEME CREATION</a></li>
    <li><a href="#tab52">DEAFLY</a></li>
    <li><a href="#tab53">SURPRISE EVENT</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Guess the given logo. This event consist of two rounds.
20 logos will be given in the first round, and in final round (random topics) choices are made by lucky draw.</p>
      <p><h4>Rules :</h4>
1. Two members per team.
<br>2. Mobile phones are not allowed.
<br>3. Time allotted for the first round is 5 mins minimum 15 logos must be identified.
<br>4. Final round- time allotment is 10 secs for each logo.
<br><br><h5>Contact :</h5>
Alrizal<br>
Phone Number: 8608791030<br>

</p><center><button id="loguess" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Identify the concept/word within the specified time limit with the presence of mind.</p>
      <p><br><h4>Rules :</h4>
1. Each team should consist of two members.
<br>2. Replacement of any participant of a team is not allowed after registration.
<br>3. Answering time is about 45 secs for each questions.
<br><br><h5>Contact :</h5>
Sivasakthi.V<br>
Phone Number: 8056217635<br>
</p><center><button id="connections" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Bring out the creator in you. First round is of your choice, top 15 memes will be selected for the final round. The mobile application is of your choice and the best meme will be posted in our page.</p>
      <p><h4>Rules :</h4>
1. Maximum of two members per team.
<br>2. Trolling other institutions, brands etc. must be avoided.
<br>3. Vulgar content and politics should be avoided.
<br>4. Please avoid the memes which are already posted in any other meme pages.
<br>5. Concept will  be given on-spot for the final round.
<br><br><h5>Contact :</h5>
Yugesh.L<br>
Phone Number: 9884014608.<br>
</p><center><button id="memecreation" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">One player will be given a headset and music will be played. The other player will be given a paper containing words to act it out. The teams which finds the maximum words will be awarded.</p>
      <p><h4>Rules :</h4>
<br>1. Two members per team.
<br>2. The player who wears the headset should not remove it in the middle of the game.
<br>3. The player must not reveal the word through any form of writing.
<br>4. You are allowed to imitate or mono-act the word.
<br>5. You must not speak out the word.
<br><br><h5>Contact :</h5>
Obed Paul.P<br>
Phone Number: 9444130125.<br>
<center><button id="deafly" onclick="showHint(id) ; registered(this);" class="btn btn-primary" style="position:relative;">Add to Event</button></center> <br>

      </p></div>
      <div class="tabs_item">
      <p class="subtitles">The event details will be given on spot.</p>
      <p><br>CONTACT :
<br>Balachandhar- 9962517980.
      </p>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup10" class="overlay">
      <div class="popup">
      <h2>JARVIS</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">POTATO CANON</a></li>
                <li><a href="#">SENSOR ROOM</a></li>
                <li><a href="#">LASER WALK</a></li>
                <li><a href="#">FREEZE UP</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">      </p>
      <p><h4></h4>
        <br>1. Are we sitting back like couch potatoes watching the systemic elimination of lines that distinguish the acceptable and the unacceptable in our life??
        <br>2. We sit behind potatoes fuelled in a cannon waiting to cross the lines established to distinguish the acceptable and the unacceptable grades of winning calibre.
        <br>3. Participants who fire their cannons the farthest and at the shortest time will be declared winner.
        <br><br><h5>Contact :</h5>
        Brithivi Raj - 6383586108

</p>
      <center><button id="potatocanon" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">      </p>
      <p><h4></h4>
      <br>1. Maze of thoughts are always rendered vague because of the lack of words to express.
      <br>2. Find yourself a partner who'll not only solve the puzzle but who will also walk through the maze with you.
      <br>3. A team of a maximum of 2 members are allowed to participate.
      <br>4. One member stands blindfolded inside the maze and the other member sits outside to monitor the first member's movements.
      <br>5. The team that solves the maze with an unparalleled strategy and walks out in the shortest possible time will be declared winner.
      <br><br><h5>Contact :</h5>
Barath chellaiyah - 8056429239
      </p>

      <center><button id="sensorroom" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">

      <p><h4></h4>
        <br>1. Few people know how to walk here.
        <br>2. The basic qualifications are endurance, plain clothes, an eye for the lasers, vast curiosity deep concentration and nothing too much.
        <br>3. Walk around like everything is fine hiding all the anxiety the lasers put you through and refrain from falling off the edge.
        <br>4. Participants who walk out of the laser room in the shortest time with the least amount of laser hours will be declared winner.
        <br><br><h5>Contact :</h5>
Gokul krishnan - 9940476292
      </p>
      <center><button id="laserwalk" onclick="showHint(id) ; registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p><h4></h4>
      <br>1. You don't just make photography with a camera.
      <br>2. You must bring to it all the pictures you've seen, the books you've read, the music you have heard and the people you've loved.
      <br>3. The best ceased reality will be awarded the best photographer after judging through various aspects.
      <br><br><h5>Contact :</h5>
Dinesh Kumar.K - 9566207197
      </p>
      <center><button id="freezeup" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup11" class="overlay">
      <div class="popup">
      <h2>KARIGAALA</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">TOWER BUILDING</a></li>
    <li><a href="#">FIT THE PIPE</a></li>
    <li><a href="#">BOB THE BUILDER</a></li>
    <li><a href="#">BLANK</a></li>
    <li><a href="#">SURPRISE EVENT</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Higher the tower, the greater the chance of winning.</p>
      <p>
        <h4>Rules :</h4>
1. 4 member per team.
<br>2. Two round will be conducted prelims and final.
<br>3. All the material requirement will be provided.
<br><br><h5>Contact :</h5>
Rathna Kumar<br>
Phone Number: 7338774977<br>
</p><center><button id="towerbuilding" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">If you are person with precise art of fitting pipes  and joints, here is your chance</p>
      <p><h4>Rules :</h4>
1. Two rounds  will be conducted, prelims and final.
<br>2. All the material requirement will be provided by the organisers
<br>3. 2 members per team.
<br><br><h5>Contact :</h5>
Arun Rao<br>
Phone Number: 8807188764 <br>
</p><center><button id="fitthepipe" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
        <div class="tabs_item">
      <p class="subtitles">Building and construction embarks from the root concepts of our DNA. Should it necessarily be an architect to design? Let us explore the builder in you.</p>
      <p>
           <br><h4>RULES :</h4>

1. Only a maximum of 3 members are allowed in a team.
<br>2. Materials will be provided by the organisers.
<br>3. No extra materials will be provided nor will the participants bring their own.
<br>4. Time limit will be decided on spot.
<br><br>Prelims- model is made using the provided materials
<br>Finals- Overhead water tank model making and stability check.
<br><br><h5>Contact :</h5>
Akash.G<br>
Phone Number: 9003018711 <br>

</p><center><button id="bobthebuilder" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">The important thing is to stop questioning.</p>
      <p><h4>Rules :</h4>
<br>❖ Two member per team.
<br>❖ All the requirements will be provided
<br><br><h5>Contact :</h5>
Silambarasan<br>
Phone Number: 8883303940<br>
</p><center><button id="blank" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
        <div class="tabs_item">
      <p class="subtitles">It is not necessary to plan every event, come here and find it out.</p>
      <p><h4>Rules :</h4>
<br>❖ All the material will be provided by the organiser
<br>❖ On spot event.
<br><br><h5>Contact :</h5>
Rajesh<br>
Phone Number: 8754995313 <br>
</p>
<center><button id="surpriseevent" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup12" class="overlay">
      <div class="popup">
      <h2>MECH GUST</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#tab45" class="active">CONNEXIONS</a></li>
    <li><a href="#tab46">DOODLE</a></li>
    
    <li><a href="#tab48">SURPRISE EVENT</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">

    <div class="tabs_item">
      <p class="subtitles">Connect the image to reveal your answer.Test your creativity, by answering these
questions!!</p>
      <p><h4>
Rules :</h4>
1. Two students per team.
<br>2. Slot will be held.
<br>3. Slot1: 11:00am - 12:00 (reporting time: 10:45am)
<br>4. Slot2: 01:00pm -02:00pm(reportingtime:12:45pm)</p>
<center><button id="connexions" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">The ability to draw depends on the stability on one stability to see the way an artist sees. Lets
awake the picasso sleeping inside you guys!!</p>
      <p><h4>
Rules :</h4>

1. 15 minutes per person.
<br>2. Timing - (10:00am - 02:00pm).
<br>3. stationeries will be provided.
<br>4. No phones will be allowed.
<br>5. Only pencil sketch is allowed.
</p><center><button id="doodle" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Pass like your life depends on it !
<br>Set like its the last thing you"ll never do,
Spike like you smash the ground.</p>
      <p><h4>
Rules :</h4>
<br>1. Three players per team.
<br>2. court rule will be followed.
<br>3. Match will be in knock out basis.
<br>4. Reporting time : 10:00am
<br>5. No repetition of player in another team.
<br>6. Referee decesion is final.
</p><center><button id="thricevolleyball" onclick="showHint(id). registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">The best things happens unexpectedly! Lifies full of suprises. So stay tuned for our surprise
events.</p><center><button id="surpriseeventmech" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
      <p></p>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup13" class="overlay">
      <div class="popup">
      <h2>HACKERZ</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">Artificial Intelligence</a></li>
    <li><a href="#">Augmented Reality</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">“ Intelligence never stops with human.”</p>
      <p> <h4></h4> 
	Machines can often act and react like humans only if they have abundant information relating to the world.
	Machines are infants which  have to be trained by us. Artificial Intelligence isn’t only for big guys.
	Get on here and put on your gadgets into goblet of Intelligence.<br><br>
     	 <h5>Agenda :</h5>
	&#9900; What is AI ? <br>
 	&#9900; Why AI ? <br>
	&#9900; Introduction to IBM Watson services <br>
	&#9900; IBM Watson using Artificial Intelligence <br>
	&#9900; Understanding of intents and entities  <br>
	&#9900; Hands-on of ai chatbot using Watson <br>
	&#9900; Questionnaire <br>
    <h5>Entry Fees :150/-</h5><br>
    <h5>Contact :</h5>
P.Rohith :  6380657162<br>

S.Santhosh kumar : 8072016362<br>
      </p>
      </p><center>
        <button id="artificialintelligence" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p class="subtitles">" The science of  today is the technology of tomorrow "</p>
      <p> <h4></h4> 
	Augmented reality is the ‘boy who cried wolf’ of the post-Internet world—it’s long been promised but has rarely been delivered in a satisfying way.  Augmented Reality being an astounding technological advancement it has heaps of potential to conquer the reality and engage the users with immersive and fascinating experiences.<br><br>
     	 <h5>Agenda :</h5>
	&#9900; What is Augmented Reality? <br>
 	&#9900;  Applications of AR in real world <br>
	&#9900;  introduction to Unity 3D and Vuforia <br>
	&#9900; Hands on Guide on Marker based AR <br>
	&#9900;  Intro to platforms for developing AR Apps <br>
	&#9900; Questionnaire <br>
    <h5>Entry Fees :150/-</h5><br>
Contact :</h5>
Dinesh : 8667612013<br> 

      </p>
      <center>
        <button id="augmentedreality" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>

    </div>
    </div>
        </div>
        </div><div id="popup14" class="overlay">
      <div class="popup">
      <h2>VIDYUTRENZ</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">ANSYS-Microwave Antenna Design</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">ANSYS Workbench is a software environment for performing structural, thermal, and electromagnetic analyses. The class focuses on geometry creation and optimization, attaching existing geometry, setting up the finite element model, solving, and reviewing results
      </p>
      <p>
        <h5>Course Content :</h5>
1. Microwave Patch Antenna Design.<br>
2. Array Antenna Design.<br><br>
<h5>Software Content :</h5>
1. Course content will be given to participants along with software.<br><br>
<h5>Entry Fees :100/-</h5><br>
<h5>Contact :</h5>
P.Muruvazhakan<br>
Phone Number: 7338979499<br>
Mail-Id: vidyutrenz.ece@citchennai.net
</p><center><button id="eceworkshop" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    </div>
    </div>
        </div>
        </div><div id="popup15" class="overlay">
      <div class="popup">
      <h2>IMPULSE</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">NEW ENERGY(Renewable Energy)</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">SOLAR & WIND ENERGY WORKSHOP</p>
      <p>
        <h5>Course Content :</h5>
1. Introduction to power system from generation to distribution.<br>
2. Role of electricity in world, types of resources, demand for renewables.<br>
3. Energy generation(substations) and power plants.<br>
4. Solar and Wind energy working and operation.<br>
5. Energy conversion and utilisation.<br><br>
<h5>Entry Fee: Rs.150/-</h5><br>

<h5>Contact :</h5>
Kiran-9042402032.<br>
Mail-Id: eee.impulse2k19@gmail.com
</p><center><button id="newenergy" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    </div>
    </div>
        </div>
        </div><div id="popup16" class="overlay">
      <div class="popup">
      <h2>JARVIS</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">Industrial Robotics</a></li>
    <li><a href="#">PLC</a></li>
    <li><a href="#">Embedded System</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Industrial Robotics</p>
<p>
			<h5>Course content:</h5>
      In an era of employing robots to achieve the almost unachievable, production and manufacturing has entered a new realm. An industry without robots not only pulls down the quality of products but also the standards of manufacturing.
A workshop on industrial robotics is the contemporary technology to get aware of and here we are, updating you with what matters most. <br> <br>
<h5>Registration</h5>
Participants are requested to register atleast one hour prior to the workshop commencement. <br> <br>
<h5>Entry fees : Rs.100/-</h5> <br>
      </p><center><button id="industrialrobotics" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">PLC</p>
<p>
<h5>Course content:</h5>
			A PROGRAMMABLE LOGIC CONTROLLER (PLC) is an industrial computer control system that continuously monitors the state of input devices and makes decisions based upon a custom program to control the state of output devices. <br>
	PLC has its technologies applied in various fields mainly concentrating on robotics and automation.
	Join us to know a little bit deeper on the technology what PLC actually accounts for. <br><br>

	<h5>Registration</h5>
	Participants are requested to register atleast one hour prior to the workshop commencement. <br> <br>
	<h5>Entry fee Rs.100/-  </h5><br>


</p><center><button id="plc" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Embedded Systems</p>
<p>
	  <h5>Course Content:</h5>
			An embedded system is a combination of computer hardware and software, either fixed in capability or programmable, designed to accomplish a customised task.
This workshop gives you a headstart on embedded systems and opens a wide range of opportunities for you to research and improvise on. <br> <br>
<h5>Registration</h5> <br>
Participants are requested to register atleast one hour prior to the workshop commencement. <br>
<h5>Entry fee Rs.100/-</h5>
 <br>

      </p><center><button id="embeddedsystems" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>

    </div>
    </div>
        </div>
        </div><div id="popup17" class="overlay">
      <div class="popup">
      <h2>KARIGAALA</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">Pollution Monitoring</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Application Of GIS In Pollution Monitoring</p>
      <p><h5>Workshop Content :</h5>
&#9900; The growing geospacial technology provides a wider opportunity for the civil engineers in present and future.<br>
&#9900; GIS- Geographical Information System is advanced technology in the field of civil engineering under  various domains.<br>
&#9900; The one such workshop on “Application of GIS in pollution monitoring “ provides an excellent platform for students to come across the advancement in civil engineering.<br>
<h5></h5>
      </p><center><button id="pollutionmonitoring" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    </div>
    </div>
        </div>
        </div><div id="popup18" class="overlay">
      <div class="popup">
      <h2>MECH GUST</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
    <li><a href="#">Vehicle Building</a></li>
    <li><a href="#">Reverse Engineering</a></li>
    <li><a href="#">Robotics</a></li>
    <li><a href="#">CNC</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="ws"><br><br>
        <h5>Course Objective :</h5>
        &#9900; To improve the knowledge about the vehicle building.<br>
        &#9900; To visualize the parts of a vehicle and to know about its uses in the vehicle.<br><br>
        <h5>Entry fee: Rs.100/-</h5><br>
        <h5>Contact :</h5>
        Ganesh Prabu - 7200805767<br>
        Mail-Id: mechgust2k19@gmail.com
      </p><center><button id="vehiclebuilding" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="subtitles">Reverse Engineering & 3D printing</p>
      <p class="ws">
        <h5>Course Objective :</h5>
        &#9900; To enhance the skills of the students in 3D printing technology and Reverse engineering.<br>
        &#9900; To enable the students to scan the 3D object and convert it into a solid model in a software.<br>
        &#9900; To enable the students to operate the 3D printer.<br><br><h5>Entry fee: Rs.100/-</h5><br>
        <h5>Contact :</h5>
        Kathirvel - 8825919358<br>
        Mail-Id: mechgust2k19@gmail.com
			</p><center><button id="reverseengineering" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="ws"><br><br>
        <h5>Course Objective :</h5>
        &#9900; To know about the automation in the industry.<br>
        &#9900; To know the use of robots in a present generation.<br>
        &#9900; To enable the students to operate the KUKA robots.<br><br><h5>Entry fee: Rs.100/-</h5><br>
        <h5>Contact :</h5>
        Thathrooban - 7845384352<br>
        Mail-Id: mechgust2k19@gmail.com
      </p><center><button id="robotics" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>
    <div class="tabs_item">
      <p class="ws"><br><br>
      <h5>Course Objective :</h5>
        &#9900; To improve the knowledge of the students about the CNC machines and coding for CNC operations.<br>
        &#9900; To visualize the working of the CNC machines to the students.<br><br>
        <h5>Entry fee: Rs.100/-</h5><br>
        <h5>Contact :</h5>
        Ganesan - 9943535750<br>
        Mail-Id: mechgust2k19@gmail.com
      </p><center><button id="cnc" onclick="showHint(id); registered(this);" class="btn btn-primary">Add to Event</button></center>
    </div>

    </div>
    </div>
        </div>
        </div>
        <div class="riprpbro">
  <p>
  <h5>Technical Event Head :<span> Ram Prassanna.K</span></h5>
  Mobile No.: <span>8122024564/8778141433</span><br>
  Email Id :<span> <a href="mailto:takshashilatechnical@gmail.com">takshashilatechnical@gmail.com</a></span>
  </p>
</div>
</center>
<span id="session_check" style="display:hidden;">
<?php 
    $name=$_SESSION['username'];
    $email=$_SESSION['email'];
    echo $name;
    echo $email;
    // echo "I am cookies";
?>
</span>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/popup.js"></script>
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

// print already register

function registered(q) {
    var x = document.getElementById("session_check").textContent;
if(x.trim() != "")
{
alert ("Registered Successfully");
}
else
	{
		alert("Login to Register");
        window.location.href = "login.php";
	}
}
</script>
</body>
</html>
