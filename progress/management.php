<!DOCTYPE html>
<?php 
session_start();
include('./header.php')
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                     <center class="profile">
                      <i class="fa-solid fa-image"></i><br>
                      <span>Rose Ann</span>
                      <span>De Guzman</span>
                     </center>
                    </a>
                </li>
                 <ul class ="sidebar-nav">
                     <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"     data-bs-target="#invent" aria-expanded="false" aria-controls="invent">
                        <i class="fa-solid fa-list"></i><span>Inventory<span>
                        </a>
                          <ul id="invent" class ="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"  >
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Laboratory</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Codes</a>
                            </li>
                          </ul>
                     </li>
                     <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"     data-bs-target="#report" aria-expanded="false" aria-controls="report">
                           <i class="fa-solid fa-file"></i>
                           <span>Reports</span>
                        </a> 
                          <ul id="report" class ="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"  >
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Pendings</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Unit Reports</a>
                            </li>
                          </ul>
                       </li>
                        <li class="sidebar-item">
                         <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"     data-bs-target="#manage" aria-expanded="false" aria-controls="manage">
                          <i class="fa-solid fa-user"></i><span>User Management<span>
                         </a>
                           <ul id="manage" class ="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"  >
                              <li class="sidebar-item">
                                <a href="management.php" class="sidebar-link">Manage Accounts</a>
                              </li>
                              <li class="sidebar-item">
                                <a href="createaccounts.php" class="sidebar-link">Create Accounts
                                </a>
                              </li>
                           </ul>
                          </li>
                        </li>
                        <li class="sidebar-item">
                         <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"     data-bs-target="#status" aria-expanded="false" aria-controls="status">
                          <i class="ffa-solid fa-desktop"></i><span>Status<span>
                         </a>
                           <ul id="status" class ="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"  >
                              <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Usage</a>
                              </li>
                              <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Laboratory Management
                                </a>
                              </li>
                             </ul>
                           </li>
                          </li>
                       </ul>
        </aside>
      <div class="main">
        <?php include_once("./manage.php")?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>