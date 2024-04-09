<?php
$host = 'localhost';
$pass ='';
$user ='root';
$database = 'labvision';
$sqlconnect = mysqli_connect($host , $user , $pass ,$database);

if(mysqli_connect_error()){
    echo 'error';
}else{
}
?>