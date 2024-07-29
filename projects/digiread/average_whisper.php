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
                class="sidebar-item ">
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $row_students['name']?> / Average Stories</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student_home.php">Easy</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Average</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="student_home.php">Difficut</a></li>
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
                        <img src="assets/images/whisper.jpg"  class="card-img-top img-fluid"
                            alt="singleminded">
                            <br><br>
                            <h4 class="card-title">"Bulong" (Whisper)</h4>
                            
                        </div>
           
                        <div class="card-body">
                        <p class="card-text" id="lyrics">

                        <span data-start-time="3.5" data-end-time="4">Filipinos</span>
  <span data-start-time="4" data-end-time="4.5">are</span>
  <span data-start-time="4.5" data-end-time="4.9">known</span>
  <span data-start-time="4.9" data-end-time="5.1">for</span>
  <span data-start-time="5.1" data-end-time="5.4">their</span>
  <span data-start-time="5.4" data-end-time="6">creativity.</span>
  <br><br>
  <span data-start-time="6.2" data-end-time="6.5">One</span>
  <span data-start-time="6.5" data-end-time="6.9">contemporary</span>
  <span data-start-time="6.9" data-end-time="7.2">proof</span>
  <span data-start-time="7.2" data-end-time="7.5">of</span>
  <span data-start-time="7.5" data-end-time="7.8">this</span>
  <span data-start-time="7.8" data-end-time="8.1">claim</span>
  <span data-start-time="8.1" data-end-time="8.5">is</span>
  <span data-start-time="8.5" data-end-time="8.9">a</span>
  <span data-start-time="8.9" data-end-time="9.3">24-year</span>
  <span data-start-time="9.3" data-end-time="9.6">old</span>
  <span data-start-time="9.6" data-end-time="10">Filipino</span>
  <span data-start-time="10" data-end-time="10.4">named</span>
  <span data-start-time="10.4" data-end-time="10.8">Joaquin</span>
  <span data-start-time="10.8" data-end-time="11">Pedro</span>
  <span data-start-time="11" data-end-time="11.4">Gomez</span>
  <span data-start-time="11.4" data-end-time="11.8">Valdes.</span>
  <span data-start-time="12.5" data-end-time="12.9">He</span>
  <span data-start-time="12.9" data-end-time="13.6">finished</span>
  <span data-start-time="13.6" data-end-time="13.7">a</span>
  <span data-start-time="13.7" data-end-time="14">degree</span>
  <span data-start-time="14" data-end-time="14.3">in</span>
  <span data-start-time="14.3" data-end-time="14.7">Film</span>
  <span data-start-time="14.7" data-end-time="15">and</span>
  <span data-start-time="15" data-end-time="15.5">Audio-Visual</span>
  <span data-start-time="15.5" data-end-time="15.9">Communication</span>
  <span data-start-time="15.9" data-end-time="16.2">at</span>
  <span data-start-time="16.2" data-end-time="16.5">the</span>
  <span data-start-time="16.5" data-end-time="17">University</span>
  <span data-start-time="17" data-end-time="17.5">of</span>
  <span data-start-time="17.5" data-end-time="17.8">the</span>
  <span data-start-time="17.8" data-end-time="18.2">Philippines.</span>
  <span data-start-time="18.7" data-end-time="18.9">As</span>
  <span data-start-time="18.9" data-end-time="19.2">part</span>
  <span data-start-time="19.2" data-end-time="19.5">of</span>
  <span data-start-time="19.5" data-end-time="19.8">his</span>
  <span data-start-time="19.8" data-end-time="20.3">graduation</span>
  <span data-start-time="20.3" data-end-time="20.8">requirements,</span>
  <span data-start-time="20.8" data-end-time="21">he</span>
  <span data-start-time="21" data-end-time="21.5">needed</span>
  <span data-start-time="21.5" data-end-time="21.8">to</span>
  <span data-start-time="21.8" data-end-time="22.2">submit</span>
  <span data-start-time="22.2" data-end-time="22.5">a</span>
  <span data-start-time="22.5" data-end-time="22.8">major</span>
  <span data-start-time="22.8" data-end-time="23.1">project</span>
  <span data-start-time="23.1" data-end-time="23.4">called</span>
  <span data-start-time="23.4" data-end-time="23.7">a</span>
  <span data-start-time="23.7" data-end-time="24.1">"thesis".</span>
  <br><br>
  <span data-start-time="24.5" data-end-time="24.7">He</span>
  <span data-start-time="24.7" data-end-time="25">then</span>
  <span data-start-time="25" data-end-time="25.3">set</span>
  <span data-start-time="25.3" data-end-time="25.6">his</span>
  <span data-start-time="25.6" data-end-time="26">creativity</span>
  <span data-start-time="26" data-end-time="26.3">to</span>
  <span data-start-time="26.3" data-end-time="26.6">work</span>
  <span data-start-time="26.6" data-end-time="26.9">and</span>
  <span data-start-time="26.9" data-end-time="27.1">came</span>
  <span data-start-time="27.1" data-end-time="27.4">up</span>
  <span data-start-time="27.4" data-end-time="27.7">with</span>
  <span data-start-time="27.7" data-end-time="28">a</span>
  <span data-start-time="28" data-end-time="28.2">short</span>
  <span data-start-time="28.2" data-end-time="28.5">film</span>
  <span data-start-time="28.5" data-end-time="28.8">entitled</span>
  <span data-start-time="28.8" data-end-time="29.1">"Bulong"</span>
  <span data-start-time="29.4" data-end-time="30">(Whisper).</span>
  <span data-start-time="30.4" data-end-time="30.7">He</span>
  <span data-start-time="30.7" data-end-time="31">submitted</span>
  <span data-start-time="31" data-end-time="31.3">his</span>
  <span data-start-time="31.3" data-end-time="31.7">work</span>
 <span data-start-time="31.7" data-end-time="32">to</span>
  <span data-start-time="32" data-end-time="32.5">different</span>
  <span data-start-time="32.5" data-end-time="33">international</span>
  <span data-start-time="33" data-end-time="33.8">competitions,</span>
  <span data-start-time="34" data-end-time="34.2">a</span>
  <span data-start-time="34.2" data-end-time="34.6">couple</span>
  <span data-start-time="34.6" data-end-time="34.9">of</span>
  <span data-start-time="34.9" data-end-time="35.2">months</span>
  <span data-start-time="35.2" data-end-time="35.6">after</span>
  <span data-start-time="35.6" data-end-time="35.9">its</span>
  <span data-start-time="35.9" data-end-time="36.3">completion.</span>
  <br><br>
  <span data-start-time="36.7" data-end-time="37">His</span>
  <span data-start-time="37" data-end-time="37.5">efforts</span>
  <span data-start-time="37.5" data-end-time="37.8">paid</span>
  <span data-start-time="37.8" data-end-time="38.1">off</span>
  <span data-start-time="38.1" data-end-time="38.4">when</span>
  <span data-start-time="38.4" data-end-time="38.7">"Bulong"</span>
  <span data-start-time="38.7" data-end-time="39">which</span>
  <span data-start-time="39" data-end-time="39.3">talked</span>
  <span data-start-time="39.3" data-end-time="39.7">about</span>
  <span data-start-time="39.7" data-end-time="39.9">life's</span>
  <span data-start-time="39.9" data-end-time="40.2">purpose</span>
  <span data-start-time="40.2" data-end-time="40.5">and</span>
  <span data-start-time="40.5" data-end-time="40.8">the</span>
  <span data-start-time="40.8" data-end-time="41.1">people's</span>
  <span data-start-time="41.1" data-end-time="41.5">freedom</span>
  <span data-start-time="41.5" data-end-time="41.9">whether</span>
  <span data-start-time="41.9" data-end-time="42.1">to</span>
  <span data-start-time="42.1" data-end-time="42.5">live</span>
  <span data-start-time="42.5" data-end-time="42.8">that</span>
  <span data-start-time="42.8" data-end-time="43">purpose</span>
  <span data-start-time="43" data-end-time="43.4">or</span>
  <span data-start-time="43.4" data-end-time="43.9">not,</span>
  <span data-start-time="43.9"data-end-time="44.1">was</span>
  <span data-start-time="44.1" data-end-time="44.4">named</span>
  <span data-start-time="44.4" data-end-time="44.7">"Best</span>
  <span data-start-time="44.7" data-end-time="45">Thesis".</span>
  <span data-start-time="45.4" data-end-time="45.7">It</span>
  <span data-start-time="45.7" data-end-time="46">was</span>
  <span data-start-time="46" data-end-time="46.3">also</span>
  <span data-start-time="46.3" data-end-time="46.7">given</span>
  <span data-start-time="46.7" data-end-time="47">the</span>
  <span data-start-time="47" data-end-time="47.5">"Felicianio</span>
  <span data-start-time="47.5" data-end-time="47.9">Award".</span>
  <span data-start-time="48.2" data-end-time="48.4">It</span>
  <span data-start-time="48.9" data-end-time="49.2">gained</span>
  <span data-start-time="50.3" data-end-time="51">recognition</span>
  <span data-start-time="52.8" data-end-time="53.4">abroad</span>
  <span data-start-time="53.4" data-end-time="53.8">when</span>
  <span data-start-time="53.8" data-end-time="54.1">it</span>
  <span data-start-time="54.1" data-end-time="54.4">was</span>
  <span data-start-time="54.4" data-end-time="54.7">chosen</span>
  <span data-start-time="54.7" data-end-time="55">to</span>
  <span data-start-time="55" data-end-time="55.3">represent</span>
  <span data-start-time="55.3" data-end-time="55.5">the</span>
  <span data-start-time="55.5" data-end-time="55.9">Philippines</span>
  <span data-start-time="55.9" data-end-time="56.1">in</span>
  <span data-start-time="56.1" data-end-time="56.4">the</span>
  <span data-start-time="56.4" data-end-time="56.7">prestigious</span>
  <span data-start-time="56.7" data-end-time="57">Short</span>
  <span data-start-time="57" data-end-time="57.3">Film</span>
  <span data-start-time="57.3" data-end-time="57.6">Corner,</span>
  <span data-start-time="57.6" data-end-time="57.9">Festival</span>
  <span data-start-time="57.9" data-end-time="58.1">de</span>
  <span data-start-time="58.1" data-end-time="58.3">Cannes,</span>
  <span data-start-time="58.3" data-end-time="58.6">in</span>
  <span data-start-time="58.6" data-end-time="58.9">France.</span>
  <span data-start-time="59.4" data-end-time="59.6">It</span>
  <span data-start-time="59.6" data-end-time="59.9">also</span>
  <span data-start-time="60.1" data-end-time="60.4">won</span>
  <span data-start-time="60.4" data-end-time="60.8">the</span>
  <span data-start-time="60.8" data-end-time="61.1">Best</span>
  <span data-start-time="61.1" data-end-time="61.4">Short</span>
  <span data-start-time="61.4" data-end-time="61.8">Narrative</span>
  <span data-start-time="61.8" data-end-time="62.1">in</span>
  <span data-start-time="62.1" data-end-time="62.4">New</span>
  <span data-start-time="62.4" data-end-time="62.7">Beijing</span>
  <span data-start-time="62.7" data-end-time="63.1">International</span>
  <span data-start-time="63.1" data-end-time="63.5">Movie</span>
  <span data-start-time="63.5" data-end-time="63.8">Week.</span>
  <br><br>
  <span data-start-time="64.6" data-end-time="64.9">Joaquin</span>
  <span data-start-time="64.9" data-end-time="65.2">Valdez,</span>
  <span data-start-time="65.4" data-end-time="65.9">exemplifying</span>
  <span data-start-time="65.9" data-end-time="66.3">excellence,</span>
  <span data-start-time="66.3" data-end-time="66.6">made</span>
  <span data-start-time="66.6" data-end-time="66.9">something</span>
  <span data-start-time="66.9" data-end-time="67.2">not</span>
  <span data-start-time="67.2" data-end-time="67.5">just</span>
  <span data-start-time="67.5" data-end-time="67.8">to</span>
  <span data-start-time="67.8" data-end-time="68.1">meet</span>
  <span data-start-time="68.1" data-end-time="68.6">requirements</span>
  <span data-start-time="68.6" data-end-time="68.9">in</span>
  <span data-start-time="69.2" data-end-time="69.5">order</span>
  <span data-start-time="69.5" data-end-time="69.8">to</span>
  <span data-start-time="69.8" data-end-time="70.1">graduate.</span>
  <span data-start-time="70.6" data-end-time="70.9">He</span>
  <span data-start-time="70.9" data-end-time="71.2">made</span>
  <span data-start-time="71.2" data-end-time="71.4">a</span>
  <span data-start-time="71.4" data-end-time="71.7">short</span>
  <span data-start-time="71.7" data-end-time="72">film</span>
  <span data-start-time="72" data-end-time="72.3">that</span>
  <span data-start-time="72.3" data-end-time="72.6">brought</span>
  <span data-start-time="72.6" data-end-time="72.5">pride</span>
  <span data-start-time="72.5" data-end-time="72.8">to</span>
  <span data-start-time="72.8" data-end-time="73.1">the</span>
  <span data-start-time="73.1" data-end-time="73.5">country.</span>
  <span data-start-time="73.9" data-end-time="74.2">He</span>
  <span data-start-time="74.2" data-end-time="74.6">exemplifies</span>
  <span data-start-time="74.6" data-end-time="74.9">a</span>
  <span data-start-time="74.9" data-end-time="75.2">"world</span>
  <span data-start-time="75.2" data-end-time="75.6">class"</span>
  <span data-start-time="75.6" data-end-time="76.1">Filipino.</span>
</p>


                            
                        <audio id="audio" controls>
                            <source src="audio/bulong.mp3" type="audio/mpeg">
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