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
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST["btn_submit"]))
{
	$sid=$_GET["sid"];
	$rate=$_POST["sel_rate"];
	$qty=$_POST["txt_qty"];
	$amnt=$_POST["txt_amount"];
	$date=$_POST["txt_date"];
	$time=$_POST["txt_time"];
	$details=$_POST["txt_details"];
  $cat=$_POST["sel_cat"];

$ins="insert into tbl_request(shop_id,category_id,request_details,request_date,request_scheduledate,request_scheduletime,user_id,request_qty,request_amount,scrap_rate) values('".$sid."','".$cat."','".$details."',curdate(),'".$date."','".$time."','".$_SESSION['uid']."','".$qty."','".$amnt."','".$rate."')";
$Conn->query($ins);
header("location:UserHome.php");
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Category</td>
      <td><label for="select"></label>
        <select name="sel_cat" id="select" onchange="getRate(this.value)">
        <option>Select</option>
        <?php
		$selQry="select * from tbl_category ";
		$data=$Conn->query($selQry);
		while($row=$data->fetch_assoc())
		{
		?>
		<option value="<?php echo $row["Category_id"]  ?>"><?php echo $row["Category_name"] ?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><label for="txt_rate"></label>
     <input type="text" name="sel_rate" id="txt_rate"  readonly>
  </td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><label for="txt_qty"></label>
      <input type="text" name="txt_qty" id="txt_qty" min="0" value="0" onkeyup="getAmnt()"/></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><label for="txt_amount"></label>
      <input type="text" name="txt_amount" id="txt_amount" /></td>
    </tr>
    <tr>
      <td>Pickup Date</td>
      <td><label for="txt_date"></label>
      <input type="date" name="txt_date" id="txt_date" /></td>
    </tr>
    <tr>
      <td>Pickup Time</td>
      <td><label for="txt_time"></label>
      <input type="time" name="txt_time" id="txt_time" /></td>
    </tr>
    <tr>
      <td>Details</td>
      <td><label for="txt_details"></label>
      <textarea name="txt_details" id="txt_details" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btn_submit" value="submit" /><input type="reset" name="btn_cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>

<script src="../Assets/Jquery/jQuery.js"></script>
<script>
function getRate(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxRate.php?pid="+did,
		success: function(html){
			$("#txt_rate").val(html);
		}
	});
}function getAmnt()
{
  var rate=document.getElementById("txt_rate").value;
  var qty=document.getElementById("txt_qty").value;
  var amnt= rate * qty;
  document.getElementById("txt_amount").value=amnt.toFixed(2);
  return amnt;

}
</script>
<script>
    // Get the current date
    const currentDate = new Date().toISOString().split('T')[0];

    // Get the date input element
    const dateInput = document.getElementById('txt_date');

    // Set the minimum date to the current date
    dateInput.min = currentDate;
  </script>
  <?php

include("Foot.php");
ob_flush();
?>
</html>