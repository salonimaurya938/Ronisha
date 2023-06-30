<?php 

include 'conn.php';

$id= $_POST['id'];
$sql="DELETE FROM `addcart` WHERE `id`='$id'";
$query=mysqli_query($conn,$sql);
 if($query)
 {
    $data['msg']="Delete Successfull!";
    echo json_encode($data);
 }
 else{
    $data['code'] = 202;
    $data['msg'] = "Invalid Credential!";
    echo json_encode($data);
 }
 ?>