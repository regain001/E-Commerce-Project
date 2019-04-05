
<?php
session_start();
?>
<!DOCTYPE html>
<html style="">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  -->
<style>
* {
	/*its for main,right,left class to keep those at their right position.*/
  box-sizing: border-box;
}
.menu {
  float: left;
  width: 22%;
  /*background-color:#9FA9AB;*/
  margin-left: 2px;

}
.menuitem {
  
  /*background-color:#2D69EB;*/
}
.menuitemlist {
  padding: 5px;
  margin-top: 5px;
  /*background-color: #f1f1f1;*/
}
.main {
  float: left;
  width: 76%;
  overflow: hidden;
  margin-left: 0px;
}
.submain {
  float: left;
  width: 60%;
  overflow: hidden;
  margin-left: 0px;
  margin-right: 0px;
}
.right {
/*background-color:#f1f1f1;*/
  float: left;
  width: 35%;
  margin-left: 5px;
  margin-right: 0px;
}

  .col, h4, .close {
      background-color: #2263AC;
      
      text-align: center;
      font-size: 30px;
  }
.c{
	color: red;

      text-align: center;
	  }
	  
@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 10px;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
/*these all are button*/
@media (max-width: 768px) {
  .btn {
    font-size:11px;
    padding:4px 6px;
  }
}

@media (min-width: 768px) {
  .btn {
    font-size:12px;
    padding:6px 12px;
  }
}

@media (min-width: 992px) {
  .btn {
    font-size:14px;
    padding:8px 12px;
  }
}

@media (min-width: 1200px) {
  .btn {
    padding:10px 16px;
    font-size:18px;
  }
}



</style>



<?php

$auth=array();
include("login_lib.php");
loadArray();
//$_SESSION["flag"]="2";
if(isset($_POST['uname']) && isset($_SESSION["flag"])){
	$u=$_POST['uname'];
    $p=$_POST['pass'];
	if($u=="" && $p=="") {$_SESSION["flag"]="1";}
    
	else if(isset($auth[$u]) && $auth[$u]==$p && $_SESSION["flag"]=="0"){
	echo "Hello ".$u;
	header("Location:home1.php"); //redirecting to target page
	//echo "I can't recognize you";	
}

else{
	//echo "I can't recognize you";
	//header("Location:login.php?error=incorrect auth");
	$error_msg = "<div class='c'><b>Username or password is incorrect</b></div>";
    $script =  "<script> $(document).ready(function(){ $('#logIn1').modal('open'); }); </script>";
	 //if(isset($script)){ echo $script; } 
	  $_SESSION["flag"]="1";
                    
}}
?>


<?php
if(isset($_SESSION["login"])){
	if($_SESSION["login"]=="true"){echo "complete"  ; ?>
		<script  type="text/javascript">
		$(document).ready(function(){
    $("#logIn").click(function(){
		$("#logIn1").modal-body('show');
        
    });
});
		
       
		
		</script>
<?php
      $_SESSION["login"]="false";
	}
}
?>






</head>
<body style="font-family:Verdana;">

  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	   <a class="navbar-brand" href="#" ><span class="glyphicon glyphicon-phone"></span> BD Electronics
	   </a>  
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
	
      <!--<ul class="nav navbar-nav navbar-left">
      </ul>-->
	  
      <ul class="nav navbar-nav nav-pills navbar-right">
	  <li style=""><a  data-toggle="pill" href="#home" ><span class="glyphicon glyphicon-home "></a></li>
        <li><a data-toggle="pill" href="#products"> Products</a></li>
        <li><a data-toggle="pill" href="#contact"> Contact</a></li>
		
	  <li ><div >
        <form class="navbar-form " role="search">
      <div class="input-group">
          <input type="text" style="height:37px; min-width:250px; display:inline-block" class="form-control "  placeholder="Search" name="srch" id="srch">
        <div class="input-group-btn">
            <button class="btn btn-primary" style="height:37px;" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
      </div>
    </form>

     </div></li>
	 <!--<a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-in"></span> Log in</a>-->
	 <li ><a data-toggle="pill"  id="logIn"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      <li ><a data-toggle="pill" href="#signUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		<li ><a data-toggle="pill"  id="cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
    </ul>
	  
	  </div>

</nav>

<div style="overflow:hidden" class="menu">
<div class="btn-group-vertical" class="menuitem">
	<button type="button" class="btn btn-primary "><b>Category</b></button>
    <button type="button" class="btn btn-default"> <a href="home1.php?cat=elec">Electronics</a></button>
    <button type="button" class="btn btn-default"> Electronics Gadgets</button>
    <button type="button" class="btn btn-default"> Home Appliances</button>
	<button type="button" class="btn btn-primary"><b>Brand</b></button>
    <button type="button" class="btn btn-default"> Apple</button>
    <button type="button" class="btn btn-default"> Samsung</button>
    <button type="button" class="btn btn-default"> Sony</button>
	<button type="button" class="btn btn-default"> LG</button>
    <button type="button" class="btn btn-default"> Batterfly</button>
    <button type="button" class="btn btn-default"> Nokia</button>
  </div>
  </div>

  <div class="main"> 
	<div class="tab-content ">
  <div id="home" class="tab-pane fade in active ">
     <div class="submain"> 
    <h2 style="text-align:center;color:blue;">Latest</h2>
    <p>
	We believe are in quality,not quantity!
	Choose your Best!
	As-salamu Alikum.Hope, You are well.
I am SM Mukbul Hossain from RM Course.Actually, I thought that I commited myself to do Assignment as Literature Review. But I am Struggling to choose my research field/topic for finding my actual interest.For that, I am stepped forward for answering question instead of Literature Review.Thats why, I am in Late Submission.I am really sorry to late submission for my assignment.
Ins-Allah, I will do Literature Review by mysalf at after Mid term.

regards,
Hossain,SM Mukbul
15-29764-2
	</p>
    <img src="pic1.png" style="width:30%;height:30%;">
	<img src="pic2.jpg" style="width:30%;height:30%;">
	</div>
	<div class="right">
    <h2>What?</h2>
    <p>The Pulpit Rock is a part of a mountain that looks like a pulpit.</p>
    <h2>Where?</h2>
    <p>The Pulpit Rock is in Norway.</p>
    <h2>Price?</h2>
    <p>The Walk is free!</p>
  </div>
  </div>
  <div id="products" class="tab-pane fade ">
    <h3>products</h3>
    <p>Some content in menu 1.</p>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div id="contact" class="tab-pane fade ">
    <!--<div class="card"><div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
  <img src="pic1.png" alt="John"  style="width:50%;height:50%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  
 <p><button>Contact</button></p>
</div>
<div class="card">
  <img src="pic2.jpg" alt="John" style="width:50%;height:50%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button class="btn">Contact</button></p>
</div>-->
  </div>
  

  
  
  
  
  
  <div id="signUp" class="tab-pane fade ">
    <h3>Sign Up</h3>
    <form role="form" class="form-horizontal" method="post" action="SignUp_valid.php">
  <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstname" placeholder="" value="" >
                
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastname" class="form-control" name="lastname" placeholder="" value="" > 
              </div>
            </div>
				<div class="mb-3">
				<label for="username">Username <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" name="username" placeholder="Username" >
				</div>
			
            <div class="mb-3">
              <label for="email">Email </label>
              <input type="text" class="form-control" name="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="1234 Dha Bd" >
            </div>
         <hr class="mb-6">
         <div class="row">
              <div class="col-md-4 mb-4">
                <label for="country">Country</label>
                <select class="form-control form-control-lg" name="country" >
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
				
              </div>
              <div class="col-md-4 mb-4">
                <label for="state">State</label>
                <select class="form-control form-control-lg" name="state" >
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>   
              </div>
			  
              <div class="col-md-4 mb-4" ">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip" placeholder="" >
              </div>
		</div>
		<hr class="mb-6">
		  <div class="row">
				<div class="col-md-6 mb-3">
				<label for="pass1">Password </label>
                <input type="password" class="form-control" name="pass1" placeholder="password" >
				</div>
				<div class="col-md-6 mb-3">
				<label for="pass2">password <span class="text-muted">(confirm)</span></label>
                <input type="password" class="form-control" name="pass2" placeholder="password" >
				</div>
		 </div>
         <hr class="mb-6">
         <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="same-address">
           <label class="custom-control-label" for="same-address">Shipping address is the same as my current address</label>
        </div>
        <hr class= "mb-6">
		<?php
		if(isset($_SESSION["names"]) || isset($_SESSION["emails"]) ||  isset($_SESSION["passwords"]) || isset($_SESSION["addresss"]) || isset($_SESSION["countrys"])){
		if($_SESSION["names"]=="1" ||$_SESSION["emails"]=="1" || $_SESSION["passwords"]=="1" || $_SESSION["addresss"]=="1" || 
		$_SESSION["states"]=="1" || $_SESSION["zips"]=="1" || $_SESSION["countrys"]=="1"){
			echo "<div style='margin-left:20px;float:left;color:red;'>
                  <p><b>your input is empty.Please re-enter!</b></p>
		          </div>";
				    $_SESSION["names"]="0";
				    $_SESSION["emails"]="0";
					$_SESSION["passwords"]="0";
					$_SESSION["addresss"]="0";
					$_SESSION["states"]="0";
					$_SESSION["zips"]="0";
					$_SESSION["countrys"]="0";
					}
		}
		?>
		
        <div class="form-group" style="margin-right:10px;float:right;">
          <p><button  type="submit" class="btn btn-primary btn-lg">Confirm</button></p>
		</div>

</form>
  </div>
 
  </div>
  
  
 <!-- Modal -->
  <div class="modal fade" id="logIn1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  
        <div class="modal-header col" style=" ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style=""><span  class="glyphicon glyphicon-lock"></span> Login</h4>
		   </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form"  method="post" action="login_check.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="uname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="pass" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" id="startModal" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
		<?php if(isset($_SESSION["error_msg"]) && $_SESSION["flag"]=="1"){ echo $_SESSION["error_msg"]; $_SESSION["flag"]="0";} else{$_SESSION["flag"]="0";} /*try to use session*/?>
        
          <button type="submit" class="btn btn-danger btn-default pull-left" id="closes" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a id="signup">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
  
  
   <!-- The Modal -->
   <div class="modal fade" id="myModal" >
    <div class="modal-dialog  modal-small" role="dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color:#2675C9">
         
      <div class="col-sm-3">SL No.</div>
      <div class="col-sm-3" >product Image</div>
      <div class="col-sm-3">product Name</div>
      <div class="col-sm-3">price</div> 
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
      <div class="col-sm-3" style="background-color:yellow;">1</div>
      <div class="col-sm-3" style="background-color:orange;">pic</div>
      <div class="col-sm-3" style="background-color:yellow;">Xperia-05 </div>
      <div class="col-sm-3" style="background-color:orange;">25000 Tk</div>
    </div>
    <div class="row">
      <div class="col-sm-3" style="background-color:yellow;">1</div>
      <div class="col-sm-3" style="background-color:orange;">pic</div>
      <div class="col-sm-3" style="background-color:yellow;">Xperia-05 </div>
      <div class="col-sm-3" style="background-color:orange;">25000 Tk</div>
    </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
        </div>
        
      </div>
    </div>
  </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $("#cart").click(function(){
        $("#myModal").modal();
    });
});
$(document).ready(function(){
    $("#logIn").click(function(){
        $("#logIn1").modal();
    });
});
$(document).ready(function(){
    $("#signup").click(function(){
		$("#closes").btn();
        $("#signUp").tab-pane('show');
    });
});

/*$(document).ready(function(){
    $("#startModal").click(function(){
        $("#logIn1").modal('open');
    });
});*/
</script>
<?php if(isset($script)){ echo $script; } ?>
</body>

</html>