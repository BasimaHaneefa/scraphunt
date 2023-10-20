<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::View Feedback</title>
</head>

<body>
<?php 
ob_start();
include("Head.php");
?>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1" align="center">
  <tr>
    <th>SI NO.</th>
    <th>Feedback</th>
    <th>Date</th>
    <th>User</th>
  </tr>
  <?php
  $i = 0;
  $selQry = "select * from tbl_feedback f inner join tbl_user u on f.user_id=u.user_id ";
  $row = $Conn->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["feedback_content"]?></td>
    <td><?php echo $data["feedback_date"]?></td>
    <td><?php echo $data["user_name"]?></td>
    
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