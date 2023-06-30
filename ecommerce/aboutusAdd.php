<?php
include 'conn.php';

$discription = $_POST['discription'];

$sql="INSERT INTO `aboutus`(`id`, `discription`) VALUES ('','$discription')";
$query=mysqli_query($conn, $sql);
if($query)
{
$data['msg']="Add Discription Successfull!";
 echo json_encode($data);
}else{
 $data['code'] = 202;
 $data['msg'] = "Invalid Credential!";
 echo json_encode($data);
 }

?>