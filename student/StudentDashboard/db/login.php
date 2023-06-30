<?php
include 'conn.php';
session_start();    
$emailMob = $_POST['emailmob'];
$password = $_POST['password'];
if(preg_match('/^[0-9]{10}+$/', $emailMob)) {
    $sql = "SELECT * FROM `student_login` where `mob`='$emailMob' and `password`='$password'";
  }    
  elseif(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $emailMob)) {
    $sql = "SELECT * FROM `student_login` where `email`='$emailMob' and `password`='$password'";
  } else{
    echo "Invalid Credential!";
  }    
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)>0)
 {
$row=mysqli_fetch_assoc($query);
$_SESSION['id']=$row['id'];
$_SESSION['email']=$row['email'];
$_SESSION['mob']=$row['mob'];
$_SESSION['studentName']= $row['studentName'];
$_SESSION['class']=$row['class'];
$_SESSION['dob']=$row['dob'];
$_SESSION['bloodGroup']=$row['bloodGroup'];
$_SESSION['weight']=$row['weight'];
$_SESSION['height']=$row['height'];
$_SESSION['homeAddress']=$row['homeAddress'];

echo "<script>window.location.href='../studentdashBoard.php'</script>";
}
else
{
  echo "<script>alert('Username or  Password Incorrect!');window.location.href='../login.html'</script>";
}

?>