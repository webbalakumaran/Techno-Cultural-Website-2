<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>table</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    h3{
      text-align: center;
      text-transform: uppercase;
      color: blue;
    }
    h1{
      color: red;
    }
</style>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <center><h1>Showing rows from the database</h1></center>
      </div>
    </div>

      <br><br>
      <!--create table-->
      <?php
      $servername = "localhost";
      $username = "Takshashila";
      $password = "GaKuSeI@2k16";
      $dbname = "registration_new";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if (isset($_POST['login_user'])) {
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
        //computer science
      if($user=="csehackerz"&&$pass=="21/02/cse")
      {
      $e= array("gobletoftale","copycat","mishmash","techbuzz","warlock","gaming","oasis","photography","squarebattle","artificialintelligence","augmentedreality");
        $length=sizeof($e);
      // Create connection
      //$conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      // else
      // {
      // echo "connecion successfull\n";
      // }
      for($i=0;$i<$length;$i++)
      {
        $user_check_query = "SELECT c.eventid,o.username, o.email,o.mobile, o.college,o.department,o.year, c.event_name FROM user o, $e[$i] c WHERE o.email = c.email;" ;
        $result = mysqli_query($conn, $user_check_query);

        echo "<strong><h3>$e[$i]</h3></strong>";echo"</br></br>";
        echo"<table>";

        echo"<tr>
        <th>Eventid</th>
          <th>Username </th>
          <th>Email</th>
          <th>Mobile</th>
          <th>College</th>
          <th>Department</th>
          <th>Year</th>
          <th>Event_name</th>
        </tr>";


      if ($result) {
       //exit("Email exits");
       while($row = mysqli_fetch_assoc($result)) {

         echo "<tr>";
             echo "<td>" .$row["eventid"]. "</td>";
             echo "<td>" .$row["username"]. "</td>";
             echo "<td>" .$row["email"]. "</td>";
             echo "<td>" .$row["mobile"]. "</td>";
             echo "<td>" .$row["college"]. "</td>";
            echo "<td>" .$row["department"]. "</td>";
             echo "<td>" .$row["year"]. "</td>";
             echo "<td>" .$row["event_name"]. "</td>";
         echo "</tr>";

           }
      }
      echo"</table>";
      }
      // $sql = "SELECT id, firstname, lastname FROM MyGuests";
      // $result = mysqli_query($conn, $sql);
      // if (mysqli_num_rows($result) > 0) {
      //     // output data of each row
      //     while($row = mysqli_fetch_assoc($result)) {
      //         echo "id: " . $row["username"]. " - Name: " . $row["email"]. " college" . $row["college"].  " college" . $row["dob"]."<br>";
      //     }
      // } else {
      //     echo "0 results";
      // }

      mysqli_close($conn);
    }
    //Electrical and communication
    else if($user=="ecevidyutrenz"&&$pass=="21/02/ecevidu")
    {
    $e= array("technovation","trickycircuits","exquizme","droidtrooper","technodium","hacknofest","thriftventure","fotografia","escapade","voiceover","eceworkshop");
    // Create connection
    $length=sizeof($e);
    //$conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // else
    // {
    // echo "connecion successfull\n";
    // }
    for($i=0;$i<$length;$i++)
    {
      $user_check_query = "SELECT c.eventid,o.username, o.email,o.mobile, o.college,o.department,o.year, c.event_name FROM user o, $e[$i] c WHERE o.email = c.email;" ;
        $result = mysqli_query($conn, $user_check_query);

        echo "<strong><h3>$e[$i]</h3></strong>";echo"</br></br>";
        echo"<table>";

        echo"<tr>
        <th>Eventid</th>
          <th>Username </th>
          <th>Email</th>
          <th>Mobile</th>
          <th>College</th>
          <th>Department</th>
          <th>Year</th>
          <th>Event_name</th>
        </tr>";


      if ($result) {
       //exit("Email exits");
       while($row = mysqli_fetch_assoc($result)) {

         echo "<tr>";
             echo "<td>" .$row["eventid"]. "</td>";
             echo "<td>" .$row["username"]. "</td>";
             echo "<td>" .$row["email"]. "</td>";
             echo "<td>" .$row["mobile"]. "</td>";
             echo "<td>" .$row["college"]. "</td>";
            echo "<td>" .$row["department"]. "</td>";
             echo "<td>" .$row["year"]. "</td>";
             echo "<td>" .$row["event_name"]. "</td>";
         echo "</tr>";

           }
      }
      echo"</table>";
      }
    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["username"]. " - Name: " . $row["email"]. " college" . $row["college"].  " college" . $row["dob"]."<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    mysqli_close($conn);
  }

  //Electrical and electronics
  else if($user=="eeeimpulse"&&$pass=="210416105018")
  {
  $e= array("modelexpo","enquizta","compoquest","brainwaves","circuitdesigining","loguess","connections","memecreation","deafly","newenergy");
  // Create connection
  $length=sizeof($e);
  //$conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  // else
  // {
  // echo "connecion successfull\n";
  // }
  for($i=0;$i<$length;$i++)
  {
   $user_check_query = "SELECT c.eventid,o.username, o.email,o.mobile, o.college,o.department,o.year, c.event_name FROM user o, $e[$i] c WHERE o.email = c.email;" ;
        $result = mysqli_query($conn, $user_check_query);

        echo "<strong><h3>$e[$i]</h3></strong>";echo"</br></br>";
        echo"<table>";

        echo"<tr>
        <th>Eventid</th>
          <th>Username </th>
          <th>Email</th>
          <th>Mobile</th>
          <th>College</th>
          <th>Department</th>
          <th>Year</th>
          <th>Event_name</th>
        </tr>";


      if ($result) {
       //exit("Email exits");
       while($row = mysqli_fetch_assoc($result)) {

         echo "<tr>";
             echo "<td>" .$row["eventid"]. "</td>";
             echo "<td>" .$row["username"]. "</td>";
             echo "<td>" .$row["email"]. "</td>";
             echo "<td>" .$row["mobile"]. "</td>";
             echo "<td>" .$row["college"]. "</td>";
            echo "<td>" .$row["department"]. "</td>";
             echo "<td>" .$row["year"]. "</td>";
             echo "<td>" .$row["event_name"]. "</td>";
         echo "</tr>";

           }
      }
      echo"</table>";
      }
  // $sql = "SELECT id, firstname, lastname FROM MyGuests";
  // $result = mysqli_query($conn, $sql);
  // if (mysqli_num_rows($result) > 0) {
  //     // output data of each row
  //     while($row = mysqli_fetch_assoc($result)) {
  //         echo "id: " . $row["username"]. " - Name: " . $row["email"]. " college" . $row["college"].  " college" . $row["dob"]."<br>";
  //     }
  // } else {
  //     echo "0 results";
  // }

  mysqli_close($conn);
}

//Mechanical
else if($user=="mechanicalmechgust"&&$pass=="23/02/mech")
{
$e= array("paperpresentationmech","waterrocketry","cadcam","caemodelling","technicalquiz","mrmachinist","moulding","CONNEXIONS","doodle","thricevolleyball","vehiclebuilding","reverseengineering","robotics","cnc");
// Create connection
$length=sizeof($e);
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
// {
// echo "connecion successfull\n";
// }
for($i=0;$i<$length;$i++)
{
 $user_check_query = "SELECT c.eventid,o.username, o.email,o.mobile, o.college,o.department,o.year, c.event_name FROM user o, $e[$i] c WHERE o.email = c.email;" ;
        $result = mysqli_query($conn, $user_check_query);

        echo "<strong><h3>$e[$i]</h3></strong>";echo"</br></br>";
        echo"<table>";

        echo"<tr>
        <th>Eventid</th>
          <th>Username </th>
          <th>Email</th>
          <th>Mobile</th>
          <th>College</th>
          <th>Department</th>
          <th>Year</th>
          <th>Event_name</th>
        </tr>";


      if ($result) {
       //exit("Email exits");
       while($row = mysqli_fetch_assoc($result)) {

         echo "<tr>";
             echo "<td>" .$row["eventid"]. "</td>";
             echo "<td>" .$row["username"]. "</td>";
             echo "<td>" .$row["email"]. "</td>";
             echo "<td>" .$row["mobile"]. "</td>";
             echo "<td>" .$row["college"]. "</td>";
            echo "<td>" .$row["department"]. "</td>";
             echo "<td>" .$row["year"]. "</td>";
             echo "<td>" .$row["event_name"]. "</td>";
         echo "</tr>";

           }
      }
      echo"</table>";
      }
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["username"]. " - Name: " . $row["email"]. " college" . $row["college"].  " college" . $row["dob"]."<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);
}
//Civil
else if($user=="civilkarigala"&&$pass=="22/02/civil")
{
$e= array("paperpresentationcivil","caddiz","asperis","cubecasting","siteengineer","towerbuilding","fitthepipe","bobthebuilder","blank","pollutionmonitoring");
// Create connection
$length=sizeof($e);
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
// {
// echo "connecion successfull\n";
// }
for($i=0;$i<$length;$i++)
{
  $user_check_query = "SELECT c.eventid,o.username, o.email,o.mobile, o.college,o.department,o.year, c.event_name FROM user o, $e[$i] c WHERE o.email = c.email;" ;
        $result = mysqli_query($conn, $user_check_query);

        echo "<strong><h3>$e[$i]</h3></strong>";echo"</br></br>";
        echo"<table>";

        echo"<tr>
        <th>Eventid</th>
          <th>Username </th>
          <th>Email</th>
          <th>Mobile</th>
          <th>College</th>
          <th>Department</th>
          <th>Year</th>
          <th>Event_name</th>
        </tr>";


      if ($result) {
       //exit("Email exits");
       while($row = mysqli_fetch_assoc($result)) {

         echo "<tr>";
             echo "<td>" .$row["eventid"]. "</td>";
             echo "<td>" .$row["username"]. "</td>";
             echo "<td>" .$row["email"]. "</td>";
             echo "<td>" .$row["mobile"]. "</td>";
             echo "<td>" .$row["college"]. "</td>";
            echo "<td>" .$row["department"]. "</td>";
             echo "<td>" .$row["year"]. "</td>";
             echo "<td>" .$row["event_name"]. "</td>";
         echo "</tr>";

           }
      }
      echo"</table>";
      }
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["username"]. " - Name: " . $row["email"]. " college" . $row["college"].  " college" . $row["dob"]."<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);
}
//Mechatronics
else if($user=="mechatronicsjarvis"&&$pass=="22/02/jar")
{
$e= array("industrialrobotics","plc","embeddedsystems","mrg","slidedesk","electroonwheel","waroftitans","techmaze","crackit","potatocanon","sensorroom","laserwalk","freezeup");
// Create connection
$length=sizeof($e);
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
// {
// echo "connecion successfull\n";
// }
for($i=0;$i<$length;$i++)
{
 $user_check_query = "SELECT c.eventid,o.username, o.email,o.mobile, o.college,o.department,o.year, c.event_name FROM user o, $e[$i] c WHERE o.email = c.email;" ;
        $result = mysqli_query($conn, $user_check_query);

        echo "<strong><h3>$e[$i]</h3></strong>";echo"</br></br>";
        echo"<table>";

        echo"<tr>
        <th>Eventid</th>
          <th>Username </th>
          <th>Email</th>
          <th>Mobile</th>
          <th>College</th>
          <th>Department</th>
          <th>Year</th>
          <th>Event_name</th>
        </tr>";


      if ($result) {
       //exit("Email exits");
       while($row = mysqli_fetch_assoc($result)) {

         echo "<tr>";
             echo "<td>" .$row["eventid"]. "</td>";
             echo "<td>" .$row["username"]. "</td>";
             echo "<td>" .$row["email"]. "</td>";
             echo "<td>" .$row["mobile"]. "</td>";
             echo "<td>" .$row["college"]. "</td>";
            echo "<td>" .$row["department"]. "</td>";
             echo "<td>" .$row["year"]. "</td>";
             echo "<td>" .$row["event_name"]. "</td>";
         echo "</tr>";

           }
      }
      echo"</table>";
      }



// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["username"]. " - Name: " . $row["email"]. " college" . $row["college"].  " college" . $row["dob"]."<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);
}
else {
  {echo"<script>alert(wrong passworg!!!!)</script>";
  header('location: index.php')
  ;}
}
    }
      ?>

  </body>
</html>
