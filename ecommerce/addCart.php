<?php
include 'conn.php';

$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$size = $_POST['size'];
$price = $_POST['price'];

$sql="INSERT INTO `addcart`(`id`, `user_id`, `product_id`, `quantity`, `size`, `price`) VALUES ('','$user_id','$product_id','$quantity','$size','$price')";
$query=mysqli_query($conn, $sql);
if($query)
{
$data['msg']="Product Add Successfull!";
 echo json_encode($data);
}else{
 $data['code'] = 202;
 $data['msg'] = "Invalid Credential!";
 echo json_encode($data);
 }

?>