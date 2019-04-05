<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php        //require('db1.php');
        //session_start();

        if (isset($_POST['uname'])){

            //echo "<pre>";print_r($GLOBALS);echo "</pre>";
      $auth=array();
	  include("login_lib.php");
		loadArray();
		print_r($auth);
		$u=$_REQUEST['uname'];
		$p=$_REQUEST['pass'];
		//echo $u;

if(isset($auth[$u]) && $auth[$u]==$p){
	echo "Hello ".$u;
	header("Location:home1.php"); //redirecting to target page
}
else{ 
                   $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
                   $script =  "<script> $(document).ready(function(){ $('#login-modal').modal('show'); }); </script>";
         

        }
    ?>

    

    <li class="active">  <a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                    <div class="loginmodal-container">
                        <h1>Login</h1><br>
                        <?php if(isset($error_msg)){ echo $error_msg; } ?>
                      <form action="" method="post" name="login">
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" name="submit" class="login loginmodal-submit" value="Login">
                      </form>
                    </div>
                </div>
              </div>

    <?php if(isset($script)){ echo $script; } ?>
	</body>
</html>