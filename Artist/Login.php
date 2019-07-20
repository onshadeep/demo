<?php
if(isset($_POST['Login']))
{error_reporting(1);
	$link = mysqli_connect("localhost", "root", "", "finaltest") or die($link);

	$user=$_POST['username'];
	$pass=$_POST['psw'];

	$que1=mysqli_query($link, "SELECT * FROM users WHERE username='$user' and password='$pass'");
	$count1=mysqli_num_rows($que1);

	if($count1>0)
	{
		session_start();
		$_SESSION['agorauser']=$user;
		$que6=mysqli_query($link, "SELECT * FROM users WHERE email='$user'");
		$rec6=mysqli_fetch_array($que6);
		$userid=$rec6[0];

		$que2=mysqli_query($link, "SELECT * FROM user_profile_pic WHERE user_id=$userid");
		$count2=mysqli_num_rows($que2);

		if($count2>0)
		{
			$que3=mysqli_query($link, "SELECT * FROM user_secret_quotes WHERE user_id=$userid");
			$count3=mysqli_num_rows($que3);
			if($count3>0)
			{
				$que4=mysqli_query($link, "SELECT * FROM user_secret_quotes WHERE user_id=$userid");

				while($rec=mysqli_fetch_array($que4))
				{
					$que2=$rec[3];
					$ans2=$rec[4];
				}
				if($que2=="" && $ans2=="")
				{
					header("location:agora_files/agora_step/agora_step3/Secret_Question2.php");
				}
				else
				{

					session_start();
					$_SESSION['aguser']=$user;
					$query1=mysqli_query($link, "SELECT * FROM users WHERE email='$user'");
					$rec1=mysqli_fetch_array($query1);
					$userid=$rec1[0];
					mysqli_query($link,  "UPDATE user_status SET status='Online' WHERE user_id='$userid'");
					header("location:Artist/Artist_profile.php");
				}

			}
			else
			{
				header("location:agora_files/agora_step/agora_step2/Secret_Question1.php");
			}
		}
		else
		{
			while($rec=mysqli_fetch_array($que1))
			{
				$Gender=$rec[4];
			}
			if($Gender=="Male")
			{
				header("location:agora_files/agora_step/agora_step1/Step1_Male.php");
			}
			elseif($Gender=="Female")
			{
				header("location:agora_files/agora_step/agora_step1/Step1_Female.php");
			}
			else
			{
				header("location:agora_files/agora_step/agora_step1/Step1_Other.php");
			}

		}
	}
	else
	{
		$que5=mysqli_query($link, "SELECT * FROM users WHERE email='$user'");
		$count5=mysqli_num_rows($que5);

		if($count5>0)
		{
			header("location:Invalid_Password.php");
		}
		else
		{
			header("location:Invalid_Username.php");
		}
	}
}
?>
