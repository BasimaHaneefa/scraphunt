<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login form </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="../Assets/Templates/Login/style.css">

</head>
<body>
<?php
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST["btn_save"]))
{
	$Email=$_POST['txt_email'];
	$Password=$_POST['txt_password'];
	
	$selA = "select * from tbl_admin where admin_email='".$Email."' and admin_password='".$Password."'";
	$rowA = $Conn->query($selA);
	
	$selU = "select * from tbl_user where user_email='".$Email."' and user_password='".$Password."'";
	$rowU = $Conn->query($selU);
	
	$selS="select * from tbl_shop where shop_email='".$Email."' and shop_password='".$Password."' and shop_vstatus=1";
	$rowS=$Conn->query($selS);
	
	
	if($dataU=$rowU->fetch_assoc())
	{
		$_SESSION["uid"]=$dataU["user_id"];
		$_SESSION["uname"]=$dataU["user_name"];
		$_SESSION["pid"]=$dataU["place_id"];
		header("Location:../User/UserHome.php");	
	}
	else if($dataS=$rowS->fetch_assoc())
	{
		$_SESSION["sid"]=$dataS["shop_id"];
		$_SESSION["sname"]=$dataS["shop_name"];
		header("Location:../Shop/HomePage.php");
		
	}
	else if($dataA=$rowA->fetch_assoc())
	{
		$_SESSION["aid"]=$dataA["admin_id"];
		$_SESSION["aname"]=$dataA["admin_name"];
		header("Location:../Admin/Homepage.php");
		
	}
	else
	{
		?>
        <script>
		alert("Invalid Credentials!!");
		window.location="Login.php";
		</script>
        <?php
		
	}
}
?>
	
    

<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Login</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login to your account</h2>
    <form action="" id="formvalidate" method="post">
      <div class="input-group">
        <label class="palceholder" for="userName"></label>
        <input class="form-control" name="txt_email"  id="userName" type="email" placeholder="Email" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword"></label>
        <input class="form-control" name="txt_password" id="userPassword" type="password" placeholder="Password" />
        <span class="lighting"></span>
      </div>

      <button type="submit" name="btn_save" id="login">Login</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
       
      </div>
    </form>
  </div>
  
</div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</body>
</html>
