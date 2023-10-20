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
if(isset($_GET["sid"]))
{
$up="update tbl_shop set shop_vstatus=2 where shop_id='".
$_GET["sid"]."'";
$Conn->query($up);
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <th>SL.no</th>
      <th>Name</th>
      <th>Address</th>
      <th>Contact</th>
      <th>Email</th>
      <th>District</th>
      <th>Place</th>
      <th>Photo</th>
      <th>Proof</th>
      <th>LicenceNumber</th>
      <th>Action</th>
</tr>
<?php
$i=0;
$selqry="select * from tbl_shop s inner join tbl_place p on s.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where shop_vstatus=1 ";
$row=$Conn->query($selqry);
while($data=$row->fetch_assoc())
{      
 $i++;
 ?>    
 <tr>
 <td><?php echo $i?></td>	 
 <td><?php echo $data["shop_name"]?></td>
 <td><?php echo $data["shop_address"]?></td>
 <td><?php echo $data["shop_contact"]?></td>
 <td><?php echo $data["shop_email"]?></td>
 <td><?php echo $data["district_name"]?></td>
 <td><?php echo $data["place_name"]?></td>
 <td><img src="../Assets/Files/photo/<?php echo $data["shop_photo"]?>"width="150"heigth="150"/></td>
 <td><a herf="../Assets/Files/<?php echo $data["shop_proof"]?>"download>Download</a></td>
 <td><?php echo $data["shop_licence"]?></td>
 <td><a href="Shopaccepted.php?sid=<?php echo $data["shop_id"]?>">Reject</a></td>
 </tr>
 <?php
}
?>
	 

  </table>
</form>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>