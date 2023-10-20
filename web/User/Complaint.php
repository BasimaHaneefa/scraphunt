<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint</title>
</head>

<body>
<?php
ob_start();
include("Head.php");

if(isset($_POST["btn_save"]))
{
	
	$title=$_POST["txt_title"];
	$Connt=$_POST["txt_cont"];
	$id=$_POST["txt_id"];
	if($id!="")
	{
		$upQry = "update tbl_complaint set complaint_title='".$title."',complaint_content='".$Connt."' where complaint_id='".$id."'";
		if($Conn->query($upQry))
		{
			header("Location:Complaint.php");
		}
	}
	else
	{
	$insQry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,user_id)values('".$title."','".$Connt."',curdate(),'".$_SESSION["uid"]."')";
		if($Conn -> query($insQry))
		{
			?>
			<script>
			alert("Complaint was uploaded");
			windows.location="Complaint.php";
			</script>
			<?php
		}
	}
}
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_complaint where complaint_id='".$_GET["did"]."'";
	if($Conn -> query($delqry))
	{
		header("Location:Complaint.php");
	}
}

$comid = "";
$comt = "";
$comc = "";
if(isset($_GET["eid"]))
{
	$selcom = "select * from tbl_complaint where complaint_id='".$_GET["eid"]."'";	
	$rowcom = $Conn->query($selcom);
	$datacom = $rowcom->fetch_assoc();
	
	$comid = $datacom["complaint_id"];
	$comt = $datacom["complaint_title"];
	$comc = $datacom["complaint_content"];
	
}
?>


<form id="form1" name="form1" method="post" action="">
  <table border="1" align="center">
    <tr>
      <td>Title</td>
      <td><input type="text" name="txt_title" id="txt_title"  value="<?php echo $comt ?>"/>
          <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $comid ?>" /></td>
    </tr>
    <tr>
      <td>Content</td>
      <td><textarea name="txt_cont" id="txt_cont" cols="20" rows="5"><?php echo $comc?></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" value="Save" /><input type="reset" name="btn_cancel" value="Cancel" /></td>
    </tr>
  </table>
  <br /><br />
<table width="200" border="1" align="center">
  <tr>
    <td>SI NO.</td>
    <td>Title</td>
    <td>Content</td>
    <td>Date</td>
    <td>Reply</td>
    <td>Action</td>
  </tr>
  <?php
  $i = 0;
  $selQry = "select * from tbl_complaint where user_id='".$_SESSION["uid"]."'";
  $row = $Conn->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["complaint_title"]?></td>
    <td><?php echo $data["complaint_content"]?></td>
    <td><?php echo $data["complaint_date"]?></td>
    <td><?php echo $data["complaint_reply"]?></td>
    <td><a href="Complaint.php?did=<?php echo $data["complaint_id"]?>">Delete</a>||<a href="Complaint.php?eid=<?php echo $data["complaint_id"]?>">Edit</a></td>
    
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