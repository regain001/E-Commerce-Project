
<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html style="">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

function clickDelete(e) {
	sl=e.name;
	//alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			var m=document.getElementById("cart_msg");//
			m.innerHTML=xmlhttp.responseText;
			
		}
	};
 	
 	var url="productDU.php?sl_no="+sl;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}



function UpdateQty(e) {
	sl=e.name;
	qn=e.value;
	//alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {			
			var m=document.getElementById("cart_msg");
			m.innerHTML=xmlhttp.responseText;
		}
	};
 	
 	var url="productDU.php?sl_no="+sl+"&quantity="+qn;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
}
function UpdateTitle(e) {
	sl=e.name;
	qn=e.value;
	//alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {			
			var m=document.getElementById("cart_msg");
			m.innerHTML=xmlhttp.responseText;
		}
	};
 	
 	var url="productDU.php?sl_no="+sl+"&title="+qn;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
function UpdateDesp(e) {
	sl=e.name;
	qn=e.value;
	//alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {			
			var m=document.getElementById("cart_msg");
			m.innerHTML=xmlhttp.responseText;
		}
	};
 	
 	var url="productDU.php?sl_no="+sl+"&desp="+qn;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
function UpdatePrice(e) {
	sl=e.name;
	qn=e.value;
	//alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {			
			var m=document.getElementById("cart_msg");
			m.innerHTML=xmlhttp.responseText;
		}
	};
 	
 	var url="productDU.php?sl_no="+sl+"&price="+qn;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
function clickImg(e) {
	e.style.display='none';
	showUploadFile=e.name;
	showUploadFile="d_"+showUploadFile;//alert(showUploadFile);
	document.getElementById(showUploadFile).style.display='inline';
	
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
	   <ul>
	   <a class="navbar-brand" href="#" ><span class="glyphicon glyphicon-text-background"></span> Admin Panal</a> 
	    </ul>
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
	
	  
      <ul class="nav navbar-nav nav-pills navbar-right">
	  <a  class="navbar-brand" style=""  href="home1.php" ><span class="glyphicon glyphicon-home "></span></a>
	  <li ><a data-toggle="pill"  href="#entryProduct"><span class="glyphicon glyphicon-shopping-cart"></span> Product Entry</a></li>
	  <li ><a data-toggle="pill"  href="#details"><span class="glyphicon glyphicon-th-list"></span> Details</a></li>
	  <li ><a href="logOut.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
	   </ul>
	  </div>
</div>
</nav>




  <div> 
	<div class="tab-content" >
  <div id="entryProduct" class="tab-pane fade in active"  style="float:center;margin-left: 10%;margin-top: 5%;margin-right: 10%;">
  
  <h3 style="text-align: center;">Entry your Product</h3>
    <form name="signUpForm" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="uploads.php">
	
       
         <div class="row" style="text-align: center;">
              <div class="col-md-6 mb-3">
                <label for="category">Category</label>
                <select class="form-control form-control-lg" onkeyup="" id="category" name="category" >
                  <option value="">Choose...</option>
                  <option value="1">Electronics</option>
				  <option value="2">Electronics Gadgets</option>
				  <option value="3">Home Appliances</option>
                </select>
				 <span id=""></span>
				
              </div>
              <div class="col-md-6 mb-3">
                <label for="brand">Brand</label>
                <select class="form-control form-control-lg" onkeyup="" id="brand" name="brand" >
                  <option value="">Choose...</option>
                  <option value="1">Apple</option>
				  <option value="2">Samsung</option>
				  <option value="3">Sony</option>
				  <option value="4">LG</option>
				  <option value="5">Butterfly</option>
				  <option value="6">Nokia</option>
				  <option value="7">Samphony</option>
                </select> 
                 <span id=""></span>				
              </div>
		</div>
		<hr class="mb-6">
		
		  <div class="row"  style="text-align: center;">
              <div class="col-md-6 mb-3">
                <label for="category">Model</label>
                <input type="text" class="form-control" onkeyup="" id="title" name="title" placeholder="" value="" >
                <span id="sidemsg1"></span>
              </div>
              <div class="col-md-6 mb-3">
                <label for="price">Price </label>
                <input type="text" class="form-control" onkeyup="" name="price" placeholder="" >
                 <span id="sidemsg2"></span>
			  </div>
            </div>
			
		 <hr class="mb-6">
		  <div class="row">
		      <div class="col-md-6 mb-3">
                <label for="price">Quantity </label>
                <input type="text" class="form-control" onkeyup="" name="qty" placeholder="" >
                 <span id="sidemsg2"></span>
			  </div>
				<div class="col-md-6 mb-3">
					<label style="float:center;">Upload Image</label></br>
					<input style="float:center;" type="file" class="" name="fileToUpload" id="fileToUpload">
					<span id=""></span>
				</div>
				
		 </div>
		 <hr class="mb-6">
		  <div class="row">
		      <div class="col-mb-6 ">
					<label for="price">Description <span class="text-muted">[kindly split by semi-colon(;) one after another]</span> </label>
					<textarea class="form-control" onkeyup="" name="desp" rows="5" ></textarea>
					<span id="sidemsg2"></span>
			  </div>	
		 </div>
         <hr class="mb-6">
        <div class="form-group" style="margin-right:10px;float:right;">
          <p><button  type="submit" class="btn btn-primary btn-lg" onclick="">Confirm</button></p>
		  <span id="sidemsgFt"></span>
		</div>
		
  </form>
  </div> 
  
<div id="details" class="tab-pane fade">
   <div class="container-fluid">
   		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Product details</div>
					<div class="panel-body">
					<div class="row">
							<div class="col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0" style="color:#1672DA; float:center;"><b>Action</b></div>
							<div class="col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0" style="color:#1672DA; float:center;"><b>Image</b></div>
							<div class="col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0" style="color:#1672DA; float:center;"><b>Name</b></div>
							<div class="col-sm-5 col-sm-offset-2 col-md-3 col-md-offset-0" style="color:#1672DA; float:center;"><b>Description</b></div>
							<div class="col-sm-5 col-sm-offset-2 col-md-1 col-md-offset-0" style="color:#1672DA; float:center;"><b>Quantity</b></div>
							<div class="col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0" style="color:#1672DA; float:center;"><b>Price(Tk)</b></div>
						</div>
						</br>
	<?php
	require("db_rw.php");

	
	$query="SELECT * FROM products";
	
	$jsn=getJSONFromDB($query);
	$jd=json_decode($jsn);
	$count=0;
	foreach($jd as $v){
	
		$title=$v->p_title;
		$img=$v->p_img;
		$price=$v->p_price;
		$p_id=$v->p_id;
		$quantity=$v->p_qty;
		$desp=$v->p_desp;
		$count=$count+1;
		echo "
		<div class='row'>
		 
	      <form  enctype='multipart/form-data' method='post' action='editPhoto.php'>
				<div class='col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0'>
				<button type='button' class='btn btn-danger btn-sm' name='n_$p_id' onclick='clickDelete(this)'><b><span class='glyphicon glyphicon-trash'></span></b></button>
			
				<button type='submit' class='btn btn-info btn-sm' name='' ><b><span class='	glyphicon glyphicon-upload'></span></b></button>
				</div>
			
				<div class='col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0'>
				<img onclick='clickImg(this)' name='img$count' src='$img' style='width:70px; height:70px;visibility:visible;'>
				<span id='d_img$count' style='display:none;'>
				<label name='labelUpload$count' id='l_img$count'>Upload Image</label></br>
				<input style='width:95px; height:70px' type='file'  name='img_$p_id' id='img_$count'>
				</span>
				<input style='display:none;' type='text'  name='text_$p_id'  value='$p_id'>
				</div>
			</form>
				<div class='col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0'><input type='text' class='form-control' name='title_$p_id' onkeyup='UpdateTitle(this)' value='$title'></div>
				<div class='col-sm-5 col-sm-offset-2 col-md-3 col-md-offset-0'><textarea type='text' class='form-control' name='desp_$p_id' onkeyup='UpdateDesp(this)' rows='5' value='$desp'>$desp</textarea></div>
				<div class='col-sm-5 col-sm-offset-2 col-md-1 col-md-offset-0'><input type='text' class='form-control' name='qty_$p_id' onkeyup='UpdateQty(this)' value='$quantity'></div>
				<div class='col-sm-5 col-sm-offset-2 col-md-2 col-md-offset-0'><input type='text' class='form-control' name='price_$p_id' onkeyup='UpdatePrice(this)' value='$price'></div>
				
			</div></br>";	
	}
	
	?>
									
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-lg-2"></div>
   
  </div>  
 </div>
  
</div>

</body>

</html>
<?php  
ob_flush();
?>