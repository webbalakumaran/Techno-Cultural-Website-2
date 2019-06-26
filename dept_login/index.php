<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Department Login</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="icon" href="taknew logo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/login.css">
      <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Dosis:500);
@font-face{
  font-family: tak;
  src:url(font/takfont.ttf);
}
.logo{font-size: 20px;
  	margin: 0;
}

body{
  background-color: purple;
  background-image: url(bg.jpg);
  height: 100%;
  width: 100%;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.kutty{
  width: 150px;
  height: 140px;
  text-align: center;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  margin: 10px;
}
.box1{
  background-image: url(../img/logo/cse.png)
}
.box2{
  background-image: url(../img/logo/ece.png)
}
.box3{
  background-image: url(../img/logo/civil.png)
}
.box4{
  background-image: url(../img/logo/eee.png)
}
.box5{
  background-image: url(../img/logo/mct.png)
}
.box6{
  background-image: url(../img/logo/mech.png)
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
.col-md-4{
  margin-top: 20vh;
}
  .fas{
    font-size: 23px;
  }

.cs{
  text-align: center;
  font-size: 50px;
  font-family: tak;
}
.mar{
  margin-top: -80px;
}
@media only screen and (max-width: 420px){
  .logos{
    display: none;
  }
}
</style>
</head>
<body class="login">

    <div class="uno">
  <div class="container">
    <div class="row">
      <div class="col-md-4 logos">
        <div class="row mar"><center><div class="kutty box1"></div></center></div>
        <div class="row"><center><div class="kutty box2"></div></center></div>
        <div class="row"><center><div class="kutty box3"></div></center></div>
      </div>
      <div class="col-md-4">

      <div class="login-container-wrapper">
      <div style="padding-top: 0px;">
        <center><img src="../taknew logo.png" height="125px" width="125px" style="margin-top: -65px;margin-bottom: "></center>
        <h3 style="text-align: center; color: red;margin-bottom: 25px; font-family: 'Patua One', cursive;">ADMIN LOGIN</h3>

      <form class="form-horizontal login-form" method="post" action="newsql.php">
                <div class="form-group relative">
          <input id="login_username" name="username" class="form-control input-lg" type="text" placeholder="Username" required/>
            
        </div>
        <div class="form-group relative password">
          <input id="login_password" name="password" class="form-control input-lg" type="password" placeholder="Password" required/>
                  </div>
        <div class="form-group ">
          <center><button type="submit" class="btn btn-success" name="login_user">Login</button></center>
        </div>

      </form>
    </div>
    </div>
      </div>
      <div class="col-md-4 logos">
        <div class="row mar"><center><div class="kutty box4"></div></center></div>
        <div class="row"><center><div class="kutty box5"></div></center></div>
        <div class="row"><center><div class="kutty box6"></div></center></div>
      </div>
    </div>
	</div>
</div>

  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script  src="js/login.js"></script>
</body>
</html>
