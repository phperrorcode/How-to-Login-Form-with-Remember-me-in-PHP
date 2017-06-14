<?php
	include('config.php');	
	session_start();

    //expiriry time. 86400 = 1 day (86400*30 = 1 month)
    $expiry = time() + (86400 * 30);

	$email=$_POST['email'];
	$password=$_POST['password'];
    $remember = $_POST['remember'];

	$q=mysqli_query($conn,"SELECT * FROM `user` where `email`='$email' AND `password`='$password' ") or die(mysqli_error());

	$user=mysqli_fetch_array($q);
	$no=mysqli_num_rows($q);

	if($no == 1)
    {
    	if($user['email'] == $email AND $user['password'] == $password)
    	{
            if($remember == 'true'){
                //setting cookie variable
                setcookie('user_name', $email, $expiry);
                setcookie('user_pass', $password, $expiry);
            }

            $_SESSION['user']= $user['email'];
            header("location: Dashboard.php");   
     	}
     	else
     	{
     		header("location: Login.php");
     	}
    } 
   else
    {
        header("location: Login.php");	
    }
?>