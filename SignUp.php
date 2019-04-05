<!doctype html>
<html style="width:100%">
<style>
.menu {
  float: left;
  width: 20%;
  /*background-color:#9FA9AB;*/
}

.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
  
}
.right {
background-color:#f1f1f1;
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-top: 7px;
}</style>
<div class="menu"></div>
<div class="main">	
<body><h5 style="text-align: center; color:blue;">Please fill up your information</h5></body>

	<form style="text-align: center"; action="myserver.php" method="post">
  First name:<br>
  <input type="text" name="firstname" value=""><br>
  Last name:<br>
  <input type="text" name="lastname" value=""><br><br>
  year:
   <select>
     <option value="day">select year</option>
	 
	 <?php for($i=1990;$i<=2018;$i++){?>
     <option value="<?php echo $i;?>"><?php echo $i;}?></option>

   </select>
   month :
   <select>
     <option value="day">select month</option>
	 
	 <?php for($i=1;$i<=12;$i++){?>
     <option value="<?php echo $i;?>"><?php echo $i;}?></option>

   </select>
   day :
   <select>
     <option value="day">select day</option>
	 
	 <?php for($i=1;$i<=31;$i++){?>
     <option value="<?php echo $i;?>"><?php echo $i;}?></option>

   </select> 
  
  </br>
  Gender:
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other <br>
  Phone:<br>
  <input type="text" name="phone" value=""><br>
  EmailID:<br>
  <input type="text" name="email" value=""><br>
  password:<br>
  <input type="password" name="pass" value=""><br>
  Confirm password:<br>
  <input type="password" name="pass1" value=""><br>
  <input type="submit" value="Submit"></br>
  
</form> 
</div>
<div class="left"></div>
    
</table> 
 
</html>