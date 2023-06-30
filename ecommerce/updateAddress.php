<?php
include 'conn.php';

$id= $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$pincode = $_POST['pincode'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city=$_POST['city'];
$company = $_POST['company'];
$mob=$_POST['mob'];
$user_id= $_POST['user_id'];

$sql="UPDATE `ecommerce_address` SET `id`='$id',`firstName`='$first_name',`lastName`='$last_name',`pincode`='$pincode',`address1`='$address1',`address2`='$address2',`city`='$city',`company`='$company',`phoneNumber`='$mob',`user_id`='2' WHERE `id`='$id'";
$query=mysqli_query($conn,$sql);
if($query)
{
$data['msg']="Update Successfull!";
 echo json_encode($data);
}else{
 $data['code'] = 202;
 $data['msg'] = "Invalid Credential!";
 echo json_encode($data);
}

?>