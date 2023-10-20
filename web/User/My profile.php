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
$selqry="select * from tbl_user where user_id='".$_SESSION['uid']."'";
$row=$Conn->query($selqry);
$data=$row->fetch_assoc();

?>
<form>
<table>
<tr>
  <h3 align="center">My Profile</h3>
 <table width="200" border="0" align="center">
 <tr>
<td colspan="2" align="center"> <img src="../Assets/Files/Photo/<?php echo $data["user_photo"]?>" width="150"height="150"/></td>
 </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $data["user_name"]?>
    </td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><?php echo $data["user_contact"]?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $data["user_email"]?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $data["user_address"]?></td>
   </tr>
   <td colspan="2" align="center"><a href="Editprofile.php" style="color:blue">Edit</a>||<a href="ChangePassword.php" style="color:blue">Change Password</a> </td>
   <tr>
     </table>

</body>
<br>
<?php
include("Foot.php");
ob_flush();
?>
</html>