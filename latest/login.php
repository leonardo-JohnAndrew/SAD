<?php
 require('./database.php');
if(isset($_POST['login'])){
 $userna = trim($_POST['username']);
 $pass = trim($_POST['pass']);
 
 if(empty($userna)||empty($pass)){
    
}else{
    $queryval = "SELECT * From create_users where user_name = '$userna' and password = '$pass'  ";
    $sqlval = mysqli_query($sqlconnect,$queryval); 
    if(mysqli_num_rows($sqlval)>0){
      echo"<script>alert('OK MAY LOGIN NA TAYOOO!!!!!!')</script>";
      echo"<script>window.location.href = 'index.php'</script>";

    }else{
        echo"<script>alert('MALI PAKITANDAAN PO PASSWORD PLEAASEEE!!!!!!')</script>";
        echo"<script>window.location.href = 'index.php'</script>";
    }
}
}
?>