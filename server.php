<?php
session_start();

// initializing variables
 // session_start();
 $name=$_SESSION['username'];
  $email=$_SESSION['email'];
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'Takshashila', 'GaKuSeI@2k16', 'registration_new');


if(mysqli_connect()){
echo "connected";
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $college = mysqli_real_escape_string($db, $_POST['collegename']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 //verifykey
  $vkey= md5(time().$username);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO user (username, email, password,college,year,mobile,department,vkey)
  			      VALUES('$username','$email', '$password','$college','$year','$mobile','$department','$vkey')";
    $insert=mysqli_query($db, $query);
    $_SESSION['username'] = $username;
	  $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  //   if($insert)
  //   {
  // 	$to=$email;
  //   $subject= $username. "your  Registration is Successful";
  //   $message = "www.cittakshashila.org   Open Webiste</a>";
  //   $header="From : cittakshashila.org \r\n";
  //   $headers .= "MIME-Version: 1.0" . "\r\n";
  //   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  //   mail($to,$subject,$message,$header);

  // }
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password1 = md5($password);
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$password1'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
	$row = mysqli_fetch_row($result);
	    $_SESSION['username']=$username;
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username!!!!!!!!/password combination");
  	}
  }
}
