<?php
//access restriction before login berdasarkan session nya
session_start();
if($_SESSION['status_login']==FALSE){
    header("location:form-login.php");
}else{
    echo "Welcome, silakan laporkan keluhan anda";
}
?>