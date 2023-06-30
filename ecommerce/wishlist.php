<?php
   include 'conn.php';

   $user_id=$_POST['user_id'];

   $sql="SELECT * FROM `wishlist` where `uesr_id`='$user_id'";
   $query=mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($query)){   
   if($row){       
   $data= $row; 
   echo json_encode($data);
   }else{
    $data['code'] = 202;
    $data['msg'] = 'Invalid Credential.';
    echo json_encode($data);
   }
}  
?>