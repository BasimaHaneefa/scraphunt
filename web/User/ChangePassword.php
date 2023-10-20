<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
ob_start();
include("Head.php");

if(isset($_POST["btn_submit"]))
{
$cp=$_POST["txtcp"];
$np=$_POST["txtnp"];
$conp=$_POST["txtcon"];


$selqry="select * from tbl_user where user_id='".$_SESSION['uid']."'";
$row=$Conn->query($selqry);
$data=$row->fetch_assoc();

$password=$data["user_password"];


if($cp==$password)
{
		if($np==$conp)
		{
			$update="update tbl_user set user_password='".$np."' where user_id='".$_SESSION["uid"]."'";
			if($Conn->query($update))
			{
				 ?>
          <script>
		  alert("Password Updated");
		  window.location="ChangePassword.php";
		  </script>
          <?php
				
			}
			else{
				?>
          <script>
		  alert("Failed to update");
		  window.location="ChangePassword.php";
		  </script>
          <?php
				
			}
			
		}
		else
		{
			 ?>
          <script>
		  alert("Password mismatch");
		  window.location="ChangePassword.php";
		  </script>
          <?php
		
		}
}
else
{
 ?>
          <script>
		  alert("Incorrect Password");
		  window.location="ChangePassword.php";
		  </script>
          <?php	
	
}

}
?>
<h3 align="center">Change Password</h3>
<form method="post">
<table width="200" border="0" align="center">
  <tr>
    <td>Current Password</td>
    <td>
      <label for="txtcp"></label>
      <input type="text" name="txtcp" id="txtcp" />
   </td>
  </tr>
  <tr>
    <td>New Password</td>
    <td><label for="txtnp"></label>
      <input type="text" name="txtnp" id="txtnp" /></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><label for="txtcon"></label>
      <input type="text" name="txtcon" id="txtcon" /></td>
  </tr>
  <tr>
   
    <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Save" />
      <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" /></td>
  </tr>
</table>
</form>
</body>
<br>
<?php

include("Foot.php");
ob_flush();
?>
</html>