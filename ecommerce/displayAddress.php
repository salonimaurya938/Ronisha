<?php
   include 'conn.php';
   $id=$_POST['id'];
   $sql="SELECT * FROM `ecommerce_address` where `id`='$id'";
   $query=mysqli_query($conn,$sql);
   //$json_array= array();
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