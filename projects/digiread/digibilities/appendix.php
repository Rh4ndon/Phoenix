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
                class="sidebar-item">
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
                class="sidebar-item active">
                <a href="#" class='sidebar-link'>
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
    <h3><?= $row_students['name']?> / Appendix <img src="./assets/compiled/svg/circles.svg" class="me-4" style="width: 2rem" alt="audio"></h3>
</div> 

<!--/Page title -->


<!-- Page Body -->

<div class="page-content"> 

    <section class="row">



        <div class="col-12 col-lg-12">
    
                    <div class="card">
                        <div class="card-header">
                            <h4>Appendix / Apendiks</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Word / Salita</th>
                                            <th>Definition / Kahulugan</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        
                                        
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Greedy  (sakim, matakaw)</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">/ˈɡrēdē/</p>
                                                <p class=" mb-0">having or showing an intense and selfish desire for something, especially wealth or power.
                                                </p>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Lazing (tamad, tinatamad)
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">/ley-zing/</p>
                                                <p class=" mb-0">spend time in a relaxed, lazy manner.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Shook (nagukat)
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">/SHo͝ok/</p>
                                                <p class=" mb-0">verb, 
                                                past of shake.</p>
                                                <p class=" mb-0">
                                                    adjective,
                                                    emotionally or physically disturbed; upset.</p>

                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0">Crisp (malutong)

                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">/krisp/</p>
                                                <p class="font-bold mb-0">adjective</p>
                                                <p class=" mb-0">
                                                    1. {of a substance) firm, dry, and brittle, especially in a way considered pleasing or attractive.</p>
                                                </p>
                                                <p class=" mb-0">"crisp bacon"</p>
                                                <p class=" mb-0">
                                                2. (of a way of speaking or writing) briskly decisive and matter-of-fact, without hesitation or unnecessary detail.</p>
                                                <p class=" mb-0">"they were cut off with a crisp “Thank you.”"</p>

                                            </td>
                                        </tr>

                                        <tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Awake (nagising)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/əˈwāk/</p>
        <p class=" mb-0">verb, past tense: awoke</p>
        <p class=" mb-0">stop sleeping; wake from sleep.</p>
        <p class=" mb-0">"she awoke to find the streets covered in snow"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Pity (awa, naawa)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">noun</p>
        <p class=" mb-0">sympathetic sorrow for one suffering, distressed, or unhappy.</p>
        <p class=" mb-0">b. capacity to feel pity.</p>
        <p class=" mb-0">2. something to be regretted.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Horrible (kasuklam-suklam, nakakatakot)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">1. marked by or arousing painful and intense fear, dread, dismay, or aversion.</p>
        <p class=" mb-0">"a horrible accident"</p>
        <p class=" mb-0">2. extremely bad or unpleasant.</p>
        <p class=" mb-0">"a horrible mistake"</p>
        <p class=" mb-0">"horrible food"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Frightened (takot, natatakot, natakot)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">feeling fear : made to feel afraid</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Flapped (nag-flap)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">verb</p>
        <p class=" mb-0">to move or cause to move with a striking motion</p>
        <p class=" mb-0">"the stirring sight of a huge flock of geese flapping their wings"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Plow (araro, pag-aararo)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/plou/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">gerund or present participle: plowing</p>
        <p class=" mb-0">1. turn up the earth of (an area of land) with a plow, especially before sowing.</p>
        <p class=" mb-0">"Uncle Vic plowed his garden"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Fine (magaling)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/fīn/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">superlative adjective: finest (pinakamagaling)</p>
        <p class=" mb-0">1. of high quality.</p>
        <p class=" mb-0">"this was a fine piece of filmmaking"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Oblige (obligado)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/əˈblīj/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: obliged; past participle: obliged</p>
        <p class=" mb-0">make (someone) legally or morally bound to an action or course of action.</p>
        <p class=" mb-0">"doctors are obliged by law to keep patients alive while there is a chance of recovery"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Sublime (dakila)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/səˈblīm/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">1. of such excellence, grandeur, or beauty as to inspire great admiration or awe.</p>
        <p class=" mb-0">"Mozart's sublime piano concertos"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Gruff (masungit)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ɡrəf/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">(of a voice) rough and low in pitch.</p>
        <p class=" mb-0">"she spoke with a gruff, masculine voice"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Gobble (nilamon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈɡäbəl/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: gobbled; past participle: gobbled</p>
        <p class=" mb-0">1. eat (something) hurriedly and noisily.</p>
        <p class=" mb-0">"one man gobbled up a burger"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Enormous (napakalaking)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">extraordinarily great in size</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Cloak (balabal)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/klōk/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">an outdoor overgarment, typically sleeveless, that hangs loosely from the shoulders.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Awdle</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈdôd(ə)l,ˈdäd(ə)l/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">waste time; be slow.</p>
        <p class=" mb-0">"I couldn't dawdle over my coffee any longer"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Flit (lumipad)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/flit/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">move swiftly and lightly.</p>
        <p class=" mb-0">"small birds flitted about in the branches"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center"><p class="font-bold ms-3 mb-0">Muster (magpapatalsik)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈməstər/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">1. assemble (troops), especially for inspection or in preparation for battle.</p>
        <p class=" mb-0">"17,000 men had been mustered on Haldon Hill"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Burp (dighay)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/bərp/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">noisily release air from the stomach through the mouth; belch.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Poke (sundutin)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/pōk/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: poked; past participle: poked</p>
        <p class=" mb-0">1. jab or prod (someone or something), especially with one's finger.</p>
        <p class=" mb-0">"he poked Benny in the ribs and pointed"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Squeak (tili)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/skwēk/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: squeaked; past participle: squeaked</p>
        <p class=" mb-0">1. make a high-pitched sound or cry.</p>
        <p class=" mb-0">"he oiled the hinges to stop them from squeaking"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Quivering (nanginginig)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈkwiv(ə)riNG/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">trembling or shaking with a slight rapid motion.</p>
        <p class=" mb-0">"a man with a quivering voice"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Leap (lumundag)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/lēp/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: leapt; past participle: leapt</p>
        <p class=" mb-0">1. jump or spring a long way, to a great height, or withgreat force.</p>
        <p class=" mb-0">"I leaped across the threshold"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Frazzled (nanlumo)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈfrazəld/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">INFORMAL</p>
        <p class=" mb-0">1. INFORMAL</p>
        <p class=" mb-0">showing the effects of exhaustion or strain.</p>
        <p class=" mb-0">"a long line of screaming children and frazzled parents"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Dawdle</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈdôd(ə)l,ˈdäd(ə)l/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">waste time; be slow.</p>
        <p class=" mb-0">"I couldn't dawdle over my coffee any longer"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Boastful (mayabang)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈbōs(t)f(ə)l/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">showing excessive pride and self-satisfaction in one's achievements, possessions, or abilities.</p>
        <p class=" mb-0">"he always seemed to be rather boastful and above himself"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Inability (kawalan ng kakayahan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˌinəˈbilədē/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">the state of being unable to do something.</p>
        <p class=" mb-0">"his inability to accept new ideas"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Bragging (pagmamayabang)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈbraɡiNG/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">excessively proud and boastful talk about one's achievements or possessions.</p>
        <p class=" mb-0">"she interrupted their endless bragging"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Amused (nilibang)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">pleasantly entertained or diverted</p>
        <p class=" mb-0">: pleasantly entertained or diverted (as by something funny)</p>
        <p class=" mb-0">"She seemed slightly amused by his explanation."</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Audacity (kapangahasan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ôˈdasədē,äˈdasədē/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. a willingness to take bold risks.</p>
        <p class=" mb-0">"her audacity came in handy during our most recent emergency"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Smug (mayabang)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">self-satisfied</p>
        <p class=" mb-0">A smug person is self-satisfied. You can usually recognize someone who is pleased with himself by his smug little smile and self-righteous remarks. Smug is the opposite of modest and unsure. In cartoons, the smug character often walks around with his chest puffed out and his ego leading the way.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Spare (ekstra)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/sper/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">1. additional to what is required for ordinary use.</p>
        <p class=" mb-0">"few people had spare cash for inessentials"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Inch (pulgada)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/in(t)SH/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. a unit of linear measure equal to one twelfth of a foot (2.54 cm).</p>
        <p class=" mb-0">"the toy train is four inches long"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Lazily (tamad)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈlāzəlē/</p>
        <p class=" mb-0">adverb</p>
        <p class=" mb-0">1. in a manner that shows an unwillingness to exert oneself physically.</p>
        <p class=" mb-0">"he had been lounging lazily on a large rock"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Deliberate (sinadya)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/dəˈlib(ə)rət/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">1. done consciously and intentionally.</p>
        <p class=" mb-0">"a deliberate attempt to provoke conflict"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Unbeknown (hindi alam)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˌənbəˈnōn/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">adjective: unbeknownst</p>
        <p class=" mb-0">without the knowledge of (someone).</p>
        <p class=" mb-0">"unbeknown to me, she made some inquiries"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Gather (magtipon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈɡaT͟Hər/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">1. come together; assemble or accumulate.</p>
        <p class=" mb-0">"a crowd gathered in the square"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Annual (taon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">happening every year</p>
        <p class=" mb-0">: occurring or happening every year or once a year : yearly.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Conducted (isinagawa)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/kənˈdək(t)əd/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">led by a guide; managed.</p>
        <p class=" mb-0">"a conducted tour"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Slip (dulas)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/slip/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">3rd person present: slips</p>
        <p class=" mb-0">1. (of a person or animal) slide unintentionally for a short distance, typically losing one's balance or footing.</p>
        <p class=" mb-0">"I slipped on the ice"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Underlying (pinagbabantayan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˌəndərˈlīiNG/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">present participle of underlie.</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">1. lying or situated under something.</p>
        <p class=" mb-0">"the underlying muscles of the face"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Pile (sangkatutak)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/pīl/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. a heap of things laid or lying one on top of another.</p>
        <p class=" mb-0">"he placed the books in a neat pile"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Glance (sulyap)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ɡlans/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">3rd person present: glances</p>
        <p class=" mb-0">1. take a brief or hurried look.</p>
        <p class=" mb-0">"Ginny glanced at her watch"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Indicate (nagsasaad)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈindəˌkāt/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">gerund or present participle: indicating</p>
        <p class=" mb-0">1. point out; show.</p>
        <p class=" mb-0">"dotted lines indicate the text's margins"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Uphold (naninindigan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˌəpˈhōld/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: upheld; past participle: upheld</p>
        <p class=" mb-0">confirm or support (something which has been questioned).</p>
        <p class=" mb-0">"the court upheld his claim for damages"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Plead (nagsusumamo)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/plēd/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">3rd person present: pleads</p>
        <p class=" mb-0">1. make an emotionalappeal.</p>
        <p class=" mb-0">""Don't go," she pleaded"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Abruptly (bigla)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">suddenly</p>
        <p class=" mb-0">abruptly adverb (suddenly)</p>
        <p class=" mb-0">in a sudden, unexpected, and sometimes unpleasant way: He stood up abruptly and went outside. The talks ended abruptly when one of the delegations walked out in protest. Fewer examples. The call ended abruptly.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Adherence (pagsunod)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">being faithful to</p>
        <p class=" mb-0">Adherence means "sticking to" or "being faithful to," such as your adherence to your diet even when chocolate cake is around, or students' adherence to school rules — they do not use cell phones or music players in class.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Demise (pagkamatay)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/dəˈmīz/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. a person's death.</p>
        <p class=" mb-0">"Mr. Grisenthwaite's tragic demise"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Commentary (komento)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈkämənˌterē/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. an expression of opinions or offering of explanations about an event or situation.</p>
        <p class=" mb-0">"an editorial commentary"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Conformity (pagsang-ayon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">1. agreement in form, manner, or character.</p>
        <p class=" mb-0">behaved in conformity with their beliefs.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Mob (nagkakagulong mga tao)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">a large and disorderly crowd of people</p>
        <p class=" mb-0">: a large and disorderly crowd of people. especially : one bent on riotous or destructive action.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Cruelty (kalupitan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈkro͞o(ə)ltē/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">callous indifference to or pleasure in causing pain and suffering.</p>
        <p class=" mb-0">"he has treated her with extreme cruelty"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Elderly (matanda)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈeldərlē/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">(of a person) old or aging.</p>
        <p class=" mb-0">"she was elderly and silver-haired"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Eager (sabik)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈēɡər/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">(of a person) wanting to do or have something very much.</p>
        <p class=" mb-0">"the man was eager to please"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Plantation (plantasyon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/planˈtāSH(ə)n/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. an estate on which crops such as coffee, sugar, and tobacco are cultivated by resident labor.</p>
        <p class=" mb-0">2. an area in which trees have been planted, especially for commercial purposes.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Manipulate (manipulahin)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/məˈnipyəˌlāt/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">1. handle or control (a tool, mechanism, etc.), typically in a skillful manner.</p>
        <p class=" mb-0">"he manipulated the dials of the set"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Misfit (hindi angkop)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">a person who is not easily accepted by other people, often because their behavior is very different from that of everyone else.</p>
        <p class=" mb-0">American English: misfit /ˈmɪsfɪt/</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Plea (pagsusumamo)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">noun</p>
        <p class=" mb-0">plural noun: pleas</p>
        <p class=" mb-0">1. a request made in an urgent and emotional manner.</p>
        <p class=" mb-0">"he made a dramatic plea for disarmament"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Epiphany (epifania)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">: a usually sudden manifestation or perception of the essential nature or meaning of something.</p>
        <p class=" mb-0">2. : an intuitive grasp of reality through something (such as an event) usually simple and striking.</p>
        <p class=" mb-0">3. : an illuminating discovery, realization, or disclosure.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Companion (kasama)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/kəmˈpanyən/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. a person or animal with whom one spends a lot of time or with whom one travels.</p>
        <p class=" mb-0">"his traveling companion"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Dispose (itapon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/dəˈspōz/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">1. get rid of by throwing away or giving or selling to someone else.</p>
        <p class=" mb-0">"people now have substantial assets to dispose of after their death"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Bustling (abala)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">full of lively activity</p>
        <p class=" mb-0">: full of lively activity : busily astir. a bustling market. bustling streets.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Devoted (tapat)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">Being devoted to something means being focused on that particular thing almost exclusively. When you are devoted to a cause, you work to achieve its goals. When you are devoted to a person, you place their needs above your own. Being devoted doesn't have to refer only to personal relationships.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Pursuit (pagtugis)</p>
        </div></td>
    <td class="col-auto">
        <p class=" mb-0">/pərˈso͞ot/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. the action of following or pursuing someone or something.</p>
        <p class=" mb-0">"the cat crouched in the grass in pursuit of a bird"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Emptiness (kawalan ng laman)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈem(p)tēnəs/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. the state of containing nothing.</p>
        <p class=" mb-0">"the vast emptiness of space"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Despite (sa kabila)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">without being prevented by</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Neglect (kapabayaan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/nəˈɡlek(t)/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">gerund or present participle: neglecting</p>
        <p class=" mb-0">1. fail to care for properly.</p>
        <p class=" mb-0">"the old churchyard has been sadly neglected"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Forsaken (pinabayaan)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">to renounce or turn away from entirely</p>
        <p class=" mb-0">friends have forsaken her.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Relentless (walang humpay)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/rəˈlen(t)ləs/</p>
        <p class=" mb-0">adjective</p>
        <p class=" mb-0">oppressively constant; incessant.</p>
        <p class=" mb-0">"the relentless heat of the desert"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Accolade (pagpupugay)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/ˈakəˌlād/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">plural noun: accolades</p>
        <p class=" mb-0">1. an award or privilege granted as a special honor or as an acknowledgment of merit.</p>
        <p class=" mb-0">"the ski resort achieved the ultimate accolade of playing host to the Winter Olympics"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Accumulate (makaipon)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/əˈkyo͞om(y)əˌlāt/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: accumulated; past participle: accumulated</p>
        <p class=" mb-0">gather together or acquire an increasing number or quantity of.</p>
        <p class=" mb-0">"investigators have yet to accumulate enough evidence"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Amend (baguhin)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/əˈmend/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">3rd person present: amends</p>
        <p class=" mb-0">make minor changes in (a text) in order to make it fairer, more accurate, or more up-to-date.</p>
        <p class=" mb-0">"the rule was amended to apply only to nonmembers"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Mend (tagpi)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/mend/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">repair (something that is broken or damaged).</p>
        <p class=" mb-0">"workmen were mending faulty cabling"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Sought (hinanap)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">to go in search of : look for</p>
        <p class=" mb-0">: to go in search of : look for. b. : to try to discover. 3. : to ask for : request.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Vow (panata)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/vou/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">past tense: vowed; past participle: vowed</p>
        <p class=" mb-0">1. solemnly promise to do a specified thing.</p>
        <p class=" mb-0">"I vowed that my family would never go hungry"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Solace (aliw)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">comfort in</p>
        <p class=" mb-0">1. : comfort in times of grief or worry. 2. : something that gives comfort.</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Delve (bungkalin)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/delv/</p>
        <p class=" mb-0">verb</p>
        <p class=" mb-0">3rd person present: delves</p>
        <p class=" mb-0">1. reach inside a receptacle and search for something.</p>
        <p class=" mb-0">"she delved in her pocket"</p>
    </td>
</tr>

<tr>
    <td class="col-3">
        <div class="d-flex align-items-center">
            <p class="font-bold ms-3 mb-0">Redemption (pagtubos)</p>
        </div>
    </td>
    <td class="col-auto">
        <p class=" mb-0">/rəˈdem(p)SH(ə)n/</p>
        <p class=" mb-0">noun</p>
        <p class=" mb-0">1. the action of saving or being saved from sin, error, or evil.</p>
        <p class=" mb-0">"God's plans for the redemption of his world"</p>
    </td>
</tr>


                                        


                                    </tbody>
                                </table>


                                
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