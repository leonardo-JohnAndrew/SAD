<?php 
session_start();
include_once('./header.php')?>

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
       #clear{
         background: linear-gradient(90deg, #4376A3 0%, #192C3D 100%);
         width: 85px;
         height: 30px;
         top: 910px;
         gap: 0px;
         border-radius: 25px 0px 0px 25px;
         opacity:0px;
         color:white;
       }
       #create{
         background: linear-gradient(90deg, #4376A3 0%, #192C3D 100%);
         width: 85px;
         height: 30px;
         top: 910px;
         gap: 0px;
         border-radius: 0px 25px 25px 0px;
         opacity:0px;
         color:white;
       }
    </style>
</head>
<body>
   <form action="action.php"  method="post">
   <div class="container-fluid">
    <div class="col mt-3 ms-3 me-5 text-secondary">
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
      <p class="fs-4 fw-lighter">Create Users  
         <button style="margin-left:92%; " class=" btn_add">
         <img src="plus.svg" style="color: white;" >ADD
      </button></p>
      <div style="background-color:lightgray; padding: 30px; width: 100%; height:50%">
         <div class="row"> 
            <div class="col">
             <p6>Firstname</p6>
            </div>
            <div class="col">
             <p class="fs-6">Middle</p>
            </div>
            <div class="col">
             <p class="fs-6">Lastname</p>
            </div>
            <div class="col">
             <p class="fs-6">Username</p>
            </div>
            <div class="col">
             <p class="fs-6">Email</p>
            </div>
            <div class="col">
             <p class="fs-6">Unique ID</p>
            </div>
            <div class="col">
             <p class="fs-6">Password</p>
            </div>
            <div class="col">
             <p class="fs-6">Type</p>
            </div>
             <div id = "register">
            <div class="row align-items mb-3">
             <div class="col">
              <input type="text" name= "firstname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
             <input type="text" name= "middle[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
             <input type="text" name= "lastname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
             <input type="text" name= "username[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
             <input type="text" name= "email[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
             <input type="text" name= "id[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
             <input type="text" name= "password[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
             <div class="col">
              <select  class="form-select form-select-sm" aria-label=".form-select-lg example" name = 'type[]'>
               <option selected>Select Type:</option>
               <option value="Student">Student</option>
               <option value="Faculty">Faculty</option>
               <option value="Admin">Admin</option>
             </select>
            </div>
             </div>
             </div>
          </div>
      </div>
      <div class = "btn-group" style="margin-top:3% ;margin-left:87%">
       <input  class = " clear" type="submit" name = "clear" value="CLEAR" id="clear">
       <input type="submit" name = "create" value = "CREATE" id = "create"> 
      </div>
    </div>
   </div>
   <?php include_once("./footer.php")?>
 <?php  require('./function.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</form>
</body>
</html>