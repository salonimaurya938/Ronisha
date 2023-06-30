<?php
include 'conn.php';

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$rePassword = $_POST['rePassword'];
date_default_timezone_set('Asia/Kolkata');
$currentTime = date('d-m-Y H:i A',time());
$datas='';

$sql1="SELECT * FROM `registration` WHERE `email`='$email' and `mobile`='$mobile'";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0){
echo "your are Already Registred!";
}else{
    if($password===$rePassword){
        $sql="INSERT INTO `registration`(`id`, `name`, `mobile`, `email`, `dob`, `gender`, `password`, `profile`, `currentDate`) VALUES ('','$username','$mobile','$email','$datas','$datas','$password','$datas','$currentTime')";
        $query=mysqli_query($conn, $sql);
        if($query)
        {
        $data['msg']="Registration Successfull!";
         echo json_encode($data);
        }else{
         $data['code'] = 202;
         $data['msg'] = "Invalid Credential!";
         echo json_encode($data);
         }
    }
}



?>