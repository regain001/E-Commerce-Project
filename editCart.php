
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
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  -->
<style>
* {
.mains {
  float: center;
  width: 60%;
  overflow: hidden;
 padding: 10px 10px 10px 10px;
  margin:25%;
}
.menu {
  float: left;
  width: 22%;
  /*background-color:#9FA9AB;*/
  margin-left: 2px;

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
<script>
function clickDelete(e) {
	sl=e.name;
	alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			var m=document.getElementById("cart_msg");//
			//header("Location:editCart.php");
			m.innerHTML=xmlhttp.responseText;
			//document.getElementById("spinner").style.visibility="hidden";
			//alert(xmlhttp.responseText);
			
		}
	};
 	
 	var url="ItemDelete.php?sl_no="+sl;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}



function clickUpdate(e) {
	sl=e.name;
	qn=e.value;
	alert(sl);
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {			
			var m=document.getElementById("cart_msg");
			m.innerHTML=xmlhttp.responseText;
			//document.getElementById("spinner").style.visibility="hidden";
			//alert(xmlhttp.responseText);
		}
	};
 	
 	var url="ItemDelete.php?sl_no="+sl+"&qty="+qn;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
</script>
</head>

<body style="font-family:Verdana;">

  
  <nav class="navbar navbar-inverse">

  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	   <a class="navbar-brand" href="home1.php" ><span class="glyphicon glyphicon-phone"></span> BD Electronics
	   </a>  
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
	  
      <ul class="nav navbar-nav nav-pills navbar">
	  <li style=""><a   href="home1.php" ><span class="glyphicon glyphicon-home"></a></li>
        
       
		
		
	  <li ><div >
        <form class="navbar-form " role="search">
      <div class="input-group">
          <input type="text" style="height:37px; min-width:250px; display:inline-block" class="form-control"  placeholder="Search" name="srch" id="srch">
        <div class="input-group-btn">
            <button class="btn btn-primary" style="height:37px;" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
      </div>
    </form>

     </div></li>
	</div>

</nav>




  <p><br/></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
					<div class="row">
							<div class="col-md-2 " style="color:#1672DA; float:center;"><b>Action</b></div>
							<div class="col-md-3 " style="color:#1672DA; float:center;"><b>Image</b></div>
							<div class="col-md-3 " style="color:#1672DA; float:center;"><b>Name</b></div>
							<div class="col-md-2" style="color:#1672DA; float:center;"><b>Quantity</b></div>
							<div class="col-md-2 " style="color:#1672DA; float:center;"><b>Price(Tk)</b></div>
						</div>
						</br>
	<?php
	require("db_rw.php");

	
	$query="SELECT a.p_title,a.p_img,a.p_price,b.sl_no,b.qty,b.p_id FROM products a,cart b WHERE a.p_id=b.p_id";
	
	$jsn=getJSONFromDB($query);
	$jd=json_decode($jsn);
	
	$p=0;
	foreach($jd as $v){
	
		$title=$v->p_title;
		$img=$v->p_img;
		$price=$v->p_price;
		$SL_No=$v->sl_no;
		$quantity=$v->qty;
		$productID=$v->p_id;
		$totalPrice=$quantity*$price;
		$p+=$totalPrice;
		echo "

		<div class='row'>
				<form action='test.php' name='myfm' method='post'>
				<div class='col-md-2 '>
				<button type='button' class='btn btn-danger btn-sm' name='n_$SL_No' onclick='clickDelete(this)'><b><span class='glyphicon glyphicon-trash'></span></b></button>
				<!--<button type='submit' class='btn btn-info btn-sm' name='' ><b><span class='glyphicon glyphicon-ok'></span></b></button>-->
				</div>
				<div class='col-md-3 '><img src='$img' style='width:70px; height:70px;'></div>
				<div class='col-md-3 '><button type='button' class='btn '  disabled><b>$title</b></button></div>
				<div class='col-md-2'><input type='text' class='form-control' name='qty_$SL_No' onkeyup='clickUpdate(this)' value='$quantity'></div>
				<div class='col-md-2 '><button type='button' class='btn' disabled><b>$price</b></button></div>
			</div></from></br>";

		
		
	}
	
	 echo "<div class='row'> <h3 style='float:right'><b> Total ".$p." Tk </b></h3></div>";	
	 echo "<div  class='row'><button type='button' class='btn btn-info  btn-lg' style='float:right' ><b><a href='checkOut.php'>Cash On Delivery</a></b></button></div>";
	?>
					
						
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>

</html>
<?php  
ob_flush();
?>