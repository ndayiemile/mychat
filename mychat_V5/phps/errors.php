<?php 
$placeholder_sinup = "placeholder ='Enter user name'";
$placeholder_login_username = "placeholder ='Enter user name'";
if(count($errors)>0){
    $borderColor_sinup = "border-color:indianred;outline-color:indianred";
    $placeholder_sinup = "placeholder ='user name exists choose another one'";
    $borderColor_login = "border-color:indianred !important;outline-color:indianred !important";
    $placeholder_login_username = "placeholder ='Not matching password'";
}
?>