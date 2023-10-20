<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
  <?php
  ob_start();
include("Head.php");
$cat="";
$id="";
if(isset($_POST["btn_save"]))
{
	$CID=$_POST["txt_hid"];
	$Category=$_POST["txt_Category"];
	if($CID!="")
	{
		 $up="update tbl_category set category_name='".$Category."' where category_id='".$CID."'";
		$Conn->query($up);
		header("location:Category.php");
		
	}
	else
	{
		
	$insQry="insert into tbl_Category(Category_name)values('".$Category."')";
	if($Conn->query($insQry))
	{
		?>
  <script>
		alert("Data inserted!!");
		window.location="Category.php";
		</script>
  <?php
	}
	else
	{
		?>
        <script>
		alert("Data not inserted!!");
		window.location="Category.php";
		</script>
         <?php
	}
	}
}
if(isset($_GET["cid"]))
{
	$delQry="delete from tbl_category where category_id='".$_GET["cid"]."'";
	if($Conn->query($delQry))
	{
		header("location:Category.php");
	}
}

if(isset($_GET["did"]))
{
	
	$sel="select * from tbl_category where category_id='".$_GET["did"]."'";
	$res=$Conn->query($sel);
	if($data1=$res->fetch_assoc())
	{
		$id=$data1["Category_id"];
		$cat=$data1["Category_name"];
		
	}
}
?>
<body>


<form id="form1" name="form1" method="post" action="">
    <table width="200" border="0" align="center">
    <tr>
      <td>Category</td>
      <td><label for="txt_Category"></label>
        <input type="text" name=" txt_Category" id=" txt_Category" value="<?php echo $cat?>"/>
        <input type="hidden" name="txt_hid" value="<?php echo $id?>" />      		
        </td>
    </tr>
    <tr>
  	<td colspan="2" align="center"><input name ="btn_save" type="submit" value="Save" />
    <input type="reset" name="btn_cancel" value="cancel"/></td>
        
    </tr>
  </table>
  <br /><br />
  <table width="200" border="1" align="center">
    <tr>
      <th>Sl no:</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
   
    <?php
	    $i=0;
		$selQry="select* from tbl_Category";
		$row=$Conn->query($selQry);
		while($data=$row->fetch_assoc())
		{
			$i++;
	?>
    <tr>
      <td><?php echo $i?> </td>
      <td><?php echo $data["Category_name"]?> </td>
      <td><a href="Category.php?cid=<?php echo $data["Category_id"]?>">Delete</a>//<a href="Category.php?did=<?php echo $data["Category_id"]?>">Edit</a></td>
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

