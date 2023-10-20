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
if(isset($_POST["btn_save"]))
{	
	$dis=$_POST["district"];
	$place=$_POST["txt_place2"];
	$pin=$_POST["txt_pin"];
	$insQry="insert into tbl_place(place_name,place_pincode,district_id)values('".$place."','".$pin."','".$dis."')";
	  if($Conn->query($insQry))
	  {
		  ?>
          <script>
		  alert("data inserted");
		  window.location="Place.php";
		  </script>
          <?php
	  }
	  else
	  {
		  ?>
          <script>
		  alert("data inserted failed ");
		  window.loction="Place.php";
		  </script>
          <?php 
	  }
}
	if(isset($_GET["did"]))
	{
		$delQry="delete from tbl_place where place_id=".$_GET['did'];
		if($Conn->query($delQry))
		{	  
	    header("location:Place.php");
		}
	}
?>
<body>

<form id="form1" name="form1" method="post" action="place.php">
 
  <label for="txt_pincode"></label>
  <table width="200" border="0" align="center">
    <tr>
      <td width="112">District</td>
      <td width="72"><label for="district"></label>
        <select name="district" id="district">
        <option>---Select---</option>
        <?php
		$sel="select * from tbl_district";
		$result=$Conn->query($sel);
		while($data=$result->fetch_assoc())
		{
			?>
            <option value="<?php echo $data["district_id"];?>" >
				 <?php echo $data["district_name"]?> 
                 </option>
			<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>place</td>
      <td><label for="txt_place"></label>
        <input type="text" name="txt_place2" id="txt_place"/></td>
    </tr>
    <tr>
      <td>pincode</td>
      <td><label for ="txt_pincode"></label>
       <input type="text" name="txt_pin" id="txt_pin"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="btn_save" type="submit" value="save"/>
      <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel"/></td>
      
    </tr>
    
  </table>
  <br>
   <table width="200" border="1" align="center">
    <tr>
      <th>Sl.no</th>
      <th>District</th>
      <th>place</th>
      <th>Pincode</th>
      <th>Action</th>
    </tr>
    <?php  
	$i=0;
	$seQ="select * from tbl_place p inner join tbl_district d on d.district_id=p.district_id";
	$res=$Conn->query($seQ);
	while($row=$res->fetch_assoc())
	{
		$i++;
		?>
		<tr>
		  <td><?php echo $i; ?></td>
		  <td><?php echo $row["district_name"]?></td>
		  <td><?php echo $row["place_name"] ?></td>
		  <td><?php echo $row["place_pincode"]?></td>
		  <td> <a href ="Place.php?did= <?php echo $row['place_id']?>">Delete</a></td> 
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