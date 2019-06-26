<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300|Quicksand:300,400|Pacifico|Amatic+SC:400,700" rel="stylesheet">

    <!-- Title -->
    <title>Gallery</title>
    <link rel="icon" href="taknew logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="gallery.css">
<style type="text/css">
body{
    background-color: #1e1e1e;
}
.heading{
    text-align: center;
}

.welc_txt{
  margin-top: 16px;
}
.thalaipu{
    color: #bc994e;
    padding-top: 20px;
    padding-bottom: 15px;
    /*font-family: 'Quicksand', sans-serif;*/
    font-family: 'Amatic SC', cursive;
    font-weight: 400;
    font-stretch: ultra-expanded;
    font-size: 90px;
    text-align: center;
}
.btn{
    border-radius: 0;
}
.tag{
    font-family: 'Amatic SC', cursive;
}
.btn:hover{
    color: #a2874e;
}
.menu{
    color: #bc994e;
    float: right;
    margin-right: 2%;
    cursor:pointer;
    font-size:25px;
}
.sidenav {
  height: 330px;
  width: 0;
  position: fixed;
  z-index: 7000;
  top: 3px;
  right:3px;
  background-color: #010814;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-radius: 12px 12px 12px 12px;
  overflow-y: hidden;
}

.sidenav a {
  padding: 3px;
  text-decoration: none;
  font-size: 20px;
  color: #bc994e;
  display: block;
  font-family: 'Dosis', sans-serif;
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
.li_name{
  font-family: 'Varela', sans-serif; font-size:14px; color: ivory; margin-left:20px;
}
#scrollUp{
    visibility: hidden;
}
@media only screen and (max-width:500px ){
    .menu{
        font-size: 20px;
        top:-50px;
    }
    h2{
        margin-left: auto;
        margin-right: auto;
        padding-top: 20px;
    }
}
</style>

</head>

<body>
    <!-- ##### Portfolio Area Start ##### -->
    <header>

        <div class="heading" style="background-color: #1e1e1e;color: #bc994e">
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
        </div>
        <center><h2 class="thalaipu">OUR GALLERY</h2>
        </center>
    </div>
    </header>
    <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alazea-portfolio-filter">
                        <div class="portfolio-filter">
                            <button class="btn active tag" data-filter="*">All</button>
                            <button class="btn tag" data-filter=".design">Dance</button>
                            <button class="btn tag" data-filter=".home-design">Proshows</button>
                            <button class="btn tag" data-filter=".office-design">Participants</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alazea-portfolio">

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/21.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/21.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/17.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/17.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">

                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/5.jpg);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/5.jpg" class="portfolio-img d-flex align-items-center justify-content-center" title="view">

                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/18.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/18.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item office-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/9.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/9.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">

                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/12.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/12.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                           </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/2.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/2.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item home-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/1.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/1.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item garden office-design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/8.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/8.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/13.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/13.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item ">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/10.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/10.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/11.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/11.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>
                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item ">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/6.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/6.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 single_portfolio_item design">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/15.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/15.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>

                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item">
                    <!-- Portfolio Thumbnail -->
                    <div class="portfolio-thumbnail bg-img" style="background-image: url(img/bg-img/14.JPG);"></div>
                    <!-- Portfolio Hover Text -->
                    <div class="portfolio-hover-overlay">
                        <a href="img/bg-img/14.JPG" class="portfolio-img d-flex align-items-center justify-content-center" title="view">
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

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
