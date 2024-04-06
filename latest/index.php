<?php
 require("./database.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.php">
    <title>Document</title>
    
</head>

<body>
    
    <header>
        
         <div1><img src="logo.png" alt=""></div1>

    </header>


<div class="container">
    
        <div class="rectangle">
                <h1>Welcome to</h1>
                <h2>LABVISION</h2>

                <div class= "loginpart">
                <form class = "login" action="login.php" method = "post"> <!--action oncw the button click and method get their type in text through their name-->
                       
                        <!-- Textbox -->
                        <input type="text" class="textbox" name = 'username'placeholder="  username">
                      

                     
                            <!-- Textbox -->
                            <input type="text" class="password" name = 'pass' placeholder="  password">
                         

                        <a href="#" class="forgot-password">Forgot Password?</a> 
          
                        <!-- Submit button -->
                    
                            <input type="submit" class="submit-button" name = 'login' value="Login">
                            
                   
                      </form>
                  
                </div>


                <div class="tryagain">
                    
                    <div class="rectangle3">
                    

                    <h1><img src="logo.png" alt="logopls"></h1>
                    <h6>Virtual Information System for Insightful Observation and Navigation</h6>

                    
                        <input type="submit" class="learnmorebutton" value="Learn More"> 
                    </div>
                  
         </div>
 </div>

    
</body>
</html>