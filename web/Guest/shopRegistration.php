<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/Templates/Registration/form.css">
    <style>
        body{
            margin: 0;
        }
    </style>
</head>

<body>
<?php 
include("../Assets/Connection/Connection.php");
$sr="";
$id=" ";
if(isset($_POST["btn_save"]))
{
	$name=$_POST['txt_name'];
	$address=$_POST['txt_address'];
	$contact=$_POST['txt_contact'];
	$email=$_POST['txt_email'];
	$place=$_POST['txt_place'];
	$photo=$_FILES['txt_photo']['name'];
	$temp=$_FILES['txt_photo']['tmp_name'];
	move_uploaded_file($temp, "../Assets/Files/Photo/".$photo);
	$password=$_POST['txt_password'];
	$proof=$_FILES['txt_proof']['name'];
	$temp1=$_FILES['txt_proof']['tmp_name'];
	move_uploaded_file($temp1,"../Assets/Files/photo/".$proof);
	$Licence=$_POST['txt_licence'];
	
	 $insqry="insert into tbl_shop
	(shop_name,shop_password,place_id,shop_address,shop_email,shop_contact,shop_licence,shop_photo,shop_proof)values('".$name."','".$password."','".$place."','".$address."','".$email."','".$contact."','".$Licence."','".$photo."','".$proof."')";
	
	if($Conn->query($insqry))
	{
		?>
        <script>
		alert("Data Inserted!!");
		window.location="shopRegistration.php";
		</script>
        <?php
		
	}
	
}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <div id="background">
        <div id="tab" align="center">
            <table border="0">
                <tr>
                    <th>
                        Name
                    </th>
                    <td>
                        <input type="text" name="txt_name" id="txt_name"  required
                            title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter"
                            pattern="^[A-Z]+[a-zA-Z ]*$">
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        <input type="email" name="txt_email" id="txt_email" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        Contact
                    </th>
                    <td>
                        <input type="text" name="txt_contact" id="txt_contact" pattern="[7-9]{1}[0-9]{9}" required
                            title="Phone number with 7-9 and remaing 9 digit with 0-9">
                    </td>
                </tr>
                
                <tr>
                    <th>
                        Address
                    </th>
                    <td>
                        <textarea name="txt_address" id="txt_address3" required cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>
                        District
                    </th>
                    <td>
                    <select name="txt_district" id="txt_district" onchange="getPlace(this.value)">
                    <option>----select----</option>
                    <?php
		                $Districtqry="select *from tbl_district";
		                $res=$Conn->query($Districtqry);
		                while($row=$res->fetch_assoc())
		                  {
			?>
         <option value=<?php echo $row["district_id"];?> > <?php echo $row["district_name"]; ?></option>
         <?php
		}?>
		
      </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        Place
                    </th>
                    <td>
                    <select name="place" id="place">
        <option>----select----</option>
      
	  </select>
                    </td>
                </tr>
                <tr>
                <th>
                    Upload Photo
                </th>
                <td>
                    <input type="file" name="txt_photo" id="txt_photo" required>
                </td>
                </tr>
                <tr>
                <th>
                    Upload Proof
                </th>
                <td>
                    <input type="file" name="txt_proof" id="txt_proof" required>
                </td>
                </tr>
                <tr>
                <th>
                    Licence
                </th>
                <td>
                <input type="text" name="txt_licence" id="txt_licence"  required>
                </td>
                </tr>
                <tr>
                    <th>
                        Password
                    </th>
                    <td>
                        <input type="password" name="txt_password" id="txt_password" required type="text"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Register" name="btn_save" id="btn_save" >
                 
                        <input type="reset" value="Cancel" name="btncancel" id="btncancel">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>

</body>
<script src="../Assets/Jquery/jQuery.js"></script>
<script>
function getPlace(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxPlace.php?pid="+did,
		success: function(html){
			$("#place").html(html);
		}
	});
}
</script>
</html>