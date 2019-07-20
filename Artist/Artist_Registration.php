<?php
	include("agora_files/agora_index_file/agora_SignUp_file/SignUp.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="Agora42, 42, aGora42, agoRa42, Architech agora42, artist agora42, agora42 company, agora42 art, agOra42">
  <link rel="shortcut icon" href="../img/output-onlinepngtools.png">

  <title>Agora42 | Sign Up</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <link href="../css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />  
  <link rel="stylesheet" type="text/css" href="../css/intlTelInput.css">
  <link rel="stylesheet" type="text/css" href="../css/phonepicker.css">
  <script src="../js/jquery-1.12.4.min.js" ></script> 
  <script src="../js/intlTelInput.js"></script> 
  <script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.join_time.value=time;
	}
</script>


</head>

<body background="../img/View3_EXT_NorthEast_mediumimage.jpg" class="login-img3-body">

  

  <div class="container" >

    <form class="login-form" name="Reg" method="post" onSubmit="return check();" style="margin-top: 30px; ">
      <div class="login-wrap">
        <p class="login-img"><img src="../img/normal_arch.jpg" alt="user-plus"></p>
        <div class="input-group">
              <span class="input-group-addon">Artist</i></span>
              <input type="hidden" class="form-control"  name="usertype" value="Artist">
            </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          <input type="text" class="form-control" pattern="^[a-zA-Z ]{3,30}$" name="fname" title="Must contain 3 to 30 word of your name" placeholder="Full Name" autofocus required>
        </div>
       
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control"  name="username" placeholder="Username" autofocus required>
            </div>
      
          
          <form>
                 <input id="mobile-number" type="tel" name="mobile" placeholder="Mobile Number" autofocus required>
                 <script src="../js/phonepicker.js"></script> 
          </form>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          <input type="email"  class="form-control" name="email" placeholder="Mail" autofocus required>
        </div>
     
        

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" id="confirm_psw" name="Cpsw" placeholder="Confirm Password" autofocus required>
        </div>

        <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select type="text" class="form-control" name="gender" autofocus required>
              <option value="Select Sex:"> Gender.. </option>
			        <option value="Female"> Female </option>
			        <option value="Male"> Male </option>
              <option value="Other"> Not to say </option>
              </select>
            </div>

          

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>              
              <select name="month" class="form-control" type="text" autofocus required>
                 <option value="Month:"> Month: </option>
                  <script type="text/javascript">
                    var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                    for(i=1;i<=m.length-1;i++)
                    {
                     document.write("<option value='"+i+"'>" + m[i] + "</option>");
                    }
                  </script>
              </select>
            </div>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>              
              <select name="day" class="form-control" type="text" autofocus required>
                  <option value="Day:"> Day: </option>
                  <script type="text/javascript">
                     for(i=1;i<=31;i++)
                     {
                      document.write("<option value='"+i+"'>" + i + "</option>");
                     }
                 </script>

              </select>
            </div>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>              
              <select name="year" class="form-control" type="text" autofocus required>
                  <option value="Year:"> Year: </option>
                  <script type="text/javascript">
                    for(i=1996;i>=1960;i--)
                    {
                    document.write("<option value='"+i+"'>" + i + "</option>");
                    }
                  </script>
              </select>
            </div>

        <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me" required> Forgot Password
                <span class="pull-right"> </span>
            </label> -->
        <input type="hidden" name="join_time">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()" style="margin-top: 15px;"><strong style="color: white;">Sign Up</strong></button>
        <p>By clicking on Sign Up , you agree to the <a href="">Privacy Policy</a>&nbsp&nbspand <a href="">Terms and condition.</a></p>
        <hr>
        <p >or</p>
        <hr>
        
        <p ><a href=""><img src="../img/facebook-icon.png" alt="facebook-icon">&nbsp&nbspLogin with facebook</a></p>   
        <p >Have an account?<a href="Artist_login.html"><strong>&nbsp&nbspLog in</strong></a></p>     
        
        <p >Go<a href="../Home.html"><strong>&nbsp&nbsp Home</strong></a></p>
      </div>
    </form>
   
      
      
  </div>
  <script src="../js/validation.js"></script>
  <script src="../js/jquery.js"></script>
  <!-- jquery ui -->
  <script src="../js/form-component.js"></script>
  


</body>

</html>
