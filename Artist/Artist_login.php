<?php
	include("Login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="Agora42, 42, aGora42, agoRa42, Architech agora42, artist agora42, agora42 company, agora42 art, agOra42">
  <link rel="shortcut icon" href="../img/output-onlinepngtools.png">

  <title>Agora42 | Login</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />


</head>

<body background="../img/View3_EXT_NorthEast_mediumimage.jpg" class="login-img3-body">

  <div class="container">

    <form class="login-form"  mathod="post" style="margin-top: 90px;">
      <div class="login-wrap">
        <p class="login-img"><img src="../img/login-avatar.jpg" alt="Login-profile"></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="Password" required>
        </div>
        <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me" required> Remember me
                <span class="pull-right"> </span>
            </label> -->
         
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="Login" value="Log In" id="login_button" style="margin-top: 15px;"><strong style="color: white;">Login</strong></button>
        <hr>
        <p >or</p>
        <hr>
        
        <p ><a href=""><img src="../img/facebook-icon.png" alt="facebook-icon">&nbsp&nbspLogin with facebook</a></p>      
        <p ><a href="../Forgot-password.html">Forgot Password?</a></p>   
        <span class="btn btn-primary btn-lg btn-block" type="submit"><a href="../Signup.html" ><strong style="color: white;">Sign Up</strong></a></span>
        <p >Go<a href="../home-feed/Home.html"><strong>&nbsp&nbspHome</strong></a></p>
      </div>
    </form>
   
      
      
  </div>

  <script src="../js/validation.js"></script>
</body>

</html>
