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
    <h3><?= $row_students['name']?> / Average Quiz</h3>
</div> 

<!--/Page title -->


<!-- Page Body -->

<div class="page-content"> 

    <section class="row">



        <div class="col-12 col-lg-16">
                    <form action="controllers/test_controllers.php" method="post">

                    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Quiz for story "Whisper"</h4>
          
          </div>
          <div class="card-body">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

        

              <div class="carousel-item active">
  <div class="card">
    <div class="card-header">1. How old is Joaquin Pedro Gomez Valdes in the story?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q1" value="0">
        <label class="form-check-label" for="q1a">a) 20 years old</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q1" value="1">
        <label class="form-check-label" for="q1b">b) 25 years old</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q1" value="0">
        <label class="form-check-label" for="q1c">c) 30 years old</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q1" value="0">
        <label class="form-check-label" for="q1d">d) 35 years old</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">2. What degree did Joaquin Pedro Gomez Valdes pursue?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q2" value="0">
        <label class="form-check-label" for="q2a">a) Medicine</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q2" value="0">
        <label class="form-check-label" for="q2b">b) Engineering</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q2" value="1">
        <label class="form-check-label" for="q2c">c) Film and Audio-Visual Communication</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q2" value="0">
        <label class="form-check-label" for="q2d">d) Law</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">3. What is the title of Joaquin Pedro Gomez Valdes' short film?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q3" value="0">
        <label class="form-check-label" for="q3a">a) Silent Voice</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q3" value="0">
        <label class="form-check-label" for="q3b">b) Murmur</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q3" value="1">
        <label class="form-check-label" for="q3c">c) Bulong (Whisper)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q3" value="0">
        <label class="form-check-label" for="q3d">d) Hush</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">4. In which university did Joaquin Pedro Gomez Valdes study?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q4" value="0">
        <label class="form-check-label" for="q4a">a) Ateneo de Manila University</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q4" value="0">
        <label class="form-check-label" for="q4b">b) University of Santo Tomas</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q4" value="1">
        <label class="form-check-label" for="q4c">c) University of the Philippines</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q4" value="0">
        <label class="form-check-label" for="q4d">d) De La Salle University</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">5. What prestigious award did Joaquin Pedro Gomez Valdes receive for his thesis?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q5" value="0">
        <label class="form-check-label" for="q5a">a) Cannes Award</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q5" value="0">
        <label class="form-check-label" for="q5b">b) Palme d'Or</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q5" value="1">
        <label class="form-check-label" for="q5c">c) Feliciano Award</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q5" value="0">
        <label class="form-check-label" for="q5d">d) Oscars</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">6. Where was "Bulong" chosen to represent the Philippines?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q6" value="1">
        <label class="form-check-label" for="q6a">a) Short Film Corner, Festival de Cannes</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q6" value="0">
        <label class="form-check-label" for="q6b">b) Sundance Film Festival</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q6" value="0">
        <label class="form-check-label" for="q6c">c) Venice Film Festival</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q6" value="0">
        <label class="form-check-label" for="q6d">d) Toronto International Film Festival</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">7. What aspect of life does "Bulong" focus on?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q7" value="0">
        <label class="form-check-label" for="q7a">a) Adventure and Exploration</label>
      </div>
      <div class="form-check">
        <input class="form-check-input"required type="radio" name="q7" value="0">
        <label class="form-check-label" for="q7b">b) Love and Romance</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q7" value="1">
        <label class="form-check-label" for="q7c">c) Life's Purpose</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q7" value="0">
        <label class="form-check-label" for="q7d">d) Political Intrigue</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">8. What international recognition did "Bulong" receive besides being chosen for the Short Film Corner, Festival de Cannes?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q8" value="0">
        <label class="form-check-label" for="q8a">a) Venice Film Festival</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q8" value="0">
        <label class="form-check-label" for="q8b">b) Sundance Film Festival</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q8" value="1">
        <label class="form-check-label" for="q8c">c) New Beijing International Movie Week</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q8" value="0">
        <label class="form-check-label" for="q8d">d) Toronto International Film Festival</label>
      </div>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="card">
    <div class="card-header">9. What theme does "Bulong" explore?</div>
    <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q9" value="0">
        <label class="form-check-label" for="q9a">a) Family dynamics</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q9" value="0">
        <label class="form-check-label" for="q9b">b) Cultural identity</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q9" value="1">
        <label class="form-check-label" for="q9c">c) Existential questions</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="q9" value="0">
        <label class="form-check-label" for="q9d">d) Environmental conservation</label>
      </div>
    </div>
  </div>
</div>

  <div class="carousel-item">
    <div class="card d-block">
     
      <div class="card-body">
        
        <center> <button type="submit" name="whisper" class="btn icon icon-left btn-primary"><i data-feather="check-circle"></i>Submit</button></center>
        
         
       
      </div>
    </div>
  </div>
              


        </div>
              <div class="d-flex justify-content-between">
              <a class="button" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="button" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
              </div>
            </div>
          </div>
        </div>
    
                
                       



                    
                    </form>
            
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