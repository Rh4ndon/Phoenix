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
  <link rel="stylesheet" href="./css/highlight.css">
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
                class="sidebar-item active ">
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
                class="sidebar-item">
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $row_students['name']?> / Difficut Stories</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student_home.php">Easy</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="student_home.php">Average</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Difficut</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div> 

<!--/Page title -->


<!-- Page Body -->

<div class="page-content"> 

    <section class="row">



                <div class="col-xl-12 col-md-6 col-sm-12">
                    <div class="card" id="demoStoryA">
                        <div class="card-content">
                        <div class="card-body">
                        <img src="assets/images/woods.jpg"  class="card-img-top img-fluid"
                            alt="singleminded">
                            <br><br>
                            <h4 class="card-title">The Whispering Woods</h4>
                           
                        </div>
           
                        <div class="card-body">

                        <p class="card-text" id="lyrics">
  <span data-start-time="3" data-end-time="3.3">In</span>
  <span data-start-time="3.3" data-end-time="3.6">the</span>
  <span data-start-time="3.6" data-end-time="3.9">heart</span>
  <span data-start-time="3.9" data-end-time="4.2">of</span>
  <span data-start-time="4.2" data-end-time="4.5">the</span>
  <span data-start-time="4.5" data-end-time="4.8">Whispering</span>
  <span data-start-time="4.8" data-end-time="5.1">Woods,</span>
  <span data-start-time="5.1" data-end-time="5.4">a</span>
  <span data-start-time="5.4" data-end-time="5.7">secluded</span>
  <span data-start-time="5.7" data-end-time="6.0">village</span>
  <span data-start-time="6.0" data-end-time="6.3">named</span>
  <span data-start-time="6.3" data-end-time="6.6">Thornwood</span>
  <span data-start-time="6.6" data-end-time="6.9">thrived</span>
  <span data-start-time="6.9" data-end-time="7.2">under</span>
  <span data-start-time="7.2" data-end-time="7.5">the</span>
  <span data-start-time="7.5" data-end-time="7.8">protection</span>
  <span data-start-time="7.8" data-end-time="8.1">of</span>
  <span data-start-time="8.1" data-end-time="8.4">an</span>
  <span data-start-time="8.4" data-end-time="8.7">ancient</span>
  <span data-start-time="8.7" data-end-time="9.0">pact</span>
  <span data-start-time="9.0" data-end-time="9.3">with</span>
  <span data-start-time="9.3" data-end-time="9.6">the</span>
  <span data-start-time="9.6" data-end-time="9.9">forest</span>
  <span data-start-time="9.9" data-end-time="10.2">spirits.</span>
  <span data-start-time="10.2" data-end-time="10.5">Generations</span>
  <span data-start-time="10.5" data-end-time="10.8">of</span>
  <span data-start-time="10.8" data-end-time="11.1">villagers</span>
  <span data-start-time="11.1" data-end-time="11.4">lived</span>
  <span data-start-time="11.4" data-end-time="11.7">in</span>
  <span data-start-time="11.7" data-end-time="12.0">harmony</span>
  <span data-start-time="12.0" data-end-time="12.3">with</span>
  <span data-start-time="12.3" data-end-time="12.6">nature,</span>
  <span data-start-time="12.6" data-end-time="12.9">until</span>
  <span data-start-time="12.9" data-end-time="13.2">one</span>
  <span data-start-time="13.2" data-end-time="13.5">fateful</span>
  <span data-start-time="13.5" data-end-time="13.8">night</span>
  <span data-start-time="13.8" data-end-time="14.1">when</span>
  <span data-start-time="14.1" data-end-time="14.4">a</span>
  <span data-start-time="14.4" data-end-time="14.7">greedy</span>
  <span data-start-time="14.7" data-end-time="15.0">baron</span>
  <span data-start-time="15.0" data-end-time="15.3">sought</span>
  <span data-start-time="15.3" data-end-time="15.6">to</span>
  <span data-start-time="15.6" data-end-time="15.9">exploit</span>
  <span data-start-time="15.9" data-end-time="16.2">the</span>
  <span data-start-time="16.2" data-end-time="16.5">forest's</span>
  <span data-start-time="16.5" data-end-time="16.8">riches</span>
  <span data-start-time="16.8" data-end-time="17.1">for</span>
  <span data-start-time="17.1" data-end-time="17.4">his</span>
  <span data-start-time="17.4" data-end-time="17.7">own</span>
  <span data-start-time="17.7" data-end-time="18.0">gain.</span>
  <br><br>  
  <span data-start-time="18.6" data-end-time="18.9">Driven</span>
  <span data-start-time="18.9" data-end-time="19.2">by</span>
  <span data-start-time="19.2" data-end-time="19.5">ambition,</span>
  <span data-start-time="19.5" data-end-time="19.8">the</span>
  <span data-start-time="19.8" data-end-time="20.1">baron</span>
  <span data-start-time="20.1" data-end-time="20.4">ordered</span>
  <span data-start-time="20.4" data-end-time="20.7">his</span>
  <span data-start-time="20.7" data-end-time="21.0">men</span>
  <span data-start-time="21.0" data-end-time="21.3">to</span>
  <span data-start-time="21.3" data-end-time="21.6">clear</span>
  <span data-start-time="21.6" data-end-time="21.9">the</span>
  <span data-start-time="21.9" data-end-time="22.2">woods,</span>
  <span data-start-time="22.2" data-end-time="22.5">heedless</span>
  <span data-start-time="22.5" data-end-time="22.8">of</span>
  <span data-start-time="22.8" data-end-time="23.1">the</span>
  <span data-start-time="23.1" data-end-time="23.4">warnings</span>
  <span data-start-time="23.4" data-end-time="23.7">whispered</span>
  <span data-start-time="23.7" data-end-time="24.0">by</span>
  <span data-start-time="24.0" data-end-time="24.3">the</span>
  <span data-start-time="24.3" data-end-time="24.6">trees.</span>
  <span data-start-time="24.6" data-end-time="24.9">As</span>
  <span data-start-time="24.9" data-end-time="25.2">the</span>
  <span data-start-time="25.2" data-end-time="25.5">axes</span>
  <span data-start-time="25.5" data-end-time="25.8">bit</span>
  <span data-start-time="25.8" data-end-time="26.1">into</span>
  <span data-start-time="26.1" data-end-time="26.4">the</span>
  <span data-start-time="26.4" data-end-time="26.7">ancient</span>
  <span data-start-time="26.7" data-end-time="27.0">oaks,</span>
  <span data-start-time="27.0" data-end-time="27.3">the</span>
  <span data-start-time="27.3" data-end-time="27.6">forest</span>
  <span data-start-time="27.6" data-end-time="27.9">retaliated</span>
  <span data-start-time="27.9" data-end-time="28.2">with</span>
  <span data-start-time="28.2" data-end-time="28.5">a</span>
  <span data-start-time="28.5" data-end-time="28.8">wrathful</span>
  <span data-start-time="28.8" data-end-time="29.1">fury.</span>
  <span data-start-time="29.1" data-end-time="29.4">Vines</span>
  <span data-start-time="29.4" data-end-time="29.7">snaked</span>
  <span data-start-time="29.7" data-end-time="30.0">around</span>
  <span data-start-time="30.0" data-end-time="30.3">the</span>
  <span data-start-time="30.3" data-end-time="30.6">intruders,</span>
  <span data-start-time="30.6" data-end-time="30.9">roots</span>
  <span data-start-time="30.9" data-end-time="31.2">ensnared</span>
  <span data-start-time="31.2" data-end-time="31.5">their</span>
  <span data-start-time="31.5" data-end-time="31.8">feet,</span>
  <span data-start-time="31.8" data-end-time="32.1">and</span>
  <span data-start-time="32.1" data-end-time="32.4">branches</span>
  <span data-start-time="32.4" data-end-time="32.7">lashed</span>
  <span data-start-time="32.7" data-end-time="33.0">out</span>
  <span data-start-time="33.0" data-end-time="33.3">like</span>
  <span data-start-time="33.3" data-end-time="33.6">angry</span>
  <span data-start-time="33.6" data-end-time="33.9">serpents.</span>
  <br><br>
  <span data-start-time="34.2" data-end-time="34.5">In</span>
  <span data-start-time="34.5" data-end-time="34.8">a</span>
  <span data-start-time="34.8" data-end-time="35.1">desperate</span>
  <span data-start-time="35.1" data-end-time="35.4">bid</span>
  <span data-start-time="35.4" data-end-time="35.7">to</span>
  <span data-start-time="35.7" data-end-time="36.0">appease</span>
  <span data-start-time="36.0" data-end-time="36.3">the</span>
  <span data-start-time="36.3" data-end-time="36.6">enraged</span>
  <span data-start-time="36.6" data-end-time="36.9">spirits,</span>
  <span data-start-time="36.9" data-end-time="37.2">a</span>
  <span data-start-time="37.2" data-end-time="37.5">young</span>
  <span data-start-time="37.5" data-end-time="37.8">villager</span>
  <span data-start-time="37.8" data-end-time="38.1">named</span>
  <span data-start-time="38.1" data-end-time="38.4">Elara</span>
  <span data-start-time="38.4" data-end-time="38.7">ventured</span>
  <span data-start-time="38.7" data-end-time="39.0">deep</span>
  <span data-start-time="39.0" data-end-time="39.3">into</span>
  <span data-start-time="39.3" data-end-time="39.6">the</span>
  <span data-start-time="39.6" data-end-time="39.9">heart</span>
  <span data-start-time="39.9" data-end-time="40.2">of</span>
  <span data-start-time="40.2" data-end-time="40.5">the</span>
  <span data-start-time="40.5" data-end-time="40.8">woods,</span>
  <span data-start-time="40.8" data-end-time="41.1">seeking</span>
  <span data-start-time="41.1" data-end-time="41.4">the</span>
  <span data-start-time="41.4" data-end-time="41.7">wisdom</span>
  <span data-start-time="41.7" data-end-time="42.0">of</span>
  <span data-start-time="42.0" data-end-time="42.3">the</span>
  <span data-start-time="42.3" data-end-time="42.6">forest</span>
  <span data-start-time="42.6" data-end-time="42.9">guardian.</span>
  <span data-start-time="42.9" data-end-time="43.2">There,</span>
  <span data-start-time="43.2" data-end-time="43.5">she</span>
  <span data-start-time="43.5" data-end-time="43.8">discovered</span>
  <span data-start-time="43.8" data-end-time="44.1">the</span>
  <span data-start-time="44.1" data-end-time="44.4">truth</span>
  <span data-start-time="44.4" data-end-time="44.7">behind</span>
  <span data-start-time="44.7" data-end-time="45.0">the</span>
  <span data-start-time="45.0" data-end-time="45.3">pact</span>
  <span data-start-time="45.3" data-end-time="45.6">-</span>
  <span data-start-time="45.6" data-end-time="45.9">to</span>
  <span data-start-time="45.9" data-end-time="46.2">restore</span>
  <span data-start-time="46.2" data-end-time="46.5">balance,</span>
  <span data-start-time="46.5" data-end-time="46.8">one</span>
  <span data-start-time="46.8" data-end-time="47.1">life</span>
  <span data-start-time="47.1" data-end-time="47.4">must</span>
  <span data-start-time="47.4" data-end-time="47.7">be</span>
  <span data-start-time="47.7" data-end-time="48.0">offered</span>
  <span data-start-time="48.0" data-end-time="48.3">in</span>
  <span data-start-time="48.3" data-end-time="48.6">exchange</span>
  <span data-start-time="48.6" data-end-time="48.9">for</span>
  <span data-start-time="48.9" data-end-time="49.2">the</span>
  <span data-start-time="49.2" data-end-time="49.5">forest's</span>
  <span data-start-time="49.5" data-end-time="49.8">protection.</span>
  <br><br>
  <span data-start-time="49.8" data-end-time="50.1">With</span>
  <span data-start-time="50.1" data-end-time="50.4">a</span>
  <span data-start-time="50.4" data-end-time="50.7">heavy</span>
  <span data-start-time="50.7" data-end-time="51.0">heart,</span>
  <span data-start-time="51.0" data-end-time="51.3">Elara</span>
  <span data-start-time="51.3" data-end-time="51.6">made</span>
  <span data-start-time="51.6" data-end-time="51.9">the</span>
  <span data-start-time="51.9" data-end-time="52.2">ultimate</span>
  <span data-start-time="52.2" data-end-time="52.5">sacrifice,</span>
  <span data-start-time="52.5" data-end-time="52.8">willingly</span>
  <span data-start-time="52.8" data-end-time="53.1">becoming</span>
  <span data-start-time="53.1" data-end-time="53.4">one</span>
  <span data-start-time="53.4" data-end-time="53.7">with</span>
  <span data-start-time="53.7" data-end-time="54.0">the</span>
  <span data-start-time="54.0" data-end-time="54.3">Whispering</span>
  <span data-start-time="54.3" data-end-time="54.6">Woods.</span>
  <span data-start-time="54.6" data-end-time="54.9">As</span>
  <span data-start-time="54.9" data-end-time="55.2">her</span>
  <span data-start-time="55.2" data-end-time="55.5">spirit</span>
  <span data-start-time="55.5" data-end-time="55.8">merged</span>
  <span data-start-time="55.8" data-end-time="56.1">with</span>
  <span data-start-time="56.1" data-end-time="56.4">the</span>
  <span data-start-time="56.4" data-end-time="56.7">ancient</span>
  <span data-start-time="56.7" data-end-time="57.0">trees,</span>
  <span data-start-time="57.0" data-end-time="57.3">peace</span>
  <span data-start-time="57.3" data-end-time="57.6">returned</span>
  <span data-start-time="57.6" data-end-time="57.9">to</span>
  <span data-start-time="57.9" data-end-time="58.2">Thornwood,</span>
  <span data-start-time="58.2" data-end-time="58.5">but</span>
  <span data-start-time="58.5" data-end-time="58.8">at</span>
  <span data-start-time="58.8" data-end-time="59.1">the</span>
  <span data-start-time="59.1" data-end-time="59.4">cost</span>
  <span data-start-time="59.4" data-end-time="59.7">of</span>
  <span data-start-time="59.7" data-end-time="60.0">losing</span>
  <span data-start-time="60.0" data-end-time="60.3">one</span>
  <span data-start-time="60.3" data-end-time="60.6">of</span>
  <span data-start-time="60.6" data-end-time="60.9">their</span>
  <span data-start-time="60.9" data-end-time="61.2">own.</span>
  <span data-start-time="61.2" data-end-time="61.5">From</span>
  <span data-start-time="61.5" data-end-time="61.8">that</span>
  <span data-start-time="61.8" data-end-time="62.1">day</span>
  <span data-start-time="62.1" data-end-time="62.4">forth,</span>
  <span data-start-time="62.4" data-end-time="62.7">the</span>
  <span data-start-time="62.7" data-end-time="63.0">villagers</span>
  <span data-start-time="63.0" data-end-time="63.3">honored</span>
  <span data-start-time="63.3" data-end-time="63.6">Elara's</span>
  <span data-start-time="63.6" data-end-time="63.9">memory,</span>
  <span data-start-time="63.9" data-end-time="64.2">knowing</span>
  <span data-start-time="64.2" data-end-time="64.5">that</span>
  <span data-start-time="64.5" data-end-time="64.8">her</span>
  <span data-start-time="64.8" data-end-time="65.1">sacrifice</span>
  <span data-start-time="65.1" data-end-time="65.4">had</span>
  <span data-start-time="65.4" data-end-time="65.7">saved</span>
  <span data-start-time="65.7" data-end-time="66.0">both</span>
  <span data-start-time="66.0" data-end-time="66.3">their</span>
  <span data-start-time="66.3" data-end-time="66.6">home</span>
  <span data-start-time="66.6" data-end-time="66.9">and</span>
  <span data-start-time="66.9" data-end-time="67.2">the</span>
  <span data-start-time="67.2" data-end-time="67.5">enchanted</span>
  <span data-start-time="67.5" data-end-time="67.8">forest.</span>
</p>

                            <audio id="audio" controls>
                            <source src="audio/wood.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
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

<script>
  const audio = document.getElementById('audio');
  const lyrics = document.getElementById('lyrics').children;

  audio.addEventListener('timeupdate', () => {
    const currentTime = audio.currentTime;
    for (const lyric of lyrics) {
      const startTime = lyric.getAttribute('data-start-time');
      const endTime = lyric.getAttribute('data-end-time');
      if (currentTime >= startTime && currentTime <= endTime) {
        lyric.classList.add('highlight');
      } else {
        lyric.classList.remove('highlight');
      }
    }
  });
</script>

</body>

</html>