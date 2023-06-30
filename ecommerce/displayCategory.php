<?php
   include 'conn.php';
   $sql="SELECT * FROM `category`";
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