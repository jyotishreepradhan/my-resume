<?php
$email =$_POST['email'];
$pwd =$_POST['password'];

if($email=="jyoti@gmail.com" && $pwd=="jyoti"){
    echo"<script>alert('login sucessfull')</script>";
}else{
    echo"<script>alert('login unsucessfull')</script>";
}



?>