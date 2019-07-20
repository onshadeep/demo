<?php
if(isset($_POST['signup']))
{
error_reporting(1);
$link = mysqli_connect("localhost", "root", "", "finaltest") or die($link);
	
	$Email=$_POST['email'];
	

	$que1=mysqli_query($link, "SELECT * FROM users WHERE email='$Email'");
	$count1=mysqli_num_rows($que1);

	if($count1>0)
	{
		echo "<script>alert('E-mail already taken!'); window.location='Artist_Registration.php'</script>";
	}
	
	else
	{
		$fname=$_POST['fname'];	
		$Username=$_POST['username'];	
		$mobile=$_POST['mobile'];
		$Password=$_POST['psw'];
		$CPassword=$_POST['Cpsw'];
		$Gender=$_POST['gender'];
		$category=$_POST['usertype'];
		$Join_Date=$_POST['join_time'];
		$Birthday_Date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
		$day=intval($_POST['day']);
		$month=intval($_POST['month']);
		$year=intval($_POST['year']);
		if(checkdate($month,$day,$year))
		{
			$que2=mysqli_query($link, "INSERT INTO users(email,username,FullName,mobile,password,Cpassword,Gender,user_catgory,Birthday_Date,join_date) 
			VALUES('$Email','$Username', '$fname','$mobile','','$Password','$CPassword','$Gender','$category','$Birthday_Date','$Join_Date')");

			session_start();
			$_SESSION['agorauser']=$Email;
		
		
			if($Gender=="Male")
			{
				header("location:agora_files/agora_step/agora_step1/Step1_Male.php");
			}
			elseif($Gender=="Female")
			{
				header("location:agora_files/agora_step/agora_step1/Step1_Female.php");
			}
			else{
				header("location:agora_files/agora_step/agora_step1/Step1_Other.php");  	
			}
		}
		else
		{
			echo "<script>
				alert('The selected date is not valid.');
			</script>";
		}
	}
}
?>
