<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.main {
    width: 80%;
    padding: 10px;
  }
  .submain {
  float: left;
  width: 60%;
  overflow: hidden;
  margin-left: 0px;
  margin-right: 0px;
}
.panelConfig{
  float: left;
  max-width: 32.2%;
  max-hight: 50%;
  margin-left: 5px;
  margin-top: 20px;
}
.right {
/*background-color:#f1f1f1;*/
  float: left;
  width: 35%;
  margin-left: 5px;
  margin-right: 0px;
}
</style>
</head>
<body>
<div class="main" style="float:right;">
  <h3>Entry your Product</h3>
    <form name="signUpForm" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="uploads.php">
	
       
         <div class="row">
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
		
		  <div class="row">
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
				<label for="lastName">Upload Image</label>
				<input type="file" class="" name="fileToUpload" id="fileToUpload">
				
				<span id=""></span>
				</div>
				
		 </div>
         <hr class="mb-6">
        <div class="form-group" style="margin-right:10px;float:right;">
          <p><button  type="submit" class="btn btn-primary btn-lg" onclick="return SignUpScript()">Confirm</button></p>
		  <span id="sidemsgFt"></span>
		</div>
		
  </form>
  
  
  
  <?php
  /*<div class="main">
  <div class="panel panel-success">
    <div class="panel-heading">products</div>
	<div class="panel-body">
	<?php
	require("db_rw.php");
    session_start();

	if(isset($_GET["brand"])){
	$query="select * from products where p_brand='1'";
	$jsn=getJSONFromDB($query);
	$jd=json_decode($jsn);
	
	foreach($jd as $v){
	
		$title=$v->p_title;
		$img=$v->p_img;
		$price=$v->p_price;
		 //echo $img;max-width:75%;max-height:60%;
		
		echo "<div class='container panelConfig'>
  <div class='panel panel-success'>
    <div class='panel-heading'>$title</div>
    <div class='panel-body'><img src='$img' style='width:160px; height:220px;'></div>
     <div class='panel-footer'>$price</div>
	</div>
  </div>";
		
	}}
	?>
 

</div>
<div class="panel-footer">@2018</div>    
 </div>
  </div>*/?>
 
</body>
</html>
