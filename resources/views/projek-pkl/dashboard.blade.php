<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/feather/') }}/feather.css">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/') }}/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('}vendors/css/') }}/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/')}}/style.css">
  <!-- endinject -->
  <link rel="icon" href="/frontend/img/desktop.png" type="image/gif"/>
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title> -->
  <!-- plugins:css -->
  <!-- <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css"> -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css"> -->
  <!-- End plugin css for this page -->
  <!-- fontawesome -->
  <!-- <link rel="stylesheet" href="/frontend/fontawesome-free-6/css/all.min.css"> -->
  <!-- inject:css -->
  <!-- <link rel="stylesheet" href="css/vertical-layout-light/style.css"> -->
  <!-- endinject -->
  <!-- <link rel="icon" href="/frontend/img/desktop.png" type="image/gif"/> -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-3 ti-desktop" href="/dashboard"> Eloquence</a>
        <a class="navbar-brand brand-logo-mini ti-desktop" href="/dashboard"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="text-primary icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <!-- <span class="input-group-text" id="search">
                  <i class="text-primary icon-search"></i>
                </span> -->
              </div>
             <!-- Search -->
             <!-- <form action="/all/cari" method="GET">
                <input type="search" name="cari" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search" value="{{ old('cari') }}">
              </form> -->
              <!-- end search -->
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/user.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <!-- <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a> -->
              <a href="{{ url('/logout') }}" class="dropdown-item">                
               <i class="ti-power-off text-primary"></i>
               Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <!-- <div id="settings-trigger"><i class="ti-settings"></i></div> -->
        <div id="theme-settings" class="settings-panel">
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">             
            </div>
            <div class="list-wrapper px-3">                                                                         
            </div>
          </div>          
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <!-- Sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title" style="margin-top: 5px;">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title" style="margin-top: 5px;">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/jurusan">Department</a></li>
                <li class="nav-item"> <a class="nav-link" href="/kelas">Class</a></li>
                <li class="nav-item"> <a class="nav-link" href="/mapel">Subject</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/guru">            
              <i class="ti-user menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Teacher Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/siswa">
            <i class="ti-star menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Student Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/siswa/create">
            <i class="ti-pencil-alt menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">New Student Registration</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/card">
            <i class="ti-agenda menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Lesson Schedule</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="/siswa/create">
            <i class="ti-bookmark-alt menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Attendance</span>
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="/spp">
            <i class="ti-money menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">School Payments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penggajian">
            <i class="ti-credit-card menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Payroll</span>
            </a>
          </li>
           
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-bookmark-alt menu-icon"></i>
              <span class="menu-title"  style="margin-top: 5px;">Attendance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Teacher Absence </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Studdent Absence </a></li>
              </ul>
            </div>
          </li>         -->
      </nav>
      <!-- end Sidebar -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!--  -->
          <!-- <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Arroyyan</h3>
                  <h6 class="font-weight-normal mb-0 text-warning">All systems are running smoothly !</h6>
                </div>
              </div>
            </div>
          </div> -->
        
      <!-- card -->
      <div>
        <div class="container">   
          <div class="row">
            <div class="col-md-12 grid-margin transparent">                  
              <div class="row">              
                <div class="col-sm-3 col-md-12 col-lg-3">
                  <div class="card card-tale mb-4 stretch-card transparent">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="ti-user"></i>
                      </div>
                      <p class="mb-4" style="font-size: 15px;">Teacher Data</p>
                      <p class="fs-30 mb-3">{{ $guru }}</p>
                      <p><a href="/guru" class="link text-white mt-3" style="font-size: 18px;">Details <i class="ti-angle-double-right" style="font-size: 13px;"></i></a></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 col-md-12 col-lg-3">
                  <div class="card card-dark-blue mb-4 stretch-card transparent">
                    <div class="card-body">
                    <div class="card-body-icon">
                        <i class="ti-star"></i>
                      </div>
                      <p class="mb-4" style="font-size: 15px;">Student Data</p>
                      <p class="fs-30 mb-3">{{ $siswa }}</p>
                      <p><a href="/siswa" class="text-white mt-3" style="font-size: 18px;">Details <i class="ti-angle-double-right" style="font-size: 13px;"></i></a></p>
                    </div>
                  </div>
                </div>              
              <div class="col-sm-3 col-md-12 col-lg-3">
                <div class="card card-light-blue  mb-4 stretch-card transparent">
                  <div class="card-body">
                  <div class="card-body-icon">
                        <i class="ti-medall-alt"></i>
                      </div>
                    <p class="mb-4" style="font-size: 15px;">Department</p>
                    <p class="fs-30 mb-3">{{ $jurusan }}</p>
                    <p><a href="/jurusan" class="text-white mt-3" style="font-size: 18px;">Details <i class="ti-angle-double-right" style="font-size: 13px;"></i></a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 col-md-12 col-lg-3">
                <div class="card card-light-danger mb-4 stretch-card transparent">
                  <div class="card-body">
                  <div class="card-body-icon">
                        <i class="ti-blackboard"></i>
                      </div>
                    <p class="mb-4" style="font-size: 15px;">Class</p>
                    <p class="fs-30 mb-3">{{ $kelas }}</p>
                    <p><a href="/kelas" class="text-white mt-3" style="font-size: 18px;">Details <i class="ti-angle-double-right" style="font-size: 13px;"></i></a></p>
                  </div>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
      </div>   
        
<!-- Card --> 
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
        <div class="col mb-3">
          <div class="card h-100">
            <img src="/frontend/img/user.png" class="card-img-top rounded mx-auto d-block mt-3" style="width: 150px;">
            <div class="card-body">
              <h5 class="card-title text-center">Callister Faust</h5>
              <p class="card-text text-center">Principal</p>
            </div>
          </div>
        </div>        
        <div class="col mb-3">
          <div class="card h-100">
            <img src="/frontend/img/user4.png" class="card-img-top rounded mx-auto d-block mt-3" style="width: 150px;">
            <div class="card-body">
              <h5 class="card-title text-center">Icarus Verlin</h5>
              <p class="card-text text-center">Vice Principal</p>
            </div>
          </div>
        </div>
        <div class="col mb-3">
          <div class="card h-100">
            <img src="/frontend/img/user2.png" class="card-img-top rounded mx-auto d-block mt-3" style="width: 150px;">
            <div class="card-body">
              <h5 class="card-title text-center">Qiana Noreen</h5>
              <p class="card-text text-center">Head of Department</p>
            </div>
          </div>
        </div>
        <div class="col mb-3">
            <div class="card h-100">
              <img src="/frontend/img/user3.png" class="card-img-top rounded mx-auto d-block mt-3" style="width: 150px;">
              <div class="card-body">
                <h5 class="card-title text-center">Gina Wynne</h5>
                <p class="card-text text-center">Vice Head of Department</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- <div class="row">
    <div class="card-deck mb-5">        
          <div class="row row-cols-1 row-cols-md-4 g-4">

          <div class="col">
            <div class="card mb-4 mr-4" style="width: 14rem; height: 19rem;">
              <div class="circle">
                <img src="/images/user.png" class="card-img-top">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Principical</h5>
                <h5 class="card-text">Mark Gilbert</h5>            
              </div>
            </div> 
            </div>         

            <div class="card mb-4" style="width: 14rem; height: 19rem;">
              <div class="circle">
                <img src="/images/user4.png" class="card-img-top">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Deputy Principical</h5>
                <h5 class="card-text">Alexander Vinicius</h5>            
              </div>
            </div>        

            <div class="card mb-4 mr-4" style="width: 14rem; height: 19rem;">
              <div class="circle">
                <img src="/images/user5.png" class="card-img-top">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Head Of Department</h5>
                <h5 class="card-text">Stefany Cornelius</h5>            
              </div>
            </div>

            <div class="card mb-4" style="width: 14rem; height: 19rem;">
              <div class="circle">
                <img src="/images/user6.png" class="card-img-top">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">Deputy Head Of Department</h5>
                <h5 class="card-text">Abella Chiara</h5>            
              </div>
            </div>
          
      </div>
    </div>
  </div>  -->
  
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer>  -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/') }}/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/') }}/off-canvas.js"></script>
  <script src="j{{ asset('js/') }}/hoverable-collapse.js"></script>
  <script src="{{ asset('js/') }}/template.js"></script>
  <script src="{{ asset('js/') }}/settings.js"></script>
  <script src="{{ asset('js/') }}/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>
</html>

