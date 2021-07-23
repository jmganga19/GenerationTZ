<?php
 session_start();
 
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'dumila_youth');
 $Fname = $_POST['FirstName'];
 $Lname = $_POST['LastName'];
 $Email =$_POST['email'];
 $Contact =$_POST['phone'];
 $pass=$_POST['pswd'];
 $s = "select * from registration where email = '$Email' && password='$pass'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
if($num == 1){
    header('location:userAccount.php');
}else{
    echo"Login failed,provide correct info";
    header('location:login.php');
}

?>