<?php
 session_start();
 header('location:login.php');
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'dumila_youth');
 $Fname = $_POST['FirstName'];
 $Lname = $_POST['LastName'];
 $Email =$_POST['email'];
 $Contact =$_POST['phone'];
 $pass=$_POST['pswd'];
 $s = "select * from registration where email = '$Email'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
if($num == 1){
    echo" Email is already taken";
}else{
    $reg= " insert into registration(email,password,firstname,lastname,contact) values ('$Email','$pass','$Fname','$Lname','$Contact')";
  mysqli_query($con,$reg);
  echo"Registration Successfully";
}

?>