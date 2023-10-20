<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scraphunt::District</title>
</head>
<body>

<?php
 ob_start();
 include("Head.php");
$dist="";
$id="";
if(isset($_POST["btn_save"]))
{
	$DID=$_POST["txt_hid"];
	$District = $_POST["txt_district"];
	if($DID!="")
	{
		$up="update tbl_district set district_name='".$District."' where district_id='".$DID."'";
		$Conn->query($up);
		header("location:District.php");
	}
	else
	
	{		
	
	$insQry = "insert into tbl_district(district_name)values('".$District."')";
	if($Conn->query($insQry))
	{
		?>
        <scrpit>
		alert("Data inserted!!");
		window.location="District.php";
		</script>
        <?php	
	}
	
    }
}
if(isset($_GET["did"]))
{
	$delQry = "delete from tbl_district where district_id='".$_GET["did"]."'";	
	if($Conn->query($delQry))
	{
		header("Location:District.php");	
	}
}

$id = "";
$dist = "";
if(isset($_GET["sid"]))
{
	$sel="select * from tbl_district where district_id='".$_GET["sid"]."'";
	$res=$Conn->query($sel);
	if($data=$res->fetch_assoc())
	{
		$id=$data["district_id"];
		$dist=$data["district_name"];
	}
}
?> 
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0" align="center">
    <tr>
      <td>District</td>
      <td><label for="txt_district"></label>
      <input type="text" name="txt_district" id="txt_district" value="<?php echo $dist ?>" />
      <input type="hidden" name="txt_hid" value="<?php echo $id ?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="btn_save" type="submit" value="Save" />
      <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" /></td>
    </tr>
  </table>
  <br /><br />
  <table width="200" border="1" align="center">
    <tr>
      <th>SI NO.</th>
      <th>District</th>
      <th>Action</th>
    </tr>
    <?php
		$i = 0;
		$selQry = "select * from tbl_district";
		$row = $Conn->query($selQry);
		while($data=$row->fetch_assoc())
		{
			$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $data["district_name"]?></td>
      <td><a href="District.php?sid=<?php echo $data["district_id"]?>">Edit</a>||<a href="District.php?did=<?php echo $data["district_id"]?>">delete</a></td>
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
