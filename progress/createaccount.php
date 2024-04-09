<?php 
require('./database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
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
       .scroll{
        overflow-y: scroll;
        max-height:360px;
        
       }
    
    </style>
</head>
<body style="width:fit-content">
   <form action="action.php"  method="post">
   <div class="container-fluid">
    <div class="col mt-3 ms-3 me-5 mb-5 text-secondary" style="width: 100%;">
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
      <p class="fs-4 fw-lighter" style="font-style: italic ;">Create Users <button style="margin-left:92%; " class=" btn_add">
         <img src="plus.svg" style="color: white;" >ADD
      </button>
       </p>
      <div class = "position-static"style="background-color:lightgray; padding: 30px; width: 100%; height:60%">
       <div class="row"> 
            <div class="col ms-3 position-sticky" >
             <p6>Firstname</p6>
            </div>
            <div class="col me-1 position-sticky"  >
             <p class="fs-6">Middle</p>
            </div>
            <div class="col me-1 position-sticky" >
             <p class="fs-6">Lastname</p>
            </div>
            <div class="col me-1 position-sticky" >
             <p class="fs-6">Username</p>
            </div>
            <div class="col me-1 postion-sticky" >
             <p class="fs-6">Email</p>
            </div>
            <div class="col me-1 postion-sticky" >
             <p class="fs-6">Unique ID</p>
            </div>
            <div class="col me-1 postion-sticky" >
             <p class="fs-6">Password</p>
            </div>
            <div class="col me-1 postion-sticky">
             <p class="fs-6">Type</p>
            </div>
          <div 
          class = "scroll" style="max-height:320px;" >
          <div id="register">
        <?php
       
        $row=0;
         while($row<8){
          $row++
        ?>
            <div class="row align-items ">
            <div class="col input-group input-group-sm mb-3">
           <input type="text" name ="firstname[]" class = "form-control "value = "none">
           </div>
            <div class="col input-group input-group-sm mb-3">
             <input type="text" name= "middle[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value = "none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
             <input type="text" name= "lastname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value = "none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
             <input type="text" name= "username[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value = "none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
             <input type="text" name= "email[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"value = "none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
             <input type="text" name= "id[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value = "none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
             <input type="text" name= "password[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value = "none"> 
            </div>
             <div class="col input-group input-group-sm mb-3">
              <select  class="form-select form-select-sm" aria-label=".form-select-lg example" name = 'type[]' value = "none">
               <option selected>Type</option>
               <option value="Student">Student</option>
               <option value="Faculty">Faculty</option>
               <option value="Admin">Admin</option>
             </select>
              </div>
             </div>
         <?php  }?>   
          </div>
          </div>
         </div> 
      </div>
     
    </div>
   </div>
   <div class = "btn-group" style="margin-top:3% ;margin-left:87%">
       <input  class = " clear" type="submit" name = "clear" value="CLEAR" id="clear">
       <input type="submit" name = "create" value = "CREATE" id = "create"> 
      </div>
 <?php  require('./function.php');
   include('./footer.php')
   ?>
 

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>