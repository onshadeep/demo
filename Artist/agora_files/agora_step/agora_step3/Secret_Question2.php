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
		$que2=mysqli_query($link, "SELECT * FROM user_secret_quotes WHERE user_id=$userid");
		$row1=mysqli_fetch_array($que1);
		$q2=$row['Question2'];
		$a2=$row['Answer2'];
		if($q2=="" && $a2=="")
		{
			$que3=mysqli_query($link, "SELECT * FROM user_secret_quotes WHERE user_id=$userid");
			$count3=mysqli_num_rows($que3);
			if($count3>0)
			{
		
?>
<?php
	if(isset($_POST['Finish']))
	{
		$que2=$_POST['que'];
		$ans2=$_POST['ans'];
		
		mysqli_query($link, "UPDATE user_secret_quotes SET Question2='$que2',Answer2='$ans2' WHERE user_id=$userid");
		
		$que_user_data=mysqli_query($link, "SELECT * FROM users WHERE email='$user';");
		$user_data=mysqli_fetch_array($que_user_data);
		$userid=$user_data[0];
		$user_join_time=$user_data[6];
		mysqli_query($link, "INSERT INTO user_post(user_id,post_txt,post_time,priority) VALUES($userid,'Join Agora42','$user_join_time','Public');");
		mysqli_query($link, "INSERT INTO user_status VALUES($userid,'Online')");
		mysqli_query($link, "INSERT INTO users(user_id) VALUES($userid)");
		
		session_start();
		$_SESSION['agouser']=$user;
		header("location:../../../Artist_profile.php");
	}
?>
<html>
<head>
	<title> Step3 </title>

	<link href="step3_css/step3.css" rel="stylesheet" type="text/css">
    <link href="../../agora_font/font.css" rel="stylesheet" type="text/css">
	<script src="step3_js/que_check.js" language="javascript">
	</script>
</head>
<body>

<div style="position:absolute;left:35%;top:25%; height:10%; width:7%; z-index:-1; background:#999999;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute;left:45%;top:25%; height:10%; width:7%; z-index:-1; background:#999999;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute;left:55%;top:25%; height:10%; width:7%; z-index:-1; background:#339900;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute; left:36%; top:25%;"> <h2> Step 1 </h2> </div>
<div style="position:absolute; left:46%; top:25%;"> <h2> Step 2 </h2> </div>
<div style="position:absolute; left:56%; top:25%;"> <h2> Step 3 </h2> </div>

<form method="post" name="sq" onSubmit="return check()">

<div style="position:absolute; left:33.5%; top:43%;"> <h3> Secret Question 2: </h3> </div>

<div style="position:absolute; left:45%; top:45%;">
<select name="que" style="height:38;font-size:18px;padding:3;">
		<option value="select one">select one</option>
		<option value="what was your favorite food as a child?">what was your favorite food as a child?</option>
		<option value="what was the last name of your first boss?">what was the last name of your first boss?</option>
		<option value="what is the name of your favorite sports team?">what is the name of your favorite sports team?</option>
		<option value="what was you first pets name?">what was you first pet's name?</option>
		<option value="what is the name of your favorite book?">what is the name of your favorite book?</option>
		<option value="who is your all-time favorite movie character?">who is your all-time favorite movie character?</option>
		<option value="what was the make of your fist car?">what was the make of your fist car?</option>
		<option value="what was the make of your first motorcycle?">what was the make of your first motorcycle?</option>
		<option value="who is you favorite author?">who is you favorite author?</option>
</select>
</div>

<div style="position:absolute; left:35.8%; top:52.7%;"> <h3> Your Answer:  </h3> </div>
<div style="position:absolute; left:45%; top:55%;">  <input type="text" name="ans"  style="height:35; width:350; font-size:18px;" maxlength="50">   </div>

<div style="position:absolute; left:45%; top:67%;"> <input type="submit" name="Finish" value="Finish" id="Next_button" > </div>

</form>

<div style=" position:absolute; left:16%; top:42%;"> <img src="img/waiting.gif"> </div>
<div style=" position:absolute; left:16%; top:80%;">
<meter style="height:10; width:1000;" value="76" min="0" max="100"></meter>

<?php
		include("step3_erorr/step3_erorr.php");
?>

</body>
</html>
<?php
			}
			else
			{
				header("location:../agora_step2/Secret_Question1.php");
			}
		}
		else
		{
			header("location:../../../Artist_profile.php");
		}
	}
	else
	{
		header("location:../../../Artist_Registration.php");
	}
?>