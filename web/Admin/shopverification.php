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
	$up="update tbl_shop set   shop_vstatus=1 where shop_id='".$_GET["sid"]."'";
	 $Conn->query($up);
}
if(isset($_GET["rid"]))
{
$up="update tbl_shop set shop_vstatus=2 where shop_id='".$_GET["sid"]."'";
$Conn->query($up);
}
?>
<table width="700" height="39" border="1" align="center">
<tr>
 <th>SLNO</th>
 <th>NAME</th>
 <th>ADDRESS</th>
 <th>Contact</th>
 <th>Email</th>
 <th>District</th>
 <th>place</th>
 <th>Photo</th>
 <th>Proof</th>
 <th>Licence</th>
 <th>Action</th>
 </tr>
<?php
$i=0;
  $selqry="select * from tbl_shop s inner join tbl_place p on s.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where shop_vstatus=0";
  $row=$Conn->query($selqry);
  while($data=$row-> fetch_assoc())
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
      <td><img src="../Assets/Files/Photo/<?php echo $data["shop_photo"]?>"width="150"height="150"/></td>
      <td><a href="../Assets/Files/<?php echo $data["shop_proof"]?>" download>download</a></td>
      <td><?php echo $data["shop_licence"]?></td>
      <td><a href="shopverification.php?sid=<?php echo $data["shop_id"] ?>">Accept</a></td>
      <td><a href="shopverification.php?rid=<?php echo $data["shop_id"]?>">Reject</a></td>
    
      <?php
	  
  }
  ?>
      

     
	 
	 
   </tr>
  </table>
</form>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>