<?php

include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
    $sql = "SELECT * FROM `registration` where `email`='$email' and `password`='$password'";
  } else{
    $data['code'] = 202;
    $data['msg'] = 'Invalid Credential!';
    echo json_encode($data);
  }    
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0)
 {
$row=mysqli_fetch_assoc($query);

if($row){
  $data= $row;
  echo json_encode($data);
}else{
  $data['code'] = 202;
  $data['msg'] = 'Invalid Credential!';
  echo json_encode($data);
 }
 }
else
{
  $data['code'] = 202;
  $data['msg'] = 'Invalid Credential!';
  echo json_encode($data);
}


?>
