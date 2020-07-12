<?php
	//Start session
	session_start();	
	//Array to store validation errors
	$errmsg_arr = array();	
	//Validation error flag
	$errflag = false;	
	//Connect to mysql server
	$link = mysqli_connect("localhost","root","","ejuka");
	//$link = mysqli_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_connect_error());
	}	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str,$a) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) 
		{
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($a,$str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['username'],$link);
	$password = clean($_POST['password'],$link);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
	
	$result=mysqli_query($link,$qry);
	
	//Check whether the query was successful or not
	
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['ID'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['ltype'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			if($member['ltype']=="admin")
			{
			session_write_close();
			header("location: main/index.php");
			exit();
			}
			else
			{
		    session_write_close();
			header("location: index.php");
			exit();
			}
		}else {
			//Login failed
			//header("location: index.php");
			exit();
		}
	
?>