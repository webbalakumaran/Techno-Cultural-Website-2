

<?php
//session start
//get variables


  session_start();
 $name=$_SESSION['username'];
  $email=$_SESSION['email'];


$one = $_GET['q'];


//$one = "final";
$id=1;

$errors = array();
//session variables
//$name='Sathya';

//$email='bala';
//echo $one."hello";

$con = mysqli_connect('localhost','Takshashila','GaKuSeI@2k16','registration_new');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
echo "successfully connected";
//no replicate Email
$user_check_query = "SELECT * FROM $one WHERE  email='$email' LIMIT 1" ;
$result = mysqli_query($con, $user_check_query);

if (mysqli_num_rows($result) > 0) {
 exit("Email exits");
}

else{


// $user = mysqli_fetch_assoc($result);




// if(mysqli_errno($con)==1146)
// {
//   goto create;
// }
// echo "<script>alert($user_check_query);</script>";
// Finally, register user if there are no errors in the form
// if (!$user){
//goto variable

//$sql = "UPDATE parti SET event_name = 'vinith' WHERE eventid='".$one."'";





insertvalue:
$sql ="INSERT INTO `$one`(`event_name`,`username`, `email`) VALUES ('$one','$name','$email')";
if (mysqli_query($con, $sql)) {
    echo  "New record created successfully";
}
else
	{//create table if new
    echo "inside create ";
    echo mysqli_error($con);
	// if(mysqli_errno($con)==1146){
  //   create:
$querycreate="create table `$one`(eventid INT NOT NULL AUTO_INCREMENT,event_name varchar(50),username varchar(50),email varchar(50),PRIMARY KEY (eventid))";		if(mysqli_query($con,$querycreate)){

      echo "table created";
          goto insertvalue;
		       			   }
			else{
				echo mysqli_error($con);
			     }
					}

}
         // }
	// }
// else {
//   echo "<script>alert('Already Registered');</script>";
// }
?>
