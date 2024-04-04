<?php 
session_start();
require("./database.php");
if(isset($_POST['create'])){
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

    $query="INSERT INTO create_users VALUES('$firstname','$middle' ,'$lastname','$username','$email','$id','$password','$type')";
    $sqlquery = mysqli_query($sqlconnect , $query);
    if ($sqlquery){
      $body = 
    'Date:'.$date.'

    
Good Day, Maam/Sir: '.$lastname.'!
     
Attached here are the credentials of your DYCI
LabVISION Account. Please change the password
once you open the accounts in first time.
              
LabVISION username: '.$username.'
Password: '.$password.'

Please be guided accordingly,
Thank you.

Regards,
LVS Team
';
    $url = "https://script.google.com/macros/s/AKfycbxD8fq3r2I8tFT9NFbkIq75LyjjabcHOhmT5NSndo84t2aZR4SVyisekVqyMkcpkI4jRA/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $email,
                  "subject"   =>'User Credential',
                  "body"      => $body,
                  "from"       => 'labvision81@gmail.com'
               ])
            ]);
            $result = curl_exec($ch);
        $_SESSION['status'] = "Create Accounts Successfull!";
        header('location: createaccount.php');
    } else
       echo ('Failed Create');
}
}
?>
