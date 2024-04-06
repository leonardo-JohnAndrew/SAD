
<?php 
session_start();
require("./database.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query ="DELETE from `create_users` where `unique_id` = '$id' ";
    $sqlquery = mysqli_query($sqlconnect , $query);
    if ($sqlquery){
        $_SESSION['status'] ="Delete Successful!";
        header('location: manage.php');
    } else
       echo ('Failed Update');
}
if(isset($_POST['update'])){
   $date = date("Y-m-d");
 for($i = 0; $i<count($_POST['firstname']);$i++){
    $firstname = $_POST['firstname'][$i];
    $middle = $_POST['middle'][$i];
    $lastname= $_POST['lastname'][$i];
    $username = $_POST['username'][$i];
    $email = $_POST['email'][$i];
    $id = $_POST['id'][$i];
    $password = $_POST['password'][$i];
    $type = $_POST['type'][$i];

    $query="UPDATE create_users SET first_name = '$firstname',middle_name = '$middle', last_name ='$lastname', user_name = '$username',email_address ='$email', unique_id = '$id',password='$password',type = '$type' WHERE unique_id = $id;";
    $sqlquery = mysqli_query($sqlconnect , $query);
    if ($sqlquery){
        $_SESSION['status'] ="Update Successfull!";
        header('location: manage.php');
    } else
       echo ('Failed Update');
}
}
    
?>
