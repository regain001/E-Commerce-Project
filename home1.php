
<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html style="">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
.panelConfig{
  float: left;
  max-width: 32.2%;
  max-hight: 50%;
  margin-left: 5px;
  margin-top: 20px;
}
.panelConfigs{
  float: left;
  max-width: 100%;
  max-hight: 100%;
  margin-left: 8px;
  margin-right: 10px;
  margin-bottom: 20px;
  margin-top: 20px;
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



<script type="text/javascript">
function showUser() {
	var n=document.getElementById("uname").value;
	var p=document.getElementById("pass").value;
    if (n == "" && p== "") {
        alert("working");
    } else { 
            xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("msg").innerHTML = xmlhttp.responseText; 
            }
        };
        xmlhttp.open("GET","db_login.php?q="+n+"&p="+p,true);
        xmlhttp.send();
    }
}


function SignUpScript(){
	var flag=true;
	document.getElementById("sidemsg1").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";
	document.getElementById("sidemsg3").innerHTML="";
	document.getElementById("sidemsg4").innerHTML="";
	document.getElementById("sidemsg5").innerHTML="";
	document.getElementById("sidemsg6").innerHTML="";
	document.getElementById("sidemsg7").innerHTML="";
	document.getElementById("sidemsg8").innerHTML="";
	document.getElementById("sidemsg9").innerHTML="";
	document.getElementById("sidemsg10").innerHTML="";
	document.getElementById("sidemsg11").innerHTML="";
    //alert("executed!");
	var fn=document.signUpForm.firstname.value.length;
	var ln=document.signUpForm.lastname.value.length;
	var uname=document.signUpForm.username.value.length;
	//alert("red");
	var em=document.signUpForm.email.value;
	var chk=em.indexOf("@");
	var ad=document.signUpForm.address.value.length;
	var mob=document.signUpForm.mobile.value.length;
	
	var element = document.getElementById("country");
    var cn = element.options[element.selectedIndex].text;
    var element = document.getElementById("state");
    var st = element.options[element.selectedIndex].text;
    
	var zi=document.signUpForm.zip.value.length;
	var p1=document.signUpForm.pass1.value.length;
	var p2=document.signUpForm.pass2.value.length;
    var pa1=document.signUpForm.pass1.value;
	var pa2=document.signUpForm.pass2.value;
    
	if(fn==0){
		un=document.getElementById("sidemsg1");
		un.innerHTML="Please Enter your FirstName ";
		un.style.color="red";
		flag=false;
	}
	else if(ln==0){
		un=document.getElementById("sidemsg2");
		un.innerHTML="Please Enter your LastName ";
		un.style.color="red";
		flag=false;
	}
	else if(uname==0){
		un=document.getElementById("sidemsg3");
		un.innerHTML="Please Enter a valid username";
		un.style.color="red";
		flag=false;
	}
	else if(chk<1){
		un=document.getElementById("sidemsg4");
		un.innerHTML="Please Enter a valid Email";
		un.style.color="red";
		flag=false;
	}
	else if(ad==0){
		un=document.getElementById("sidemsg5");
		un.innerHTML="Please Enter your current address";
		un.style.color="red";
		flag=false;
	}
	else if(mob<11){
		un=document.getElementById("sidemsg6");
		un.innerHTML="mobile number should be atleast 11 digit";
		un.style.color="red";
		flag=false;
	}
	else if(cn =="Choose..."){
		un=document.getElementById("sidemsg7");
		un.innerHTML="Please select your Country";
		un.style.color="red";
		flag=false;
	}
	else if(st =="Choose..."){
		un=document.getElementById("sidemsg8");
		un.innerHTML="Please select your State ";
		un.style.color="red";
		flag=false;
	}
	else if(zi==0){
		un=document.getElementById("sidemsg9");
		un.innerHTML="Please select your Zipcode";
		un.style.color="red";
		flag=false;
	}
	
	
	else if( pa1!=pa2 | p1<6 | p2 <6 ){

		un=document.getElementById("sidemsg10");
		un.innerHTML="please ensure your both password should be the same & atleast 6 digits!";
		un.style.color="red";
		flag=false;
	}
	else{
		document.getElementById("sidemsgFt").innerHTML="Ok";
		
	}
	return flag;
}	


</script>




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
      <ul class="nav navbar-nav nav-pills navbar-right">
	  <li style=""><a   href="home1.php" ><span class="glyphicon glyphicon-home"></a></li>
        
       
		
		
	  <li ><div >
        <form class="navbar-form " role="search" method="post" action="home1.php">
      <div class="input-group">
          <input type="text" style="height:37px; min-width:250px; display:inline-block" class="form-control "  placeholder="Search" name="keyword" id="keyword">
        <div class="input-group-btn">
            <button class="btn btn-primary" style="height:37px;" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
      </div>
    </form>

     </div></li>
	<li ><a data-toggle="pill"  id="logIn">Log in</a></li>
      <li ><a data-toggle="pill" href="#signUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	<li ><a data-toggle="pill"  id="cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
	  <li ><a  href="logOut.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
    </ul>
	  
	  </div>
</div>
</nav>


<?php //print_r($_COOKIE); ?>
<div style="overflow:hidden" class="menu">
<div class="btn-group-vertical" class="menuitem">
	<button type="button" class="btn btn-primary "><b>Category</b></button>
    <button type="button" class="btn btn-default"><a href="home1.php?category=1"> Electronics </a></button>
    <button type="button" class="btn btn-default"><a href="home1.php?category=2"> Electronics Gadgets </a></button>
    <button type="button" class="btn btn-default"><a href="home1.php?category=3"> Home Appliances </a></button>
	<button type="button" class="btn btn-primary"><b>Brand</b></button>
    <button type="button"  onclick="" class="btn btn-default"><a href='home1.php?brand=1'> Apple </a></button>
    <button type="button" class="btn btn-default"><a href="home1.php?brand=2"> Samsung </a></button>
    <button type="button" class="btn btn-default"><a href="home1.php?brand=3"> Sony </a></button>
	<button type="button" class="btn btn-default"><a href="home1.php?brand=4"> LG </a></button>
    <button type="button" class="btn btn-default"><a href="home1.php?brand=5"> Batterfly </a></button>
    <button type="button" class="btn btn-default"><a href="home1.php?brand=6"> Nokia </a></button>
  </div>
  </div>

  <div class="main"> 
	<div class="tab-content ">
  <div id="home" class="tab-pane fade in active ">
  <div >
  <div class="panel panel-primary">
    <div class="panel-heading">products</div>
	<div class="panel-body">
	<?php
	require("db_rw.php");

	if(isset($_GET["brand"])){
		$query="select * from products where p_brand='".$_GET["brand"]."'";
		$_SESSION["show"]="brand";
		$_SESSION["showNo"]=$_GET["brand"];//get brand Number
		showMain($query);
	}
	else if(isset($_GET["category"])){
		$query="select * from products where p_cat='".$_GET["category"]."'";
		$_SESSION["show"]="category";
		$_SESSION["showNo"]=$_GET["category"]; //get category Number
		showMain($query);
	}
	else if(isset($_GET["imgDesp"])){
		$query="select * from products where p_id='".$_GET["imgDesp"]."'";
		//$_SESSION["show"]="category";
		//$_SESSION["showNo"]=$_GET["category"]; //get category Number
		showDesp($query);
	}
	else if(isset($_POST["keyword"])){
		$keyword = $_POST["keyword"];
		$query= "SELECT * FROM products WHERE p_title LIKE '%$keyword%'";
		showMain($query);
	}
	else{
		$query="select * from products where p_brand='1'";
		$_SESSION['show']="brand";
		$_SESSION["showNo"]="1";
	    showMain($query);	
	}
	
	function showMain($q){
		
		$jsn=getJSONFromDB($q);
		$jd=json_decode($jsn);
	
	foreach($jd as $v){
	
		$title=$v->p_title;
		$img=$v->p_img;
		$price=$v->p_price;
		$pro_id=$v->p_id;
		$getbrandOrCategory=$_SESSION['show'];
		$getbrandOrCategoryNo=$_SESSION["showNo"];
		echo "<div class='container panelConfig'>
				  <div class='panel panel-primary'>
					<div class='panel-heading'>$title</div>
					<div class='panel-body'><a href='home1.php?imgDesp=$pro_id'><img src='$img' style='width:160px; height:220px;'></a></div>
					 <div class='panel-footer'>Tk $price
					 <button style='float:right;' id='product'  class='btn btn-info btn-xs'>
					 <a href='cart.php?url=$getbrandOrCategory&No=$getbrandOrCategoryNo&productID=$pro_id'>AddToCart</a></button>						 
					 </div>
					</div>
			</div>";
			//url=$getbrandOrCategory&No=$getbrandOrCategoryNo :: this two are using for redirect from cart.php to home1.php 					

		
	}
	}
	
	
	
	
	function showDesp($q){
		
		$jsn=getJSONFromDB($q);
		$jd=json_decode($jsn);
		foreach($jd as $v){
	
		$title=$v->p_title;
		$img=$v->p_img;
		$price=$v->p_price;
		$pro_id=$v->p_id;
		$desp=$v->p_desp;
		}
		$ar=explode(";",$desp);
		
		echo "<div class='container panelConfigs'>
				  <div class='panel panel-primary'>
					<div class='panel-heading'>$title</div>
					<div class='panel-body'>
					<img src='$img' style='width:160px; height:220px;'></br></br></hr>";
					
			for($i=0;$i<sizeof($ar);$i++){
				echo $ar[$i]."</br>";
			}		
		echo "
					</div>
					 <div class='panel-footer'>Tk $price
					 <button style='float:right;' id='product'  class='btn btn-info btn-xs'>
					 <a href='cart.php?productID=$pro_id'>AddToCart</a></button>
											
					 </div>
					</div>
			</div>";
	}
	
	?>
 

</div>
<div class="panel-footer">@2018</div>    
 </div>
  </div>
  </div>
  
   
  <div id="signUp" class="tab-pane fade ">
 
  

    <h3>Sign Up</h3>
    <form name="signUpForm" role="form" class="form-horizontal" method="post" action="db_signUp.php">
  <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" onkeyup="SignUpScript()" id="firstname" name="firstname" placeholder="" value="" >
                <span id="sidemsg1"></span>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="lastname" class="form-control" onkeyup="SignUpScript()" id="lastname" name="lastname" placeholder="" value="" > 
                 <span id="sidemsg2"></span>
			  </div>
            </div>
				<div class="mb-3">
				<label for="username">Username <span class="text-muted"></span></label>
                <input type="text" class="form-control" onkeyup="SignUpScript()" id="username" name="username" placeholder="Username" >
				<span id="sidemsg3"></span>
				</div>
			
            <div class="mb-3">
              <label for="email">Email </label>
              <input type="text" class="form-control" onkeyup="SignUpScript()" name="email" placeholder="you@example.com">
             <span id="sidemsg4"></span>
			</div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" onkeyup="SignUpScript()" placeholder="1234 Dha Bd" >
             <span id="sidemsg5"></span>
			</div>
			<div class="mb-3">
              <label for="mobile">Telephone</label>
              <input type="text" class="form-control" name="mobile" onkeyup="SignUpScript()" placeholder="+880**********" >
             <span id="sidemsg6"></span>
			</div>
         <hr class="mb-6">
         <div class="row">
              <div class="col-md-4 mb-4">
                <label for="country">Country</label>
                <select class="form-control form-control-lg" onkeyup="SignUpScript()"id="country" name="country" >
                  <option value="">Choose...</option>
				  <option>Bangladesh</option>
                  <option>India</option>
				  <option>Pakistan</option>
                  <option>UK</option>
                </select>
				 <span id="sidemsg7"></span>
				
              </div>
              <div class="col-md-4 mb-4">
                <label for="state">State</label>
                <select class="form-control form-control-lg" onkeyup="SignUpScript()" id="state" name="state" >
                  <option value="">Choose...</option>
                  <option>Dhaka</option>
				  <option>New Delhi</option>
                  <option>Chittagong</option>
				  <option>Sylhet</option>
                  <option>Rangpur</option>
                </select> 
                 <span id="sidemsg8"></span>				
              </div>
			  
              <div class="col-md-4 mb-4" ">
                <label for="zip">Zip</label>
                <input type="text" onkeyup="SignUpScript()" class="form-control" id="zip" name="zip" placeholder="" >
				<span id="sidemsg9"></span>
              </div>
		</div>
		<hr class="mb-6">
		  <div class="row">
				<div class="col-md-6 mb-3">
				<label for="pass1">Password </label>
                <input type="password" class="form-control" onkeyup="SignUpScript()" name="pass1" placeholder="password" >
				<span id="sidemsg10"></span>
				</div>
				<div class="col-md-6 mb-3">
				<label for="pass2">password <span class="text-muted">(confirm)</span></label>
                <input type="password" class="form-control" onkeyup="SignUpScript()" name="pass2" placeholder="password" >
				<span id="sidemsg11"></span>
				</div>
		 </div>
         <hr class="mb-6">
         <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="same-address">
           <label class="custom-control-label" for="same-address">Shipping address is the same as my current address</label>
        <span id="sidemsg12"></span>
		</div>
        <hr class= "mb-6">

		
        <div class="form-group" style="margin-right:10px;float:right;">
          <p><button  type="submit" class="btn btn-primary btn-lg" onclick="return SignUpScript()">Confirm</button></p>
		  <span id="sidemsgFt"></span>
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
          <form role="form"  method="post" action="db_login.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="unames" name="unames" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
			
              <button type="submit" id="startModal" class="btn btn-primary btn-block" onclick=""><span class="glyphicon glyphicon-off"></span> Login</button>
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
     
	<?php
	
	$query="SELECT a.p_title,a.p_img,a.p_price,b.sl_no FROM products a,cart b WHERE a.p_id=b.p_id";
	
	$jsn=getJSONFromDB($query);
	$jd=json_decode($jsn);
	$SL_No=0;
	foreach($jd as $v){
	
		$title=$v->p_title;
		$img=$v->p_img;
		$price=$v->p_price;
		$SL_No+=1;
		
		echo "<div class='row'>
			  <div class='col-sm-3' style=''>$SL_No</div>
			  <div class='col-sm-3' style=''><img src='$img' style='width:70px; height:70px;'></div>
			  <div class='col-sm-3' style=''>$title </div>
			  <div class='col-sm-3' style=''>$price Tk</div>
			</div></hr>"
		;
		
	}
	
	?>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          
		  <button type="button" class="btn btn-secondary" style="float:left"><a href="editCart.php">Edit</a></button>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


</script>
</body>

</html>
<?php  
ob_flush();
?>