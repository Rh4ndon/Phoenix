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
                    <input class="form-check-input  required me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
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
                <a href="about.php" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>About</span>
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
    <h3><?= $row_students['name']?> / Take Difficult</h3>
</div> 

<!--/Page title -->


<!-- Page Body -->

<div class="page-content"> 

    <section class="row">



        <div class="col-12 col-lg-16">
    
                    <div class="card">
                        <div class="card-header">
                            <h4><a href="#">Difficult</a></h4>
                        </div>
                        <div class="card-body">
                        
                        <form action="controllers/test_controllers.php" method="post">

                            <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">THE LOTTERY</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>  1. How does Shirley Jackson use symbolism throughout "The Lottery" to convey deeper themes and meanings?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery1" value="0"> 
                                            <label class="form-check-label" for="lottery11">  a) By portraying the black box as a symbol of modernity </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery1"1value="0"> 
                                            <label class="form-check-label" for="lottery12">b) By highlighting the lottery as a symbol of hope and renewal

                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery1"value="1"> 
                                            <label class="form-check-label" for="lottery13"> c) By depicting the black box as a symbol of tradition and the lottery as a symbol of blind adherence to harmful customs </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery1"value="0"> 
                                            <label class="form-check-label" for="lottery14">  d) By showcasing the stones as symbols of peace and unity
                                            </label> 
                                        </div> 
                                    </div> 
                               

                          
                                    <div class="card-body"> 
                                        <p>2. Discuss the role of irony in "The Lottery" and how it contributes to the story's impact on the reader.</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery2" value="0"> 
                                            <label class="form-check-label" for="lottery21"> a) Irony is absent in the story, as everything unfolds predictably </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery2"value="0"> 
                                            <label class="form-check-label" for="lottery22">  b) Irony is used to highlight the villagers' love for Tessie Hutchinson </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery2"value="1"> 
                                            <label class="form-check-label" for="lottery23"> c) Irony is employed to contrast the innocence of the gathering with the shocking violence that follows, revealing the dark side of human nature
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery2"value="0"> 
                                            <label class="form-check-label" for="lottery24">  d) Irony is used to portray the lottery as a fair and just tradition </label> 
                                        </div> 
                                    </div> 
                                
                               
                                    <div class="card-body"> 
                                        <p>3. Analyze the character of Tessie Hutchinson in "The Lottery," exploring her motivations, actions, and the implications of her fate.</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery3" value="0"> 
                                            <label class="form-check-label" for="lottery31"> a) Tessie Hutchinson represents the authoritarian figure in the village </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery3"value="0"> 
                                            <label class="form-check-label" for="lottery32"> b) Tessie Hutchinson's character showcases unwavering loyalty to tradition  </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery3"value="1"> 
                                            <label class="form-check-label" for="lottery33"> c) Tessie Hutchinson embodies the common person caught in a system they don't fully understand until it's too late </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="lottery3"value="0"> 
                                            <label class="form-check-label" for="lottery34">  d) Tessie Hutchinson is portrayed as a mastermind behind the lottery's organization
                                          </label> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div>      
                        

                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">AKASYA O KALABASA</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>1. Paano ipinapakita ng pag-uusap nina Mang Simon at ng punong-guro ang mas malalim na mga tema sa lipunan patungkol sa edukasyon, mga pangarap, at ang paghahanap ng kaalaman kumpara sa agaran at praktikal na pakinabang? Paano itinatampok ng usapang ito ang magkaibang pananaw hinggil sa pangmatagalang pamumuhunan sa edukasyon kumpara sa agaran at maikling ginhawa, gamit ang simbolismo ng pagtubo ng isang magarang punong akasya kumpara sa isang simpleng kalabasa?
                                        </p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya1" value="1"> 
                                            <label class="form-check-label" for="akasya11"> a) Pinapakita ng usapan ang pagtutok sa edukasyon bilang pundasyon ng hinaharap, at ang paghahambing ng punong akasya at kalabasa ay nagpapakita ng magkaibang pananaw sa pangmatagalang pag-invest sa edukasyon.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya1"value="0"> 
                                            <label class="form-check-label" for="akasya12">  b) Ang usapan ay naglalaman ng mga praktikal na hakbang patungo sa agaran na pakinabang ng edukasyon, at ang simbolismo ng punong akasya at kalabasa ay hindi binigyang-pansin.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya1"value="0"> 
                                            <label class="form-check-label" for="akasya13">  c) Wala sa usapan ang pag-uusap tungkol sa edukasyon at mga pangarap ngunit ang simbolismo ng punong akasya at kalabasa ay ipinakita bilang mga halimbawa ng natural na kalikasan. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya1"value="0"> 
                                            <label class="form-check-label" for="akasya14"> d) Ang usapan ay naglalaman ng mga teknikal na aspeto ng edukasyon at hindi nagpapakita ng malalim na pag-unawa sa pangmatagalang pamumuhunan sa edukasyon.

                                            </label> 
                                        </div> 
                                    </div> 
                               
                                


                                    <div class="card-body"> 
                                        <p>2. Ano ang implikasyon ng pagkakaroon ng kakaunting bilang ng mga paaralan o kurso na nag-aalok ng mga maikling kurso o teknikal na edukasyon sa lipunan, lalo na sa mga pamilyang may kakulangan sa pinansyal na mapagkukunan ng mahabang edukasyon?
                                        </p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya2" value="0"> 
                                            <label class="form-check-label" for="akasya21"> a) Ang implikasyon ay hindi nabanggit sa kuwento at walang koneksyon sa mga pangunahing tema. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya2"value="1"> 
                                            <label class="form-check-label" for="akasya22">  b) Ang kuwento ay nagpapakita ng kawalan ng oportunidad para sa pangmatagalang edukasyon, lalo na sa mga pamilyang may kakulangan sa pinansyal na mapagkukunan nito. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya2"value="0"> 
                                            <label class="form-check-label" for="akasya23"> c) Ang kuwento ay naglalaman ng mga halimbawa ng mga paaralan na nag-aalok ng maikling kurso o teknikal na edukasyon bilang solusyon sa kakulangan ng oportunidad para sa mahabang edukasyon. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya2"value="0"> 
                                            <label class="form-check-label" for="akasya24">  d) Ang implikasyon ng pagkakaroon ng kakaunting bilang ng mga paaralan ay hindi nilinaw sa kuwento. </label> 
                                        </div> 
                                    </div> 
                                
                    
                              
                                    <div class="card-body"> 
                                        <p> 3. Paano nailalarawan sa kuwento ang pag-aalala ng mga magulang hinggil sa kinabukasan ng kanilang anak, pati na ang kanilang pagtataya sa kung ano ang makakapagbigay ng mas maayos na buhay sa hinaharap, sa pamamagitan ng karakter nina Mang Simon at Iloy?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya3" value="0"> 
                                            <label class="form-check-label" for="akasya31"> a) Ang kuwento ay hindi naglalaman ng anumang pag-aalala ng mga magulang hinggil sa kinabukasan ng kanilang anak. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya3"value="1"> 
                                            <label class="form-check-label" for="akasya32">  b) Ipinapakita ng kuwento ang pag-aalala ng mga magulang sa kinabukasan ng kanilang anak, na nagpapakita ng kanilang pagtataya sa kahalagahan ng edukasyon para sa mas magandang buhay. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya3"value="0"> 
                                            <label class="form-check-label" for="akasya33"> c) Ang kuwento ay naglalaman ng mga magulang na hindi interesado sa kinabukasan ng kanilang anak at nagpapakita ng kanilang kawalan ng pagtataya sa edukasyon. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="akasya3"value="0"> 
                                            <label class="form-check-label" for="akasya34"> d) Ang kuwento ay naglalaman ng mga magulang na nagtataguyod ng pangmatagalang edukasyon para sa kanilang mga anak nang hindi nag-aalala sa kanilang kinabukasan. </label> 
                                        </div> 
                                 </div> 
                           
                                
                                </div>      
                                </div>
                     


                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">THE WEIGHT OF REGRET</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p> 1. How does the character of Rafael evolve throughout the story, particularly in terms of his values, priorities, and understanding of true happiness?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret1" value="0"> 
                                            <label class="form-check-label" for="regret11"> a) Rafael remains stagnant, never experiencing any significant change in his values or priorities</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret1"value="1"> 
                                            <label class="form-check-label" for="regret12"> b) Rafael transitions from valuing material success to prioritizing love, connection, and personal happiness
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret1"value="0"> 
                                            <label class="form-check-label" for="regret13">   c) Rafael becomes more focused on achieving material wealth as the story progresses </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret1"value="0"> 
                                            <label class="form-check-label" for="regret14">  d) Rafael's values and priorities shift from emotional fulfillment to seeking revenge </label>
                                            
                                        </div> 
                                    </div> 
                                
                              
                             

                                    <div class="card-body"> 
                                        <p> 2. Discuss the symbolism of wealth and success in "The Weight of Regret" and how it contrasts with the themes of love, connection, and emotional fulfillment.</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret2" value="0"> 
                                            <label class="form-check-label" for="regret21">  a) Wealth and success symbolize emotional fulfillment and genuine happiness in the story </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret2"value="1"> 
                                            <label class="form-check-label" for="regret22">    b) Wealth and success represent superficial achievements that lead to emptiness and regret when pursued at the expense of relationships
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret2"value="0"> 
                                            <label class="form-check-label" for="regret23">  c) Wealth and success symbolize forgiveness and redemption </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret2"value="0"> 
                                            <label class="form-check-label" for="regret24">   d) Wealth and success are depicted as insignificant in the narrative.</label>
                                            
                                        </div> 
                                    </div> 
                               
                                
                                    <div class="card-body"> 
                                        <p>  3. Analyze the role of memory and reflection in Rafael's journey of self-discovery and redemption. How do his memories contribute to his realization of regret and the need for change?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret3" value="0"> 
                                            <label class="form-check-label" for="regret31">   a) Memory and reflection have no impact on Rafael's character development </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret3"value="0"> 
                                            <label class="form-check-label" for="regret32">   b) Memory and reflection allow Rafael to ignore his regrets and continue living the same lifestyle
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret3"value="1"> 
                                            <label class="form-check-label" for="regret33">  c) Memory and reflection help Rafael confront his past choices, acknowledge his regrets, and make positive changes in his life</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="regret3"value="0"> 
                                            <label class="form-check-label" for="regret34">  d) Memory and reflection hinder Rafael's ability to move forward and seek redemption</label>
                                            
                                        </div> 
                                    </div> 

                                </div>
                                </div> 


                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">ANG MATANDA AT ANG DAGAT</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>   1.Ano ang mga paralelismo sa pagitan ng laban ni Santiago sa marlin at ang pakikibaka ng tao sa harap ng mga hamon at pagsubok ng buhay?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda1" value="0"> 
                                            <label class="form-check-label" for="matanda11">  a) Ang laban ni Santiago sa marlin ay hindi kaugnay ng mga hamon at pagsubok ng buhay ng tao. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda1"value="0"> 
                                            <label class="form-check-label" for="matanda12">   b) Ang laban ni Santiago sa marlin ay nagpapakita ng kanyang determinasyon at tagumpay, na hindi kaugnay ng mga hamon ng buhay ng tao.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda1"value="1"> 
                                            <label class="form-check-label" for="matanda13"> c) Ang laban ni Santiago sa marlin ay nagpapakita ng kanyang determinasyon at tagumpay, na paralelo sa pakikibaka ng tao sa harap ng mga hamon at pagsubok ng buhay. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda1"value="0"> 
                                            <label class="form-check-label" for="matanda14"> d) Ang laban ni Santiago sa marlin ay nagpapakita ng kanyang kahinaan at kabiguan, na hindi kaugnay ng mga hamon ng buhay ng tao. </label>
                                            
                                        </div> 
                                    </div> 
                              
                               
                                 
                                    <div class="card-body"> 
                                        <p>  2.Paano naiugnay ng may-akda ang mga elementong natural, tulad ng dagat at mga hayop, sa pag-unlad ng kwento at sa pagbabago ng karakter ni Santiago?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda2" value="0"> 
                                            <label class="form-check-label" for="matanda21">  a) Hindi nila ginamit ang mga elementong natural upang ipakita ang pagbabago ng karakter ni Santiago.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda2"value="1"> 
                                            <label class="form-check-label" for="matanda22">   b) Ang mga elementong natural tulad ng dagat at mga hayop ay ginamit upang magbigay kulay at hugis sa kwento at upang ipakita ang kahalagahan ng kalikasan sa buhay ni Santiago.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda2"value="0"> 
                                            <label class="form-check-label" for="matanda23"> c) Ang mga elementong natural tulad ng dagat at mga hayop ay hindi kaugnay sa pag-unlad ng kwento at sa pagbabago ng karakter ni Santiago. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda2"value="0"> 
                                            <label class="form-check-label" for="matanda24"> d) Ang mga elementong natural tulad ng dagat at mga hayop ay ginamit upang ipakita ang mga tagumpay ni Santiago sa laban niya sa marlin. </label>
                                        </div> 
                                    </div> 
                                
                               
                                    <div class="card-body"> 
                                        <p> 3.Sa konteksto ng kwento, paano naipapakita ang tema ng dignidad at pagpapahalaga sa sarili sa pamamagitan ng pagpapakita ng determinasyon ni Santiago kahit na nasa gitna siya ng matinding kamalasan?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda3" value="0"> 
                                            <label class="form-check-label" for="matanda31">  a) Ang tema ng dignidad at pagpapahalaga sa sarili ay hindi naiipakita sa kwento.</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda3"value="1"> 
                                            <label class="form-check-label" for="matanda32">   b) Ang tema ng dignidad at pagpapahalaga sa sarili ay naiipakita sa kwento sa pamamagitan ng pagpapakita ng determinasyon ni Santiago na patuloy na lumaban sa kabila ng matinding kamalasan.
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda3"value="0"> 
                                            <label class="form-check-label" for="matanda33"> c) Ang tema ng dignidad at pagpapahalaga sa sarili ay naiipakita sa kwento sa pamamagitan ng pagpapakita ng determinasyon ni Santiago na magtagumpay sa laban niya sa marlin. </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="matanda3"value="0"> 
                                            <label class="form-check-label" for="matanda34">  d) Ang tema ng dignidad at pagpapahalaga sa sarili ay hindi kaugnay ng kwento.</label>

                                        </div> 
                                    </div> 
                                </div> 
                                </div> 


                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">A GOOD MAN IS HARD TO FIND</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>1. Explore the role of foreshadowing in "A Good Man is Hard to Find," particularly in the grandmother's actions and dialogue leading up to the encounter with The Misfit.</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman1" value="0"> 
                                            <label class="form-check-label" for="goodman11"> a) Foreshadowing is absent in the story, as events unfold abruptly</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman1"value="1"> 
                                            <label class="form-check-label" for="goodman12">   b) Foreshadowing can be observed in the grandmother's fixation on the old plantation and her manipulation of the family's plans, hinting at the impending encounter with The Misfit
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman1"value="0"> 
                                            <label class="form-check-label" for="goodman13"> c) Foreshadowing is primarily conveyed through The Misfit's actions and dialogue </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman1"value="0"> 
                                            <label class="form-check-label" for="goodman14">  d) Foreshadowing is limited to the family's discussion about their upcoming vacation plans
                                            </label>
                                        </div> 
                                    </div> 
                               


                                    <div class="card-body"> 
                                        <p>  2. Analyze the symbolism of the Misfit's name and how it reflects his character and the themes of the story.</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman2" value="0"> 
                                            <label class="form-check-label" for="goodman21"> a) The Misfit's name symbolizes his adherence to societal norms and values</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman2"value="1"> 
                                            <label class="form-check-label" for="goodman22">   b) The Misfit's name reflects his status as an outsider or someone who doesn't fit into society's norms, challenging traditional notions of goodness
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman2"value="0"> 
                                            <label class="form-check-label" for="goodman23"> c) The Misfit's name symbolizes his role as a leader among his companions </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman2"value="0"> 
                                            <label class="form-check-label" for="goodman24">  d) The Misfit's name represents his unwavering commitment to righteousness and morality </label>
                                            
                                        </div> 
                                    </div> 
                              
                             


                                    <div class="card-body"> 
                                        <p>3. Discuss the significance of the grandmother's hat as a symbol in the story and how it represents her values, identity, or societal status.</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman3" value="0"> 
                                            <label class="form-check-label" for="goodman31"> a) The grandmother's hat symbolizes her disregard for societal norms and conventions</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman3"value="1"> 
                                            <label class="form-check-label" for="goodman32">  b) The grandmother's hat represents her desire for respectability, social status, and adherence to traditional values, contrasting with the deeper themes of morality and redemption explored in the story
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman3"value="0"> 
                                            <label class="form-check-label" for="goodman33"> c) The grandmother's hat symbolizes her humility and modesty</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="goodman3"value="0"> 
                                            <label class="form-check-label" for="goodman34">  d) The grandmother's hat represents her rejection of materialism and superficiality </label>
                                            
                                        </div> 
                                    </div>

                                    </div>
                                </div> 

                              
                                <div class="container"> 
                                <div class="card"> 
                                    <div class="card-header"> 
                                        <h5 class="card-title">MAAARING LUMIPAD ANG TAO</h5> 
                                    </div> 
                                    
                                    <div class="card-body"> 
                                        <p>1. Ano ang naging implikasyon sa mga alipin sa palayan ng paggamit ng mahiwagang salita ni Sarah at ang kaniyang anak upang makalipad?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad1" value="0"> 
                                            <label class="form-check-label" for="taolumipad11"> a) Paano ito nakaimpluwensya sa kanilang kaisipan at damdamin?</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad1"value="1"> 
                                            <label class="form-check-label" for="taolumipad12">   b) Ano ang mga pangmatagalang epekto nito sa lipunan ng mga alipin at sa kanilang relasyon sa mga naghahari?
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad1"value="0"> 
                                            <label class="form-check-label" for="taolumipad13"> c) Paano ito nagpabago sa kanilang pananaw sa sarili at sa kanilang mga pangarap? </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad1"value="0"> 
                                            <label class="form-check-label" for="taolumipad14">  d) Ano ang naging reaksyon ng iba pang mga alipin sa kanilang paglipad at sa pagkilala sa kanilang sariling kapangyarihan?</label>
                                        </div> 
                                    </div> 
                               
                              
                                

                                    <div class="card-body"> 
                                        <p>  2. Ano ang mga hakbang na ginawa ni Sarah upang maipahayag ang kapangyarihan sa kaniyang anak at sa kanilang sarili?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad2" value="0"> 
                                            <label class="form-check-label" for="taolumipad21"> a) Paano niya pinamulat ang kaniyang anak sa katotohanang mayroon silang kapangyarihan?</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad2"value="0"> 
                                            <label class="form-check-label" for="taolumipad22">  b) Ano ang mga diskarte niya sa pagtuturo ng mahiwagang salita at sa pagpapakita ng kahalagahan nito?
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad2"value="1"> 
                                            <label class="form-check-label" for="taolumipad23">  c) Ano ang kaniyang mga emosyon at mga pagsubok habang nagtatangkang bigyan ng kalayaan ang kanilang pamilya? </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad2"value="0"> 
                                            <label class="form-check-label" for="taolumipad24">   d) Paano niya pinakita ang kahandaan at determinasyon na labanan ang pang-aalipin sa pamamagitan ng kapangyarihan ng salita? </label>
                                            
                                        </div> 
                                    </div> 
                              
                                
                                    <div class="card-body"> 
                                        <p> 3. Ano ang mga posibleng konsekwensya sa paglipad ng mga alipin sa palayan, lalo na sa konteksto ng kanilang lipunan at sa kanilang relasyon sa mga naghahari?</p> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad3" value="0"> 
                                            <label class="form-check-label" for="taolumipad31">  a) Paano ito magbabago sa estruktura ng lipunan at sa distribusyon ng kapangyarihan?</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad3"value="0"> 
                                            <label class="form-check-label" for="taolumipad32">   b) Ano ang mga posibleng tugon ng mga naghahari at ng iba pang sektor sa lipunan sa pagkakaroon ng mga lumilipad na alipin?
                                            </label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad3"value="1"> 
                                            <label class="form-check-label" for="taolumipad33"> c) Paano ito mag-aambag sa pagbabago ng pananaw at kaisipan ng mga alipin at sa kanilang pakikibaka para sa kalayaan?</label> 
                                        </div> 
                                        <div class="form-check"> 
                                            <input class="form-check-input" required type="radio" name="taolumipad3"value="0"> 
                                            <label class="form-check-label" for="taolumipad34">  d) Ano ang mga pagbabagong inaasahan at ang kanilang mga hamon sa paglipad ng mga alipin sa kanilang lipunan? </label>
                                            
                                        </div> 
                                    </div> 
                                </div> 

                                <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" name="difficult" class="btn btn-primary me-1 mb-1">Submit</button>
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