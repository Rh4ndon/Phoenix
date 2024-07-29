<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>E-Health</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/logo-icon.png"
    />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        "
      >
        <div class="auth-box bg-dark border-top border-secondary">
          <div>
            <div class="text-center pt-3 pb-3">
              <span class="db"
                ><img src="assets/images/logo-text.png" alt="logo"
              /></span><br>
              <h2>Teacher Sign-Up</h2>
            </div>
            <!-- Form -->
            <form class="form-horizontal mt-3" method="post" action="controllers/register_controller.php">
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="username"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Username"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                  <!-- firstname -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-rename-box fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="firstname"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="First Name"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- lastname -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-rename-box fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="lastname"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Last Name"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- age -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-secondary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-format-list-numbers fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="age"
                      type="number"
                      class="form-control form-control-lg"
                      placeholder="Age"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>

                  <!-- cp -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-primary text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-contacts fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="contact"
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Contact Number"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>


                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      name="password"
                      type="password"
                      class="form-control form-control-lg"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      required
                    />
                  </div>
                  
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">
                      <button
                        name="save"
                        class="btn btn-block btn-lg btn-info"
                        type="submit"
                        disabled
                      >
                        Sign Up
                      </button>
                    </div>

                    <div class="pt-3 d-grid">
                      <a
                        href="index.php"
                        class="btn btn-block btn-lg btn-info"
                     
                      >
                        Login
                      </a>
                    </div>

                    <div class="pt-3 d-grid">
                      <a
                        href="../../projects.html"
                        class="btn btn-block btn-lg btn-info"
                     
                      >
                        Rhandon.tech
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
    </script>
  </body>
</html>
