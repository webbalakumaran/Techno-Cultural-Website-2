<?php  session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cultural Events</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web|Major+Mono+Display|Dosis:500" rel="stylesheet">
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
  color: #ffbe5d;
}
p{margin-top:30px;
font-size: 25px;
text-align: center;
font-family: 'Titillium Web', sans-serif;
color: #ffbe5d;

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
  color: #ffbe5d;}
.back a:hover{
  color: #ffbe5d;
}
.welc_txt{
  margin-top: 16px;
}
.menu{
  position: absolute;
  cursor:pointer;
  right: 0%;
  margin-right: 4%;
  font-size:25px;
  top: 20px;
  z-index: 0;
  font-weight: 100;}
.fas{color:#ffbe5d;}
.box{padding-top: 10px;}
.sidenav {
  height: 380px;
  width: 0;
  position: fixed;
  z-index: 6;
  top: 3px;
  right:3px;
  background-color:#010814;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;}

.sidenav a {
  padding: 6px;
  text-decoration: none;
  font-size: 20px;
  font-family: 'Dosis', sans-serif;
  font-weight: lighter;
  color: #bc994e;
  display: block;
  transition: 0.3s;text-align:center;}

.sidenav a:hover {
  color: #ECE9E2;}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 36px;
  margin-left: 50px;}

.innerbox{
	background-color: rgb(01,01,01,0.7);
	height: 99%;
  margin-bottom: 50px;
	width: 80%;
  border-radius: 100px;
	position: relative;
	top: 200px;
}
.kutty{
	width: 155px;
	height: 155px;
	border-radius: 50%;
	margin-top: 50px;
  box-shadow: 2px 2px 50px 20px #000;
}
.kutty{
    -webkit-transition: -webkit-transform .5s;
    transition: transform .5s;
}
.kutty:hover{
    -ms-transform: scale(1.1, 1.1); /* IE 9 */
    -webkit-transform: scale(1.1, 1.1); /* Safari */
    transform: scale(1.1, 1.1);
    box-shadow: 2px 2px 90px 20px #000;
}
.row{
	top: 23px;
}
a{text-decoration: none;}
a:hover{text-decoration: none;}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
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
.box1{
  background-image: url("img/ce/ce-mu.jpg");
  background-position: center;
  background-size: cover;
}
.box2{
  background-image: url("img/ce/ce-bow.jpg");
  background-position: center;
  background-size: cover;
}
.box3{
  background-image: url("img/ce/ce-the.jpg");
  background-position: center;
  background-size: cover;
}
.box4{
  background-image: url("img/ce/ce-ph.jpg");
  background-position: center;
  background-size: cover;
}
.box5{
  background-image: url("img/ce/ce-lyf.gif");
  background-position: center;
  background-size: cover;
}
.box6{
  background-image: url("img/ce/ce-da.jpg");
  background-position: center;
  background-size: cover;
}
.box7{
  background-image: url("img/ce/ce-gm.png");
  background-position: center;
  background-size: cover;
}
.box8{
  background-image: url("img/ce/sports.jpg");
  background-position: center;
  background-size: cover;
}
.box9{
  background-image: url("img/ce/ce-on.jpg");
  background-position: center;
  background-size: cover;
}
.box10{
  background-image: url("img/ce/ce-fa.jpg");
  background-position: center;
  background-size: cover;
}
.box11{
  background-image: url("img/ce/ce-inf.jpg");
  background-position: center;
  background-size: cover;
}
.box12{
  background-image: url("img/ce/ce-sp.jpg");
  background-position: center;
  background-size: cover;
}
.btn{
  margin-bottom: 50px;
}
#popup2 .tabs a{
  padding: 0 15px;
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
    padding-top: 50px;
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
    border-radius: 50px;
    top:170px;
  }
  .row{
    top: 20px;
  }
  .tab{
    margin-top: 20px;
    height: 80%;
  }
  .tab ul{
    border:2px solid #db2620;
    border-bottom: none;
    text-align: center;
    display: block;
    border-radius: 10px 10px 0px 0px;
    box-shadow: 2px 5px 5px 0px rgba(240,240,240,0.2);

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
    border:2.3px solid #db2620;
    border-top: none;
    border-radius: 0px 0px 10px 10px;
    height: 65%;
    top: 0px;

  }
  .tab_content::-webkit-scrollbar {
  width: 2px;
  }
    #popup2 .tab_content{
        height: 60%;
    }
  #popup4 .tabs a{
  padding: 0 20px;
  width: 100%;
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
  <ul>
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
		<h1>cultural events</h1>
  </div>
</div>
	<center>
		<div class="container innerbox">
			<div class="row">
				<div class="col">
            <a href="#popup1"><div class="kutty box1">
            </div>
            <p>Music Events</p></a>
        </div>
        	<div class="col">
            <a href="#popup2"><div class="kutty box2">
            </div>
            <p>Battle Of Wits</p></a>
        </div>
        	<div class="col">
            <a href="#popup3"><div class="kutty box3">
            </div>
            <p>Theatre</p></a>
        </div>
        </div>
        <div class="row">
				<div class="col">
            <a href="#popup4"><div class="kutty box4">
            </div>
            <p>Photography</p></a>
        </div>
        	<div class="col">
            <a href="#popup5"><div class="kutty box5">
            </div>
            <p>Life Style</p></a>
        </div>
        	<div class="col">
            <a href="#popup6"><div class="kutty box6">
            </div>
            <p>Dance Events</p></a>
        </div>
        </div>
        <div class="row">
				<div class="col">
            <a href="#popup7"><div class="kutty box7">
            </div>
            <p>Gaming</p></a>
        </div>
        	<div class="col">
            <a href="#popup8"><div class="kutty box8">
            </div>
            <p>Sports</p></a>
        </div>
        	<div class="col">
            <a href="#popup9"><div class="kutty box9">
            </div>
            <p>Online Events</p></a>
        </div>
        </div>
        <div class="row">
				<div class="col">
            <a href="#popup10"><div class="kutty box10">
            </div>
            <p>Doodles</p></a>
        </div>
        	<div class="col">
            <a href="#popup11"><div class="kutty box11">
            </div>
            <p>Informals</p></a>
        </div>
        	<div class="col">
            <a href="#popup12"><div class="kutty box12">
            </div>
            <p>Spotlight</p></a>
        </div>
        </div>
        <br><br><br><br>
		<div id="popup1" class="overlay">
			<div class="popup">
			<h2>Music Events</h2>
			<a class="close" href="#">&times;</a>
					<div class="tab">

              <ul class="tabs">
                <li><a href="#">Solo Singing</a></li>
                <li><a href="#">Gaana Singing</a></li>
              </ul>
            <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Not all the birds chirp together.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)(On spot)<br><br>
<h5>Rules :</h5>
1. Usage of metronome will not be permitted.<br>
2. Performance can be of any language.<br><br>
<h5>Two rounds - prelims and finals.</h5><br>
<h6>Prelims:</h6>
1. Each participant will be given 3 minutes with setup time.<br>
2. Karaoke is allowed.<br>
3. Participants using karaoke and other backup music should submit the track 20 minutes prior to the commencement of performance.<br>
4. No instrumental accompaniment for prelims.<br>
5. Judges' and organizers' decision will be final.<br>
<h6>Finals:</h6>
1. Finals will happen at the informals stage.<br>
2. Time limit is 5 minutes.<br>
3. Participants can perform upto two songs within the given time.<br>
4. Instruments can be accompanied.<br>
5. Judges' and organizers' decision will be final.<br><br>
<h5>Co-Ordinator :</h5>
Ganesh - 9600127918</p>
    </div>
        <div class="tabs_item">
      <p class="subtitles"></p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)(On spot)<br><br>
<h5>Rules :</h5>
1. Usage of metronome will not be permitted.<br>
2. Offensive words should not be used.<br>
3. Political and controversial views are strictly prohibited.<br>
4. Songs with Madras as a theme will be encouraged.<br>
5. Judges' and organizers' decision will be final.<br><br>
<h5>Co-Ordinator :</h5>
Ganesh - 9600127918</p>
    </div> <!-- / tabs_item -->
    </div>
    </div>
				</div>
				</div>
        <div id="popup2" class="overlay">
      <div class="popup">
      <h2>Battle Of Wits</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">

              <ul class="tabs">
                <li><a href="#">Madras Quiz</a></li>
                <li><a href="#">Mix Match Quiz</a></li>
                <li><a href="#">Debate</a></li>
                <li><a href="#">Jam</a></li>
                <li><a href="#">Shipwreck</a></li>
                <li><a href="#">Picture Perception</a></li>
              </ul>
             <!-- / tabs -->
          <div class="tab_content">
        <div class="tabs_item">
      <p class="subtitles">We know you've always fascinated details to a miniscule level about our Madras.<br> Wonder not, we've got the most challenging quiz about our own Majestical Madras.<br> Quiz up and get Madrasified!</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Theme - Anything Madras<br>
2. Judges' and organizers' decision will be final.<br><br>
<h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div>
    <div class="tabs_item">
      <p class="subtitles">A thousand genres, a million questions, a million dollar answer.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. 2-3 members per team.<br>
2. Top 5 teams will go to the final.<br>
3. Theme - Anything Madras<br>
4. Judges' and organizers' decision will be final.<br><br>
<h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">This is where phrases are set to battle against each other for a contemplative value.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Each team can have 3 participants.<br>
2. Arguments must only be in english.<br>
3. Topic will be given on spot.<br>
4. Preparation time : 1 min<br>
5. Performance time : 2 min per participant<br>
6. No abusive words.<br>
7. Participants are not supposed to cross talk.<br>
8. No personal violation against the opposite team member(s).<br>
9. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">You’ve got a minute and an idea, is there something else much comforting needed for you to slit words in their places?</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Usage of abusive words leads to immediate disqualification.<br>
2. No stuttering.<br>
3. Top seven will move to the finale.<br>
4. Topic will be given in spot.<br>
5. No repetitive words or ideas.<br>
6. Objection by the judge is allowed.<br>
7. Participant must follow the general rules set by the judge while performing.<br>
8. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div>

    <div class="tabs_item">
      <p class="subtitles">Worst case scenario is a situational momentum here, you’ve got to  handle it with extreme prejudice of survival.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Each team must have a maximum of 3 members.<br>
2. Time limit is 3 minutes per person.<br>
3. No abusive language.<br>
4. Use of English language is mandatory.<br>
5. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div>

    <div class="tabs_item">
      <p class="subtitles">A phrase speaks a million words. A picture states a million phrases.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Time provided to view the picture- 1 min.<br>
2. Maximum time provided for description of picture- 45 mins.<br>
3. Individual event, no teams allowed.<br>
4. Usage of colloquial terms is not allowed.<br>
5. No abusive or hateful language.<br>
6. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup3" class="overlay">
      <div class="popup">
      <h2>Theatre</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">Mime</a></li>
                <li><a href="#">ADZAP</a></li>
                <li><a href="#">Channel Surfing</a></li>
                <li><a href="#">Mimicry</a></li>
                <li><a href="#">Sor-Por</a></li>

              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Gestures speak a million words where even there's no speck of a sound.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. A team of minimum 10 members can participate.<br>
2. Time limit is 10 minutes per team.<br>
3. Theme : Madras<br>
4. Shortlisted candidates will perform on informals stage.<br>
5. Music must be given 20 minutes prior to the commencement of the event.<br>
6. Vulgarity will lead to elimination.<br>
7. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Selling and marketing are two different things;<br> it's a slice of wood to sell but logs are to market.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Each team can have 4 to 6 members.<br>
2. Use of mobiles and other gadgets is not allowed.<br>
3. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Spontaneity topping with your time on TV is what this is all about.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. A team of 4 to 7 participants.  <br>
2. Participants will have to switch to different channels on the command of the judge.<br>
3. Vulgarity in any form will lead to elimination.<br>
4. Controversial topics can be chosen without hurting individual ideals. <br>
5. Channels include languages such as Hindi, Tamil, Telugu, Malayalam and English. <br>
6. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282</p>
    </div>
    <div class="tabs_item">
      <p class="subtitles">The imitation game will be strong in this one, how much is yours?</p>
      <p>
      <h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Individual event.<br>
2. Two round – prelims and finals.<br>
3. Finals will happen on the informals stage.<br>
4. Hurting individuals and their ideals will lead to immediate disqualification.<br>
5. No vulgar or abusive language is allowed.<br>
6. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div>
    <div class="tabs_item">
      <p>
      <h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Each team can have 3 participants.<br>
2. Arguments must only be in Thamizh.<br>
3. Topic will be given on spot.<br>
4. Preparation time : 1 min<br>
5. Performance time : 2 min per participant<br>
6. No abusive words.<br>
7. Participants are not supposed to cross talk.<br>
8. No personal violation against the opposite team member(s).<br>
9. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Jacqulin - 8778805282
</p>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup4" class="overlay">
      <div class="popup">
      <h2>Photography</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">On Spot Photography</a></li>
                <li><a href="#">Mobile Photography</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Love at first sight is a theory, how about we capture it?</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Participants are requested to bring their own DSLR camera.<br>
2. Theme - Campus Aura<br>
3. Participants must submit their entries at 3PM to the co-ordinator.<br>
4. Winner and Runner-up will be declared at 3:30PM everyday.<br>
5. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Srinath - 7395999252
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">With the power of capturing the moment resting within the palm of your hands,<br>  how breath taking can you do this?</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Theme - Campus Aura<br>
2. No filters or edit must be made to the picture.<br>
3. Participants must submit their entries at 3PM to the co-ordinator.<br>
4. Winner and Runner-up will be declared at 3:30PM everyday.<br>
5. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinators :</h5>
Srinath - 7395999252
</p>
    </div> <!-- / tabs_item -->

    </div>
    </div>
        </div>
        </div>
        <div id="popup5" class="overlay">
      <div class="popup">
      <h2>Life Style</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">Plush</a></li>
                <li><a href="#">Mr.&Ms. Takshashila</a></li>
                <li><a href="#">Primp UP</a></li>

              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Walk like the elements are compromised.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. This event falls under premium registration.<br>
3. Participants are requested to report the college premises before 3pm.<br>
4. Entry fee per head Rs.200/- for online registration and Rs.250/- for on-spot registration.<br>
5. Online and on-spot registrations are available.<br>
6. Entry fee for on spot registrations is Rs.250 per head.<br>
7. The music should be provided to the coordinator at the registration desk.<br>
8. Music should be submitted by 5PM.<br><br>
<h5>Rules :</h5>
1. Marks are allotted based on team coordination and costumes. <br>
2. Cross over teams are also permitted.<br>
3. Each team can have a maximum of 8 members.<br>
4. Performance time : 6min <br>
5. 1 minute will be given for showstop.<br>
6. Green room will be provided.<br>
7. No usage of harmful properties.<br>
8. Vulgarity and obscenity is not permitted.<br>
9. Judges' and organizers' decision will be final.
<br><br><h5>Co-Ordinator :</h5>
Chandan - 9840502728</p>
    </div>
    <div class="tabs_item">
      <p class="subtitles">What all could you go through to become the ultimatum.<br>This is the event to hunt for the next face of this grand event.<br>Let's see what you have and what it takes for you to become the One in many.</p>
      <p>
        <h5>ROUND 1</h5>
      The first round is where we come to know who you really are, send us your talent through our whatsapp numbers.<br>
Ashwini - 9940076678.<br>
Kamalesh - 7871998932.<br><br>
<h5>ROUND 2</h5>
5 boys and 5 girls will be shortlisted based on their individual style of showcasing their talents.<br><br>
<h5>ROUND 3</h5>
A Mirchi Vijay will be the anchor of event.<br>
Selection process is completely based on talent.<br><br>
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Flaunt with the brimming colors.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. Materials of two contrasting colors will be provided to the participant.<br>
2. Team of 3 comprising 2 designers and 1 model.<br>
3. The designer pins and clads their work on their model.<br>
4. Makeup, styling of hair and complete grooming of the models by the designer of the event.<br>
5. The theme will be disclosed to the participants on spot, around which their design should evolve.<br>
6. Finally, the model should walk the runaway to showcase their designer's work based on which the event will be judged.<br>
7. Judges' and organizers' decision will be final.<br><br>
<h5>Co-Ordinaters :</h5>
Sindhu - 9444208715.
</p>
    </div> <!-- / tabs_item -->

    </div>
    </div>
        </div>
        </div>
        <div id="popup6" class="overlay">
      <div class="popup">
      <h2>Dance Events</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">Solo Dance</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">With the music blaring, the stage is all yours to set it aflame with your own grooves.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. The event comes under general registration.(On spot)<br><br>
<h5>Rules :</h5>
1. The music should be provided to the coordinator 20 min prior to the commencement of the event.<br>
2. Time limit is 3 min<br>
3. No usage of harmful properties.<br>
4. Vulgarity and obscenity is not permitted.<br>
5. Judges' and organizers' decision will be final.</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles"></p>
      <p>YET TO BE UPDATED</p>
    </div> <!-- / tabs_item -->
    </div>
    </div>
        </div>
        </div>
        <div id="popup7" class="overlay">
      <div class="popup">
      <h2>Gaming</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">DEADSHOT(PUBG Mobile)</a></li>
                <li><a href="#">Blur</a></li>
                <li><a href="#">COD-IV:Modern Warfare</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Grab your chicken dinner by killing 'em all!!!</p>
      <p>
        <h5><u>RULES :</u></h5>
1. Only players above the age of 15 are allowed to participate.<br>
2. All games are played on PUBG Mobile, the mobile version only. No emulators and iPads.<br>
3.  All four teammates must be registered members of Playmonk. Your team will be instantly disqualified if an unregistered player plays.<br>
4. Please download all maps and be ready, if you don't have the map, the match will be started without you. No refunds will be issued if you are kicked from the server due to glitches or otherwise.<br>
5. Griefing & teaming will result in instant disqualification and team ban.<br>
6. Hackers will be disqualified instantly. As soon as we suspect a player to be hacking, the team will be disqualified. The player or team will have to show video proof that they aren’t cheating. If suspected players are unable to provide proof, PlayMonk reserve the right to disqualify the player and the team. We recommend players to record their perspectives, just in case a discrepancy arises.<br>
7. In case of any technical issues from the organizer side, matches can be rescheduled. Players must agree to the new rescheduled time.<br>
8. We have a lot of spectators watching to ensure cheating doesn’t take place in the tournaments.<br>
9. UNREGISTERED PLAYERS will not be entertained in tournaments, and could result in a team ban or player ban. Do not bring random friends into tournaments. UNREGISTERED PLAYERS will not be entertained.<br>
10. Emulators / iPad players will not be allowed in PlayMonk matches unless otherwise specified.<br><br>
<h5><u>FOR MORE DETAILS CONTACT:</u></h5>
SURYA : +91 8939386062<br>
SANTHOSH KUMAR : +91 8825665042<br>
KISHORE : +91 8825820602<br></p>
<img style="width: 100%;height: 20%;border-radius:15px;" src="img/t/pubg.jpg"> <br><br>
<img style="width: 100%;height: 20%;border-radius:15px;" src="img/t/pubg_price.jpg">

<center><a href="https://www.townscript.com/e/takshashila-001402"><button class="btn btn-primary">Add to Event</button></a></center>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <h4></h4>
      <p class="subtitles">
    Grab your keys and Fasten your seat belts !!!<br>
Wait. This ain't your usual long drive. This is gonna be intense.<br>
Drift along the corners, get your tyres screeched and make it to the finish line before your rivals.<br><br>

Clutch. Shift. Gas. Repeat.</p>
    </div> <!-- / tabs_item -->
		<div class="tabs_item">
      <h4></h4>
      <p class="subtitles">Duty Calls !!!
Load your arsenal, team up with your allies, and knock down your rivals.</p>
<p>

<h4>Call of Duty 4 : Modern Warfare</h4>
<h4>Promod Rules :</h4>
Game mode: Free-for-All (FFA)<br>
Round switch: Every round <br>
Friendly fire: Disabled <br>
Max health: Half <br>
Air support: No <br>
Hardcore: Yes <br>
<br>
<h4>Maps allowed :</h4>
Backlot <br>
Crash <br>
Crossfire <br>
District <br>
Strike <br>
Vacant <br>
<br>
<h4>Guns allowed :</h4>
Snipers: M40A3 or R700<br>
Assault Rifles: M16, AK47, MP44, M4 Carbine<br>
SMGs: AK-47u, MP5<br>
No shotguns<br>
Flash + Smoke only<br>
No attachments<br>
<br>
<h4>Perks allowed :</h4>
Tier 1 - Bomb squad/Bandolier <br>
Tier 2 - Stopping power <br>
Tier 3 - Deep impact <br></p>
    </div>



    </div>
    </div>
        </div>
        </div>
        <div id="popup8" class="overlay">
      <div class="popup">
      <h2>Sports</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">Futsal</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles"> Welcome to the real football.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. Entry fee: Rs.250 for on spot registration.<br><br>
<h5>Rules :</h5>
1. 5 + 3 players per team.<br>
2. Timings (10 - 5 - 10).<br>
3. Entire team should enter the campus before reporting time.<br>
4. Teams can call one 1 minute timeout per half.<br>
5. There is no extra time, injury time and stoppage time.<br>
6. Teams are comprised of 4 outfield players and one goal keeper.<br>
7. There are no off-sides.<br>
8. Referee's decision is final.<br>
9. Rotational substitution is allowed.<br><br>
<h5>Co-Ordinator :</h5>
Sulaiman - 8056708021</p>
    </div> <!-- / tabs_item -->
    </div>
    </div>
        </div>
        </div>
        <div id="popup9" class="overlay">
      <div class="popup">
      <h2>Online Events</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">Focus</a></li>
                <li><a href="#">MusicMash (TikTok)</a></li>
                <li><a href="#">Lights Out</a></li>
                <li><a href="#">Meme</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Submit your visions.</p>
      <p>
<h5>Rules :</h5>
Theme - Madras<br>
1. Maximum of 3 entries from an individual participant is allowed.<br>
2. Deadline: February 20.<br>
3. Mail your pictures to <a href="mailto:cittakshashila.focus@gmail.com">cittakshashila.focus@gmail.com</a><br><br>
<h5>Co-Ordinator :</h5>
Deepak - 9677430286</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Given a scene, we'd like to set a bar for our own Sethupathi.</p>
      <p>
<h5>Rules :</h5>
1. The clip should be to the maximum of 2 minutes long. <br>
2. Not more than 2 entries per person. <br>
3. Deadline: February 20.<br>
4. The design should be posted in instagram or facebook using the hashtag <strong>#get_madrasified</strong>.<br>
5. Winners will be contact by the co-ordinators directly.<br>
6. Mail your pictures to <a href="mailto:cittakshashila.musicmash@gmail.com">cittakshashila.musicmash@gmail.com</a><br><br>
<h5>Co-Ordinator :</h5>
Deepak - 9677430286</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Time is relative when it comes to narrate a story that's always spectacular.</p>
      <p>
<h5>Rules :</h5>
1. Participants are asked to send on or before February 18.<br>
2. Shortlisted films will be screened.<br>
3. Judges' and organizers' decision will be final.<br>
4. Mail your films to <a href="mailto:cittakshashila.lightsout@gmail.com">cittakshashila.lightsout@gmail.com</a>.<br>
5. The participants shortlisted will be contacted by the organisers.<br><br>
<h5>Co-Ordinator :</h5>
Deepak - 9677430286</p>
    </div>
    <div class="tabs_item">
      <p class="subtitles"> Well we live in an era where what that's laughable actually sparks a light of truth.</p>
      <p>
<h5>Rules :</h5>
Theme - Namma Chennai<br>
1. Mimcing controversial topics is not allowed.<br>
2. Vulgarity and obscenity is not permitted.<br>
3. Mail your pictures to <a href="mailto:cittakshashila.memester@gmail.com">cittakshashila.memester@gmail.com</a><br>
4. Submissions shouldn't have watermarks.<br>
5. Maximum 3 submissions for a persons.<br>
6. Memes will be judged on quality and creativity.<br><br>
<h5>THEME</h5>
College<br>
Madras<br>
Engineering<br><br>
<h5>Co-Ordinator :</h5>
Deepak - 9677430286
      </p>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup10" class="overlay">
      <div class="popup">
      <h2>Doodles</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">Face Painting</a></li>
                <li><a href="#">Mehendi</a></li>
                <li><a href="#">Best Outta Waste</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <p class="subtitles">Face is the index of mind.<br>Or is it possible to hide it under colours?<br>Show us your true colours while you make someone beautiful in their index.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. This event comes under general registration.<br><br>
<h5>Rules :</h5>
1. On spot theme will be given.<br>
2. Equipments will be provided. <br>
3. Judges' and organizers' decision will be final.
<br><br><h5>Contact :</h5>
Jacqulin - 8778805282
</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p class="subtitles">Orange is the new white.</p>
      <p><h5>Registration :</h5>
1. College ID is mandatory.<br>
2. This event comes under general registration.<br><br>
<h5>Rules :</h5>
1. 2 members per team.<br>
2. Time limit for a participant is 30 minutes.
<br><br><h5>Contact :</h5>
Jacqulin - 8778805282</p>
    </div> <!-- / tabs_item -->
    <div class="tabs_item">
      <p><h5>Registration :</h5>
1.College ID is mandatory.<br>
2.This event comes under general registration.<br><br>
<h5>Rules :</h5>
1. Maximum of 2 people will be allowed per team.<br>
2. Materials will be provided.<br>
3. Preparation time - 1hr<br>
4. Presentation time - 2min<br>
5. Participants will be judged on creativity, utilization of resources and overall presentation.<br>
6. Judges' and organizers' decision will be final.
<br><br><h5>Contact :</h5>
Jacqulin - 8778805282</p>
    </div>
    </div>
    </div>
        </div>
        </div>
        <div id="popup11" class="overlay">
      <div class="popup">
      <h2>Informals</h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
             <ul class="tabs">
                <li><a href="#">Fitness Challenge</a></li>
                <li><a href="#">Beat Boxing</a></li>
                <li><a href="#">Quiz</a></li>
                <li><a href="#">Rap Battle</a></li>
                <li><a href="#">Treasure Hunt</a></li>
              </ul>
          </div>
          <div class="tab_content">
            <div class="tabs_item">
              <p>The mind and soul are the compartments of our body, the body which is set to compete with respect to fitness.</p>
              <p>
                <h6>Contact :</h6>
             Jacqulin - 8778805282</p>
            </div>
            <div class="tabs_item">
              <p>This boxing is all about punching the air with your voice.</p>
              <p>
                <h6>Contact :</h6>
             Jacqulin - 8778805282</p>
            </div>
            <div class="tabs_item">
              <p>At times, we need more of an answer than a solution.</p>
              <p>
                <h6>Contact :</h6>
             Jacqulin - 8778805282</p>
            </div>
            <div class="tabs_item">
              <p>Words rhyme, lyrical chime, nonetheless we figure the dime, of words outta mine and hence we set the stage in fire.</p>
              <p>
                <h6>Contact :</h6>
             Jacqulin - 8778805282</p>
            </div>
            <div class="tabs_item">
              <p>Bring about your Sherlock Holmes.</p>
              <p>
                <h6>Contact :</h6>
             Jacqulin - 8778805282</p>
            </div>
          </div>
        </div>

        </div>
        </div>
        <div id="popup12" class="overlay">
      <div class="popup">
      <h2></h2>
      <a class="close" href="#">&times;</a>
          <div class="tab">
            <div class="uli">
              <ul class="tabs">
                <li><a href="#">SPOTLIGHT</a></li>
              </ul>
              </div> <!-- / tabs -->
          <div class="tab_content">
    <div class="tabs_item">
      <h4></h4>
      <p style="text-align: center;color: #f2f2f2">An interactive session with an emerging personality</p>
      <p>
                <h6>Contact :</h6>
             Jacqulin - 8778805282</p>
    </div> <!-- / tabs_item -->
    </div>
    </div>
        </div>
        </div>
	</div></center>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/popup.js"></script>
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
