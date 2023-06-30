<?php
include 'conn.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$pincode = $_POST['pincode'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city=$_POST['city'];
$company = $_POST['company'];
$mob=$_POST['mob'];
$user_id= $_POST['user_id'];

$sql="INSERT INTO `ecommerce_address`(`id`, `firstName`, `lastName`, `pincode`, `address1`, `address2`, `city`, `company`, `phoneNumber`, `user_id`) 
VALUES ('','$first_name','$last_name','$pincode','$address1','$address2','$city','$company','$mob','$user_id')";
$query=mysqli_query($conn,$sql);
if($query)
{
$data['msg']="Registration Successfull!";
 echo json_encode($data);
}else{
 $data['code'] = 202;
 $data['msg'] = "Invalid Credential!";
 echo json_encode($data);
}

?>