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
    <h3><?= $row_students['name']?> / Take Average</h3>
</div> 

<!--/Page title -->


<!-- Page Body -->

<div class="page-content"> 

    <section class="row">



        <div class="col-12 col-lg-16">
    
                    <div class="card">
                        <div class="card-header">
                            <h4><a href="#">Average</a></h4>
                        </div>
                        <div class="card-body">
                        
                        <form action="controllers/test_controllers.php" method="post">

                            <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">THE THREE LITTLE PIGS</h5> 
                                    </div> 

                                    <div class="card-body"> 
                                        <p>1. What did Mummy Pig advise the three little Pigs to build their houses out of, and why?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs1" value="0"> 
                                            <label class="form-check-label" for="pigs11">  a) She advised them to build their houses out of straw because it's easy to find. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs1"value="0"> 
                                            <label class="form-check-label" for="pigs12">b) She advised them to build their houses out of sticks because they are lightweight. 

                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs1"value="1"> 
                                            <label class="form-check-label" for="pigs13"> c) She advised them to build their houses out of bricks because they are very strong and would keep them safe. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs1"value="0"> 
                                            <label class="form-check-label" for="pigs14"> d) She advised them to build their houses out of leaves because they are plentiful in the forest.
                                            </label>
                                        </div> 
                                    </div> 

                                    <div class="card-body"> 
                                        <p>2. What materials did the third little Pig use to build his house, and how did he outsmart the Big Bad Wolf?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs2" value="0"> 
                                            <label class="form-check-label" for="pigs21"> a) He used sticks and outsmarted the Wolf by hiding in a tree. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs2"value="1"> 
                                            <label class="form-check-label" for="pigs22"> b) He used bricks, and he outsmarted the Wolf by tricking him into falling into a pot of boiling water.  </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs2"value="0"> 
                                            <label class="form-check-label" for="pigs23"> c) He used straw, and he outsmarted the Wolf by dressing up as a scarecrow. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs2"value="0"> 
                                            <label class="form-check-label" for="pigs24"> d) He used metal, and he outsmarted the Wolf by building a secret escape tunnel. </label> 
                                        </div> 
                                    </div> 
                                 
                                
                                 
                                    <div class="card-body"> 
                                        <p>3. What tricks did the Big Bad Wolf try to use to get into the third little Pig's brick house?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs3" value="0"> 
                                            <label class="form-check-label" for="pigs31"> a) He offered to help the Pig gather food. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs3"value="1"> 
                                            <label class="form-check-label" for="pigs32"> b) He tried to sneak in through the chimney.  </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs3"value="0"> 
                                            <label class="form-check-label" for="pigs33"> c) He pretended to be a lost sheep. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="pigs3"value="0"> 
                                            <label class="form-check-label" for="pigs34">  d) He offered to trade with the Pig.
                                          </label> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            
                        

                            <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">ANG TANDANG ARAW NI LOLA</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>  1. Ano ang ginagawa ni Lola Clara sa kanilang barangay na nagpapakilala sa kanyang isang mahalagang tao?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola1" value="0"> 
                                            <label class="form-check-label" for="lola11"> a) Nagtitinda siya ng mga kakanin </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola1"value="0"> 
                                            <label class="form-check-label" for="lola12">  b) Nagluluto siya ng masasarap na pagkain
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola1"value="1"> 
                                            <label class="form-check-label" for="lola13">  c) Maipredict niya ang mga kalamidad tulad ng bagyo at lindol </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola1"value="0"> 
                                            <label class="form-check-label" for="lola14"> d) Nagpapagamot siya sa mga tao sa barangay

                                            </label> 
                                        </div> 
                                    </div> 
                                
                                

                                    <div class="card-body"> 
                                        <p>2. Paano nakatulong si Lola Clara sa komunidad nang dumating ang malakas na bagyo?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola2" value="0"> 
                                            <label class="form-check-label" for="lola21"> a) Nagtinda siya ng mga kandila at flashlight </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola2"value="0"> 
                                            <label class="form-check-label" for="lola22">  b) Nagbigay siya ng libreng sakay sa kanyang tricycle  </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola2"value="1"> 
                                            <label class="form-check-label" for="lola23"> c) Nagbigay siya ng babala at naging daan sa maagap na paghahanda ng mga tao sa barangay </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola2"value="0"> 
                                            <label class="form-check-label" for="lola24">  d) Nag-organize siya ng feeding program para sa mga nasalanta ng bagyo </label> 
                                        </div> 
                                    </div> 
                            
                            
                    

                                    <div class="card-body"> 
                                        <p> 3. Ano ang mensahe o aral na maaari nating matutunan mula sa kwento ni Lola Clara at ang kanyang karanasan bilang bayani ng komunidad?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola3" value="0"> 
                                            <label class="form-check-label" for="lola31"> a) Ang kahalagahan ng pagiging matulungin sa kapwa </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola3"value="0"> 
                                            <label class="form-check-label" for="lola32">  b) Ang mahalagang papel ng kababalaghan sa lipunan </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola3"value="0"> 
                                            <label class="form-check-label" for="lola33"> c) Ang pagiging mapanuri at maingat sa mga paligid </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lola3"value="1"> 
                                            <label class="form-check-label" for="lola34"> d) Ang importansya ng pagiging handa sa mga kalamidad at ang pagtanggap sa mga taong may kakaibang kakayahand) Ang importansya ng pagiging handa sa mga kalamidad at ang pagtanggap sa mga taong may kakaibang kakayahan </label> 
                                        </div> 
                                    </div> 
                           
                             
                                </div>       
                            </div>
                     
                            <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">LITTLE RED RIDING HOOD</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>1. What is the significance of Little Red Riding Hood wearing a red cloak</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered1" value="0"> 
                                            <label class="form-check-label" for="littlered11"> a) It symbolizes her bravery.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered1"value="0"> 
                                            <label class="form-check-label" for="littlered12">   b) It serves as camouflage in the forest.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered1"value="1"> 
                                            <label class="form-check-label" for="littlered13"> c) It represents her innocence and vulnerability. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered1"value="0"> 
                                            <label class="form-check-label" for="littlered14">  d) It shows her connection to nature. </label>
                                            
                                        </div> 
                                    </div> 
                                 
                              

                                    <div class="card-body"> 
                                        <p>2. How does the story depict the theme of obedience and disobedience?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered2" value="1"> 
                                            <label class="form-check-label" for="littlered21">  a) Little Red Riding Hood always obeys her mother's instructions. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered2"value="0"> 
                                            <label class="form-check-label" for="littlered22">   b) Little Red Riding Hood disobeys her mother by talking to strangers.
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered2"value="0"> 
                                            <label class="form-check-label" for="littlered23"> c) The wolf is obedient to Little Red Riding Hood. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered2"value="0"> 
                                            <label class="form-check-label" for="littlered24"> d) The grandmother disobeys Little Red Riding Hood's warnings.</label>
                                            
                                        </div> 
                                    </div> 
                                
                                
                                    <div class="card-body"> 
                                        <p> 3. What lesson does Little Red Riding Hood learn by the end of the story?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered3" value="0"> 
                                            <label class="form-check-label" for="littlered31">  a) She learns to befriend wolves. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered3"value="0"> 
                                            <label class="form-check-label" for="littlered32">   b) She learns the importance of talking to strangers.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered3"value="1"> 
                                            <label class="form-check-label" for="littlered33">  c) She learns not to trust appearances and to be cautious around strangers.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="littlered3"value="0"> 
                                            <label class="form-check-label" for="littlered34"> d) She learns to disobey her mother's instructions.</label>
                                            
                                        </div> 
                                    </div> 
                                    </div> 
                                    </div> 
                               
                               


                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">ANG PRINSIPE AT ANG MAHIWAGANG KABAYO</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p> 1. Ano ang pangunahing problema na hinaharap ng kaharian ng Berbanya sa simula ng kwento?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe1" value="0"> 
                                            <label class="form-check-label" for="prinsipe11">  a) Pag-aaway ng mga prinsipe </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe1"value="1"> 
                                            <label class="form-check-label" for="prinsipe12">   b) Pagkawala ng mahiwagang kabayo
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe1"value="0"> 
                                            <label class="form-check-label" for="prinsipe13"> c) Kahirapan at gutom </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe1"value="0"> 
                                            <label class="form-check-label" for="prinsipe14"> d) Panganib ng digmaan </label>
                                            
                                        </div> 
                                    </div> 
                                 
                                

                                    <div class="card-body"> 
                                        <p>  2. Ano ang mga panganib at hamon na kanilang hinarap sa kanilang paglalakbay?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe2" value="0"> 
                                            <label class="form-check-label" for="prinsipe21">  a) Pagkakaroon ng pera at pagkain</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe2"value="1"> 
                                            <label class="form-check-label" for="prinsipe22">   b) Pag-atake ng halimaw at pagharang ng dayuhan
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe2"value="0"> 
                                            <label class="form-check-label" for="prinsipe23"> c) Pag-ulan at pagbaha </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe2"value="0"> 
                                            <label class="form-check-label" for="prinsipe24"> d) Pagkawala ng direksyon at pagkasira ng sasakyan </label>
                                            
                                        </div> 
                                    </div> 
                                
                                
                             

                                    <div class="card-body"> 
                                        <p> 3. Paano naging matibay ang samahan at pagkakaibigan nina Prinsipe Diego at Totoy sa gitna ng kanilang mga pagsubok?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe3" value="1"> 
                                            <label class="form-check-label" for="prinsipe31">  a) Dahil sa pagtutulungan at pagkakaisa sa gitna ng mga pagsubok</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe3"value="0"> 
                                            <label class="form-check-label" for="prinsipe32">   b) Dahil sa pag-aaway nila, mas lalong tumibay ang samahan
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe3"value="0"> 
                                            <label class="form-check-label" for="prinsipe33"> c) Dahil sa kanilang pagkakaiba, nagkasundo sila sa lahat ng bagay </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="prinsipe3"value="0"> 
                                            <label class="form-check-label" for="prinsipe34">  d) Dahil sa tulong ng ibang tao, hindi sila nawalan ng pag-asa</label>

                                        </div> 
                                    </div> 
                                </div> 
                                </div> 


                            <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">THE HARE AND THE TORTOISE</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>1. Who were the main characters in the story, and what were their distinctive traits or abilities?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise1" value="1"> 
                                            <label class="form-check-label" for="hareandtortoise11"> a) The boastful hare, known for his speed, and the wise old tortoise, recognized for his steady determination.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise1"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise12">   b) The speedy tortoise and the slow hare, known for their opposite traits.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise1"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise13"> c) The boastful tortoise and the wise old hare, known for their intelligence. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise1"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise14">  d) The lazy hare and the impatient tortoise, known for their lack of determination.
                                            </label>
                                        </div> 
                                    </div> 
                                 
                              


                                    <div class="card-body"> 
                                        <p>  2. What mistake did the hare make during the race, and how did it affect the outcome?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise2" value="1"> 
                                            <label class="form-check-label" for="hareandtortoise21"> a) He underestimated the tortoise and decided to rest, allowing the tortoise to catch up.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise2"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise22">   b) He cheated and took a shortcut, but got caught by the tortoise.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise2"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise23"> c) He encouraged the tortoise, which slowed him down. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise2"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise24">  d) He ran too fast and tired himself out. </label>
                                            
                                        </div> 
                                    </div> 
                                
                               

                                    <div class="card-body"> 
                                        <p>3. How did the tortoise ultimately win the race despite being much slower than the hare?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise3" value="0"> 
                                            <label class="form-check-label" for="hareandtortoise31"> a) The hare tripped and fell, allowing the tortoise to pass him.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise3"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise32">  b) The tortoise bribed the judges.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise3"value="1"> 
                                            <label class="form-check-label" for="hareandtortoise33"> c) The tortoise kept a steady pace and never gave up, while the hare became complacent and took a nap.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="hareandtortoise3"value="0"> 
                                            <label class="form-check-label" for="hareandtortoise34">  d) The tortoise used magic to speed up. </label>
                                            
                                        </div> 
                                    </div> 

                                </div> 
                                </div>


                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">ANG KUWENTO NG DUWENDE AT MANGINGISDA</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>1. Ano ang naging reaksiyon ni Juan nang marinig niya ang malakas na hiyaw mula sa loob ng kweba?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende1" value="1"> 
                                            <label class="form-check-label" for="duwende11"> a) Nagtakbuhan palayo mula sa kweba</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende1"value="0"> 
                                            <label class="form-check-label" for="duwende12">   b) Nagpasalamat sa duwende
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende1"value="0"> 
                                            <label class="form-check-label" for="duwende13"> c) Tumahimik at nag-antay ng iba pang tunog </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende1"value="0"> 
                                            <label class="form-check-label" for="duwende14">  d) Sumigaw din ng malakas
                                            </label>
                                        </div> 
                                    </div> 
                                 
                              
                            

                                    <div class="card-body"> 
                                        <p>   2. Paano si Pedro naging kaibigan ni Juan at paano niya natuklasan ang tunay na nangyari kay Juan sa kweba?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende2" value="0"> 
                                            <label class="form-check-label" for="duwende21"> a) Dahil sa pagtulong ni Juan sa kanya, natuklasan ni Pedro ang nangyari</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende2"value="0"> 
                                            <label class="form-check-label" for="duwende22">  b) Dahil sa kwento ng ibang tao, nalaman ni Pedro ang nangyari
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende2"value="1"> 
                                            <label class="form-check-label" for="duwende23">  c) Dahil sa kanyang kaalaman sa kababalaghan, natuklasan niya ang katotohanan </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende2"value="0"> 
                                            <label class="form-check-label" for="duwende24">   d) Dahil sa pangungulit ni Juan, kusang ibinahagi ni Pedro ang impormasyon </label>
                                        </div> 
                                    </div> 
                                
                               
                                
                                    <div class="card-body"> 
                                        <p> 3. Paano naging magkaibigan ang duwende at si Juan matapos ang pangyayari sa kweba?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende3" value="0"> 
                                            <label class="form-check-label" for="duwende31">  a) Dahil sa panggugulo ng duwende, naging kaibigan sila</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende3"value="1"> 
                                            <label class="form-check-label" for="duwende32">   b) Dahil sa pag-amin ng duwende sa kanyang kasalanan, naging magkaibigan sila
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende3"value="0"> 
                                            <label class="form-check-label" for="duwende33"> c) Dahil sa pagtulong ni Juan sa duwende, naging magkaibigan sila</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="duwende3"value="0"> 
                                            <label class="form-check-label" for="duwende34">  d) Hindi sila naging magkaibigan, ngunit nagkaunawaan sila </label> 
                                        </div> 
                                    </div> 
                                    </div>
                                </div> 

                                <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" name="average" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>

                            </form>

                               




                          
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