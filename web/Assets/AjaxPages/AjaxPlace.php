
<option>----select----</option>
    
<?php
include("../Connection/Connection.php");

 
     
	  $place="select *from tbl_place where district_id='".$_GET["pid"]."'";
	  $res=$Conn->query($place);
	  while($row=$res->fetch_assoc())
	  {
		  ?>
		<option value=<?php echo $row["place_id"];?> > <?php echo $row["place_name"]; ?></option>
        <?php
	  }


?>