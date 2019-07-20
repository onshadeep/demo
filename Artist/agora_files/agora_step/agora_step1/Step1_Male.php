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
		if($Gender=="Male")
		{
			$que2=mysqli_query($link, "SELECT * FROM user_profile_pic WHERE user_id=$userid");
			$count1=mysqli_num_rows($que2);
			if($count1==0)
			{


	if(isset($_POST['file']) && ($_POST['file']=='Upload'))
	{
		
		$path1 = "../../../artist_users/Male/".$user."/achievement/";
		$path2 = "../../../artist_users/Male/".$user."/final_image/";
		$path3 = "../../../artist_users/Male/".$user."/image/";
		$path4 = "../../../artist_users/Male/".$user."/profile/";
		$path5 = "../../../artist_users/Male/".$user."/Post/";
		$path6 = "../../../artist_users/Male/".$user."/resume/";
		$path7 = "../../../artist_users/Male/".$user."/thumbnails/";

		mkdir($path1, 0, true);
		mkdir($path2, 0, true);
		mkdir($path3, 0, true);
		mkdir($path4, 0, true);
		mkdir($path5, 0, true);
		mkdir($path6, 0, true);
		mkdir($path7, 0, true);

		$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$img_name;
    	move_uploaded_file($img_tmp_name,"../../../artist_users/Male/".$user."/profile/".$prod_img_path);
		
		mysqli_query($link, "INSERT INTO user_profile_pic(user_id,image) VALUES('$userid','$img_name')");
		header("location:../agora_step2/Secret_Question1.php");
	} 
?>
<html>
<head>
	<title> Step1 </title>
	<link href="step1_css/step1.css" rel="stylesheet" type="text/css">
    <link href="../../agora_font/font.css" rel="stylesheet" type="text/css">
	<script src="step1_js/Image_check.js" language="javascript">
	</script>
</head>
<body>

<div style="position:absolute;left:35%;top:25%; height:10%; width:7%; z-index:-1; background:#999999;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute;left:45%;top:25%; height:10%; width:7%; z-index:-1; background:#339900;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute;left:55%;top:25%; height:10%; width:7%; z-index:-1; background:#999999;box-shadow:0px 0px 10px 1px rgb(0,0,0);">   </div>
<div style="position:absolute; left:36%; top:25%;"> <h2> Step 1 </h2> </div>
<div style="position:absolute; left:46%; top:25%;"> <h2> Step 2 </h2> </div>
<div style="position:absolute; left:56%; top:25%;"> <h2> Step 3 </h2> </div>


<div style="position:absolute; left:35%; top:40%;"> <h3> Upload Your Profile Picture </h3> </div>
<div style=" position:absolute; left:16%; top:80%;">
<meter style="height:10; width:1000;" value="10" min="0" max="100"></meter>
</div>
<div style="position:absolute; left:35%; top:50%;">
<img src="step1_images/Male.jpg" style=" height:60; width:60;"/> 
</div>

<div style="position:absolute; left:39%; top:50%;"> 
	<table>
		<tr>
			<td></td> <td>&nbsp;  </td> <td style="text-transform:capitalize"> <h4><?php echo $row['FullName']; ?></h4></td>
		</tr>
	</table> 
</div>

<form method="post" enctype="multipart/form-data" name="uimg" onSubmit="return Img_check();">
	<div style="position:absolute; left:40%; top:65%;">	
		<input type="file" name="file" id="img"/>  
	</div>
	<div style="position:absolute; left:57.5%; top:64.8%; " id="upload">	
		<input type="submit" value="Upload" name="file" id="upload_button"/>	
	</div>
</form>
	<?php
		include("step1_erorr/step1_erorr.php");
	?>
</body>
</html>
<?php
			}
			else
			{
				header("location:../agora_step2/Secret_Question1.php");
				exit();
			}
		
		}
		elseif($Gender=="Female")
		{
			header("location:../agora_step1/Step1_Female.php");
			exit();
		}
		elseif($Gender=="Other"){
			header("location:../agora_step1/Step1_Other.php");
			exit();
		}
	}
	else
	{
		header("location:../../../Artist_Registration.php");
		exit();
	}
?>