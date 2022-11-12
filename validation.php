<?php
 session_start();
 $conn=mysqli_connect('localhost','root','');
 mysqli_select_db($conn,'storyseek');
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$a=$_POST['email'];
$b=$_POST['password'];
 $s="select * from signup where email='$a' and password='$b'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['email']=$email;
   header('location:index.php');
}
else{
  header('register.php');
}}
?>