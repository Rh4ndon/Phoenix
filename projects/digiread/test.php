<?php
include 'controllers/session.php';
include 'controllers/userProfile.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digibilities</title>
    
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    
  <link rel="stylesheet" href="./assets/compiled/css/app.css">
  <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
<!--The App-->
    <div id="app">




   <!-- Side Bar -->
<div id="sidebar">
    <div class="sidebar-wrapper active">
    <!-- Sidebar Header-->
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="logo">
                <a href="student_home.php"><img style="height:50px;"src="./assets/logo.png" alt="Logo" srcset=""></a>
            </div>
            <!-- /Logo -->

            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                    </path>
                </svg>
            </div>
            <!-- Exit Button (x) -->
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
            <!-- /Exit Button (x) -->
        </div>
    </div>
    <!-- /Sidebar Header-->

    <!-- Sidebar Links -->

    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item ">
                <a href="student_home.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                
            </li>
            
            <li
                class="sidebar-item">
                <a href="statistics.php" class='sidebar-link'>
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>Statistics</span>
                </a>              

            </li>

            <li
                class="sidebar-item active ">
                <a href="test.php" class='sidebar-link'>
                    <i class="bi bi-person-circle"></i>
                    <span>Test</span>
                </a>
            </li>
            
            
            
            <li
                class="sidebar-item">
                <a href="../../projects.html" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Back to Rhandon.tech</span>
                </a>             

            </li>

            <li
                class="sidebar-item">
                <a href="appendix.php" class='sidebar-link'>
                    <i class="bi bi-book-half"></i>
                    <span>Appendix</span>
                </a>             

            </li>

            <li
                class="sidebar-item">
                <a href="controllers/logOut.php" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Log Out</span>
                </a>            

            </li>
            
            
        </ul>
    </div>
</div>
</div>
<!-- /Side Bar -->
 

<!--Main Page-->

<div id="main">
    <!--Burger Button For Mobile View-->
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
    <!-- /Burger Button For Mobile View-->
         
<!--Page title -->

<div class="page-heading">
    <h3><?= $row_students['name']?> / Take Test <img src="./assets/compiled/svg/circles.svg" class="me-4" style="width: 2rem" alt="audio"></h3>
</div> 

<!--/Page title -->


<!-- Page Body -->

<div class="page-content"> 

    <section class="row">



        <div class="col-12 col-lg-4">
    
                    <div class="card">
                        <div class="card-header">
                            <h4><a href="#">Easy</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive d-flex flex-column justify-content-between">

                            <?php 
                            include 'models/connection.php'; 
                            $select_atlast = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_atlast->execute([$session_id, 'atlast']);
                            //

                            if($select_atlast->rowCount() > 0){   
                                
                                $row_atlast = $select_atlast->fetch(PDO::FETCH_ASSOC);
                                
                            ?>

                            <a href="score.php?score=<?= $row_atlast['score'] ?>&test=atlast" class="btn btn-primary" > View Your Score for At Last Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_atlast.php" class="btn btn-primary" > At Last! Quiz </a>

                            <?php   }  ?>
                            <br>
                         
                            

                            <?php 
                             
                            $select_thebest = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_thebest->execute([$session_id, 'thebest']);
                            //

                            if($select_thebest->rowCount() > 0){   
                                
                                $row_thebest = $select_thebest->fetch(PDO::FETCH_ASSOC);
                                
                            ?>

                            <a href="score.php?score=<?= $row_thebest['score'] ?>&test=thebest" class="btn btn-primary" > View Your Score for The Best Part of the Day Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_thebest.php" class="btn btn-primary" > The Best Part of the Day Quiz </a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_icecream = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_icecream->execute([$session_id, 'icecream']);
                            //

                            if($select_icecream->rowCount() > 0){   
                                
                                $row_icecream = $select_icecream->fetch(PDO::FETCH_ASSOC);
                                
                            ?>

                            <a href="score.php?score=<?= $row_icecream['score'] ?>&test=icecream" class="btn btn-primary" > View Your Score for Ice Cream For Sale Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_icecream.php" class="btn btn-primary" > Ice Cream for Sale Quiz </a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_simila = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_simila->execute([$session_id, 'simila']);
                            //

                            if($select_simila->rowCount() > 0){   
                                
                                $row_simila = $select_simila->fetch(PDO::FETCH_ASSOC);
                                
                            ?>

                            <a href="score.php?score=<?= $row_simila['score'] ?>&test=simila" class="btn btn-primary" > View Your Score for Si Mila Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_simila.php" class="btn btn-primary" > Si Mila Quiz </a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_angdaga = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_angdaga->execute([$session_id, 'angdaga']);
                            //

                            if($select_angdaga->rowCount() > 0){   
                                
                                $row_angdaga = $select_angdaga->fetch(PDO::FETCH_ASSOC);
                                
                            ?>

                            <a href="score.php?score=<?= $row_angdaga['score'] ?>&test=angdaga" class="btn btn-primary" > View Your Score for Ang Daga Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_angdaga.php" class="btn btn-primary" > Ang Daga Quiz </a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_simuning = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_simuning->execute([$session_id, 'simuning']);
                            //

                            if($select_simuning->rowCount() > 0){   
                                
                                $row_simuning = $select_simuning->fetch(PDO::FETCH_ASSOC);
                                
                            ?>

                            <a href="score.php?score=<?= $row_simuning['score'] ?>&test=simuning" class="btn btn-primary" > View Your Score for Si Muning Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_simuning.php" class="btn btn-primary" > Si Muning Quiz </a>

                            <?php   }  ?>
                        
                            
                            </div>
                        </div>
                    </div>
            
        </div>


        <div class="col-12 col-lg-4">
           
                    <div class="card">
                        <div class="card-header">
                            <h4><a href="#">Average</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive d-flex flex-column justify-content-between">
                            
                            <?php 
                             
                            $select_whisper = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_whisper->execute([$session_id, 'whisper']);
                            //

                            if($select_whisper->rowCount() > 0){   
                                    
                                $row_whisper = $select_whisper->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_whisper['score'] ?>&test=whisper" class="btn btn-primary" > View Your Score for Whisper Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_whisper.php" class="btn btn-primary" > Whisper Quiz</a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_magician = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_magician->execute([$session_id, 'magician']);
                            //

                            if($select_magician->rowCount() > 0){   
                                    
                                $row_magician = $select_magician->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_magician['score'] ?>&test=magician" class="btn btn-primary" > View Your Score Magician Invents Special Effects Quiz</a>
                                  
                            <?php }else{ ?>


                            <a href="take_magician.php" class="btn btn-primary" > Magician Invents Special Effects Quiz</a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_anger = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_anger->execute([$session_id, 'anger']);
                            //

                            if($select_anger->rowCount() > 0){   
                                    
                                $row_anger = $select_anger->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_anger['score'] ?>&test=anger" class="btn btn-primary" > View Your Score Effects of Amger Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_anger.php" class="btn btn-primary" > Effects of Anger Quiz</a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_sayaw = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_sayaw->execute([$session_id, 'sayaw']);
                            //

                            if($select_sayaw->rowCount() > 0){   
                                    
                                $row_sayaw = $select_sayaw->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_sayaw['score'] ?>&test=sayaw" class="btn btn-primary" > View Your Score Sayaw sa Palatuntunan Quiz</a>
                                  
                            <?php }else{ ?>


                            <a href="take_sayaw.php" class="btn btn-primary" > Sayaw sa Palatuntunan Quiz</a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_inay = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_inay->execute([$session_id, 'inay']);
                            //

                            if($select_inay->rowCount() > 0){   
                                    
                                $row_inay = $select_inay->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_inay['score'] ?>&test=inay" class="btn btn-primary" > View Your Score Iba si Inay Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_inay.php" class="btn btn-primary" > Iba si Inay Quiz</a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_pamilya = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_pamilya->execute([$session_id, 'pamilya']);
                            //

                            if($select_pamilya->rowCount() > 0){   
                                    
                                $row_pamilya = $select_pamilya->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_pamilya['score'] ?>&test=pamilya" class="btn btn-primary" > View Your Score Ang Pamilya Ni Muning Quiz</a>
                                  
                            <?php }else{ ?>


                            <a href="take_pamilya.php" class="btn btn-primary" > Ang Pamilya Ni Muning Quiz</a>

                            <?php   }  ?>
                       

                            </div>
                        </div>
                    </div>
        
        </div>



        <div class="col-12 col-lg-4">
           

                    <div class="card">
                        <div class="card-header">
                            <h4><a href="#">Difficut</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive d-flex flex-column justify-content-between">

                            <?php 
                             
                            $select_clockmaker = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_clockmaker->execute([$session_id, 'clockmaker']);
                            //

                            if($select_clockmaker->rowCount() > 0){   
                                    
                                $row_clockmaker = $select_clockmaker->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_clockmaker['score'] ?>&test=clockmaker" class="btn btn-primary" > View Your Score The Clockmaker's Curse Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_clockmaker.php" class="btn btn-primary" > The Clockmaker's Curse Quiz</a>

                            <?php   }  ?>
                            <br>

                            <?php 
                             
                            $select_woods = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_woods->execute([$session_id, 'woods']);
                            //

                            if($select_woods->rowCount() > 0){   
                                    
                                $row_woods = $select_woods->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_woods['score'] ?>&test=woods" class="btn btn-primary" > View Your Score The Whispering Woods Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_woods.php" class="btn btn-primary" > The Whispering Woods Quiz</a>

                            <?php   }  ?>
                            
                            <br>

                            <?php 
                             
                            $select_echoes = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_echoes->execute([$session_id, 'echoes']);
                            //

                            if($select_echoes->rowCount() > 0){   
                                    
                                $row_echoes = $select_echoes->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_echoes['score'] ?>&test=echoes" class="btn btn-primary" > View Your Score Echoes of Eternity Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_echoes.php" class="btn btn-primary" > Echoes of Eternity Quiz</a>

                            <?php   }  ?>

                            <br>

                            <?php 
                             
                            $select_sibil = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_sibil->execute([$session_id, 'sibil']);
                            //

                            if($select_sibil->rowCount() > 0){   
                                    
                                $row_sibil = $select_sibil->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_sibil['score'] ?>&test=sibil" class="btn btn-primary" > View Your Score Karapatang Sibil Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_sibil.php" class="btn btn-primary" > Karapatang Sibil Quiz</a>

                            <?php   }  ?>

                            <br>

                            <?php 
                             
                            $select_hukbo = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_hukbo->execute([$session_id, 'hukbo']);
                            //

                            if($select_hukbo->rowCount() > 0){   
                                    
                                $row_hukbo = $select_hukbo->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_hukbo['score'] ?>&test=hukbo" class="btn btn-primary" > View Your Score Ang Hukbong Paggawa ng Pilipinas Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_hukbo.php" class="btn btn-primary" > Ang Hukbong Paggawa ng Pilipinas Quiz</a>

                            <?php   }  ?>

                            <br>

                            <?php 
                             
                            $select_bato = $conn->prepare("SELECT * FROM `test_results` WHERE student_id = ? AND test_title = ?");
                            $select_bato->execute([$session_id, 'bato']);
                            //

                            if($select_bato->rowCount() > 0){   
                                    
                                $row_bato = $select_bato->fetch(PDO::FETCH_ASSOC);
                            ?>

                            <a href="score.php?score=<?= $row_bato['score'] ?>&test=bato" class="btn btn-primary" > View Your Score Panahon ng Bagong Bato Quiz </a>
                                  
                            <?php }else{ ?>


                            <a href="take_bato.php" class="btn btn-primary" > Panahon ng Bagong Bato Quiz</a>

                            <?php   }  ?>



                            
                            
                            </div>
                        </div>
                    </div>
     
            
        </div>








    </section>
</div>

<!-- Footer -->

<?php @include 'footer.php'; ?>

<!-- /Footer -->


    </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    
    <script src="assets/compiled/js/app.js"></script>
    

    
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>

</body>

</html>