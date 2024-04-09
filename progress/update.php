
<?php 
session_start();
require("./database.php");

if(isset($_POST['delete'])){
   $date = date("Y-m-d");
 for($i = 0; $i<count($_POST['key']);$i++){
    $key = $_POST['key'][$i];
    $query = "Delete From create_users WHERE unique_id = $key";
    $sqlquery = mysqli_query($sqlconnect,$query);
    $_SESSION['status'] = "Delete Success!";
    header('location: management.php');
}
}elseif(isset($_POST['update'])){
   $date = date("Y-m-d");
 for($i = 0; $i<count($_POST['key']);$i++){
    $key = $_POST['key'][$i];
   $fname  = $_POST['firstname_'.$key];
   $Mname  = $_POST['middle_'.$key];
   $Lname  = $_POST['lastname_'.$key];
   $Uname  = $_POST['username_'.$key];
   $email  = $_POST['email_'.$key];
   $uid  = $_POST['id_'.$key];
   $pass  = $_POST['password_'.$key];
   $type  = $_POST['type_'.$key];
   $query="UPDATE create_users SET first_name = '$fname',middle_name = '$Mname', last_name ='$Lname', user_name = '$Uname',email_address ='$email', unique_id = '$uid',password='$pass',type = '$type' WHERE unique_id = $key;";
   $sqlquery = mysqli_query($sqlconnect , $query);
   if ($sqlquery){
       $_SESSION['status'] ="Update Successfull!";
       header('location: management.php');
   } else
      echo ('Failed Update');
}
}
?>
