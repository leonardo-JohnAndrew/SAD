<?php 
session_start();
require('./database.php');
include_once('./header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
       button{
         border:none;
         outline:none;
         font-size: 20px;
         font:bolder;
         color:black;
         background-color: lightgrey;
       }
       #update{
        background: linear-gradient(90deg, #4376A3 0%, #192C3D 100%);
         width: 100px;
         height: 30px;
         top: 910px;
         gap: 0px;
         border-radius: 25px 25px 25px 25px;
         opacity:0px;
         color:white;
       }
       .scroll{
        overflow-y: scroll;
        max-height:360px;
       }
    </style>
</head>
<body>
   <form action="./update.php id =<?php echo $id; ?>"  method="post">
   <div class="container-fluid">
    <div class="col mt-3 ms-3 me-5 mb-5 text-secondary">
         <?php 
              if(isset($_SESSION['status'])){
                ?>
                 <div class="alert alert-primary alert-dismissible fade show "  role="alert">
                   <strong>STATUS: </strong> <?php echo $_SESSION['status']  ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                <?php
                      unset($_SESSION['status']);
              }
            ?>
      <p class="fs-4 fw-lighter">Manage Users
      </p>
      <div class = "position-static"style="background-color:lightgray; padding: 30px; width: 100%; height:60%">
       <div class="row"> 
            <div class="col ms-3 position-sticky">
             <p6>Firstname</p6>
            </div>
            <div class="col me-1 position-sticky">
             <p class="fs-6">Middle</p>
            </div>
            <div class="col me-1 position-sticky ">
             <p class="fs-6">Lastname</p>
            </div>
            <div class="col me-1 position-sticky">
             <p class="fs-6">Username</p>
            </div>
            <div class="col me-1 postion-sticky">
             <p class="fs-6">Email</p>
            </div>
            <div class="col me-1 postion-sticky">
             <p class="fs-6">Unique ID</p>
            </div>
            <div class="col me-1 postion-sticky">
             <p class="fs-6">Password</p>
            </div>
            <div class="col me-1 postion-sticky">
             <p class="fs-6">Type</p>
            </div>
            <div class="col me-1 postion-sticky">
             <p class="fs-6">Delete</p>
            </div>
          <div  class = "scroll" style="max-height:320px;" >
        <?php
         $sqlaccounts ='SELECT * FROM create_users';
         $result = $sqlconnect->query($sqlaccounts);
         if(!$result){
             echo"error select";
         }
         while($rows = $result->fetch_assoc()){
        ?>
            <div class="row align-items mb-3 ">
             <div class="col me-1 ">
              <input type="text" name= "firstname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $rows['first_name']?>"> 
            </div>
            <div class="col">
             <input type="text" name= "middle[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $rows['middle_name']?>"> 
            </div>
            <div class="col">
             <input type="text" name= "lastname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $rows['last_name']?>"> 
            </div>
            <div class="col">
             <input type="text" name= "username[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $rows['user_name']?>"> 
            </div>
            <div class="col">
             <input type="text" name= "email[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"value="<?php echo $rows['email_address']?>"> 
            </div>
            <div class="col">
             <input type="text" name= "id[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $rows['unique_id']?>"> 
            </div>
            <div class="col">
             <input type="text" name= "password[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $rows['password']?>"> 
            </div>
             <div class="col">
              <select  class="form-select form-select-sm" aria-label=".form-select-lg example" name = 'type[]' >
               <option selected><?php echo $rows['type']?></option>
               <option value="Student">Student</option>
               <option value="Faculty">Faculty</option>
               <option value="Admin">Admin</option>
             </select>
              </div>
              <div class = "col">
                 <a class="ms-4" href="update.php?id=<?php echo $rows['unique_id'];?>"><img src="../sad/pic/x-square-fill.svg" width="35px"  ></a>
                  <!-- <img src="../sad/pic/x-square-fill.svg" width="35px"  > -->
               </div>
             </div>
         <?php  }?>   
          </div>
         </div> 
      </div>
     
    </div>
   </div>
   <div style="margin-top:3% ;margin-left:87%">
   <input type="submit" name = "update" value = "UPDATE ALL" id = "update"> 
   </div>
   <?php include_once("./footer.php")?>
 <?php  require('./function.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</form>
</body>
</html>