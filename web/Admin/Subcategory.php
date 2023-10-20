<?php
  ob_start();
  include("Head.php");
 if(isset($_POST["btn_save"]))
 {
	 $cat=$_POST["category"];
	 $sub=$_POST["txt_subcategory"];
	 $insQry="insert into tbl_subcategory(category_id,subcategory_name)values('".$cat."','".$sub."')";
	// echo $insQry;
	 $Conn->query($insQry);
	 header("location:Subcategory.php");
	 
 
 }
 if(isset($_GET["pid"]))
 {
	 
	$delqry="delete from tbl_subcategory where subcategory_id='".$_GET["pid"]."'";
	$Conn->query($delqry);
	header("location:Subcategory.php"); 
	 
 }
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>	 
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0" align="center">
    <tr>
      <td>Category</td>
      <td><label for="category2"></label>
        <select name="category" id="category2">
      <option>select</option>
      <?php
	  $sel="select * from tbl_category";
	  $result=$Conn->query($sel);
	  if($result->num_rows>0)
	  {
	  while($data=$result->fetch_assoc())
	  {
		  ?>
          <option value="<?php echo $data["Category_id"]?>"><?php echo $data["Category_name"]?></option>
          <?php
	  }
	  }
	  ?>
      
      </select></td>
    </tr>
    <tr>
      <td>Subcategory</td>
      <td><label for="txt_subcategory"></label>
      <input type="text" name="txt_subcategory" id="txt_subcategory"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="btn_save" type="submit"value="save"/>
      <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel"/></td>
      
    </tr>
  </table>
  <br /></br>
  <table width="200" border="1" align="center">
    <tr>
      <th>
      Sl.no</th>
      <th>Category</th>
      <th>Subcategory</th>
      <th>Action</th>
    </tr>
    <?php
	$i=0;
	$seQ="select * from tbl_subcategory s inner join tbl_category c on c.Category_id=s.Category_id";
	$res= $Conn->query($seQ);
	while($row=$res->fetch_assoc())
	{
		$i++;
		?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row["Category_name"]?></td>
      <td><?php echo $row["subcategory_name"]?></td>
      <td><a href="Subcategory.php?pid=<?php echo $row["subcategory_id"]?>">Delete</a></td>
    </tr>
    <?php  }
?>
	  
    
    
     
    
  </table>
</form>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>