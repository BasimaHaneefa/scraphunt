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

if(isset($_POST['btn_submit']))
{
	
$name=$_POST['txt_name'];
$email=$_POST['txt_email'];
$contact=$_POST['txt_con'];
$address=$_POST['txt_address'];

$update="update tbl_shop set shop_name='".$name."', shop_email='".$email."', shop_contact='".$contact."', shop_address='".$address."' where shop_id='".$_SESSION["sid"]."' ";
$Conn->query($update);
header("location:Editprofile.php");	
	
	
}


$selqry="select * from tbl_shop where shop_id='".$_SESSION['sid']."'";
$row=$Conn->query($selqry);
$data=$row->fetch_assoc();

?>
<h3 align="center">Edit Profile</h3>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" value="<?php echo $data["shop_name"] ?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" value="<?php echo $data["shop_email"] ?>"/></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_con"></label>
      <input type="text" name="txt_con" id="txt_con"  value="<?php echo $data["shop_contact"] ?>"/></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txt_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5"><?php echo $data["shop_address"] ?></textarea></td>
    </tr>
    <tr>
     
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" /></td>
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