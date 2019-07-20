<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['agorauser']))
	{
		$link = mysqli_connect("localhost", "root", "", "finaltest") or die($link);
		$user=$_SESSION['agorauser'];
		$que1=mysqli_query($link, "SELECT * FROM users WHERE email='$user'");
		$row=mysqli_fetch_array($que1);
		$userid=$row['user_id'];
        $Gender=$row['Gender'];
		$que2=mysqli_query($link, "SELECT * FROM user_secret_quotes WHERE user_id=$userid");
		$count1=mysqli_num_rows($que2);
		if($count1==0)
		{
		
			$que3=mysqli_query($link, "SELECT * FROM user_profile_pic WHERE user_id=$userid");
			$count3=mysqli_num_rows($que3);
			if($count3>0)
			{
?>
<?php
	if(isset($_POST['Next']))
	{
		$que1=$_POST['que'];
		$ans1=$_POST['ans'];

		mysqli_query($link, "INSERT INTO user_secret_quotes(user_id,Question1,Answer1) VALUES('$userid','$que1','$ans1')");
		header("location:../agora_step3/Secret_Question2.php");
	}
?>
<html>
<head>
	<title> Step2 </title>

	<link href="step2_css/step2.css" rel="stylesheet" type="text/css">
    <link href="../../agora_font/font.css" rel="stylesheet" type="text/css">
	<script src="step2_js/que_check.js" language="javascript">
	</script>
</head>

<body>

<div style="position:absolute;left:35%;top:25%; height:10%; width:7%; z-index:-1; background:#999999;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute;left:45%;top:25%; height:10%; width:7%; z-index:-1; background:#339900;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute;left:55%;top:25%; height:10%; width:7%; z-index:-1; background:#999999;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute; left:36%; top:25%;"> <h2> Step 1 </h2> </div>
<div style="position:absolute; left:46%; top:25%;"> <h2> Step 2 </h2> </div>
<div style="position:absolute; left:56%; top:25%;"> <h2> Step 3 </h2> </div>

<form method="post" name="sq" onSubmit="return check()">

<div style="position:absolute; left:33.5%; top:43%;"> <h3> Secret Question 1: </h3> </div>

<div style="position:absolute; left:45%; top:45%;">
<select name="que" style="height:38;font-size:18px;padding:3;">
		<option value="select one">select one</option>
		<option value="what is the first name of your favorite uncle?">what is the first name of your favorite uncle?</option>
		<option value="where did you meet you spouse?">where did you meet you spouse?</option>
		<option value="what is your oldest cousins name?">what is your oldest cousin's name?</option>
		<option value="what is your youngest childs nickname?">what is your youngest child's nickname?</option>
		<option value="what is your oldest childs nickname?">what is your oldest child's nickname?</option>
		<option value="what is the first name of your oldest niece?">what is the first name of your oldest niece?</option>
		<option value="what is the first name of your oldest nephew?">what is the first name of your oldest nephew?</option>
		<option value="what is the first name of your favorite aunt?">what is the first name of your favorite aunt?</option>
		<option value="where did you spend you honeymoon?">where did you spend you honeymoon?</option>
</select>
</div>

<div style="position:absolute; left:35.8%; top:52.7%;"> <h3> Your Answer:  </h3> </div>
<div style="position:absolute; left:45%; top:55%;">  <input type="text" name="ans" / style="height:35; width:350; font-size:18px;" maxlength="50">   </div>

<div style="position:absolute; left:45%; top:67%;"> <input type="submit" name="Next" value="Next" id="Next_button" > </div>

</form>

<div style=" position:absolute; left:16%; top:42%;"> <img src="img/waiting.gif"> </div>

<?php
		include("step2_erorr/step2_erorr.php");
?>
</body>
</html>
<?php
			}
			else
			{
				if($gender=="Male")
				{
					header("location:../agora_step1/Step1_Male.php");
				}
				elseif($gender=="Female")
				{
					header("location:../agora_step1/Step1_Female.php");
				}
				else{
					header("location:../agora_step1/Step1_Other.php");
				}
			}
		}
		else
		{
			header("location:../agora_step3/Secret_Question2.php");
		}
	}
	else
	{
		header("location:../../../Artist_Registration.php");
	}
?>