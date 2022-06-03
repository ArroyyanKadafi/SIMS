<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/feather') }}/feather.css">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css') }}/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('vendors/css') }}/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light') }}/style.css">
  <!-- endinject -->
  <link rel="icon" href="/frontend/img/desktop.png" type="image/gif"/>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">   
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-3 ti-desktop" href="/dashboard"> Eloquence</a>
        <a class="navbar-brand brand-logo-mini ti-desktop" href="/dashboard"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('images/faces/') }}/user.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a href="{{ url('/logout') }}" class="dropdown-item">                
               <i class="ti-power-off text-primary"></i>
               Logout
              </a>
            </div>
          </li>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->     
      <div id="right-sidebar" class="settings-panel">
        
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              
            </div>            
      
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">              
            </div>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
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
          <li class="nav-item active">
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
          </li>           -->
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
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">  
                <!-- <div class="row"> -->
                  <div class="col-md-6">
                    <h3 class="ti-pencil-alt mr-3 mt-3 ml-3"> Form Edit Student</h3><hr style="width: 150vh;">

                    <form action="{{ url('/siswa/update/'.$data->id) }}" method="POST" class="ml-3 mt-3">
                    @method('PUT') 
                        @csrf
                        <div class="mb-3">
                            <label for="nis" class="form-label">SPN :</label>
                            <input type="text" name="nis" class="form-control" id="nis" style="width: 120vh;" value="{{$data->nis}}">
                        </div>
                        <div class="mb-3">
                            <label for="nama_siswa" class="form-label">Student Name :</label>
                            <input type="text" name="nama" class="form-control" id="nama_siswa" style="width: 120vh;" value="{{$data->nama}}">
                        </div>                        
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Place of Birth :</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" style="width: 120vh;" value="{{$data->tempat_lahir}}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Date of Birth :</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" style="width: 120vh;" value="{{$data->tanggal_lahir}}">
                        </div>
                        <div class="mb-3">                            
                            <label for="disabledSelect" class="form-label">Gender :</label>
                            <select id="disabledSelect" name="jk" class="form-select" style="width: 120vh;" value="{{$data->jk}}">
                                <option selected>Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">                            
                            <label for="disabledSelect" class="form-label">Religion :</label>
                            <select id="disabledSelect" name="agama" class="form-select" style="width: 120vh;" value="{{$data->agama}}">
                                <option selected>Choose Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Christian">Christian</option>
                                <option value="Protestant">Protestant</option>
                                <option value="Chatolic">Chatolis</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Confucius">Confucius</option>
                            </select>
                        </div>
                        <div class="mb-3">                            
                            <label for="disabledSelect" class="form-label">Blood Type :</label>
                            <select id="disabledSelect" name="gol_dar" class="form-select" style="width: 120vh;" value="{{$data->gol_dar}}">
                                <option selected>Choose Blood Type</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Class :</label>
                            <input type="text" name="kelas" class="form-control" id="class" style="width: 120vh;" value="{{$data->kelas}}">
                        </div>
                        <div class="mb-3">                            
                            <label for="disabledSelect" class="form-label">Department :</label>
                            <select id="disabledSelect" name="jurusan" class="form-select" style="width: 120vh;" value="{{$data->jurusan}}">
                                <option selected>Choose Department</option>
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Computer & Network Engineering">Computer & Network Engineering</option>
                                <option value="Broadcasting">Broadcasting</option>                               
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="number_telp" class="form-label">Number Telephone :</label>
                            <input type="text" name="no_telp" class="form-control" id="number_telp" style="width: 120vh;" value="{{$data->no_telp}}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Address :</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" style="width: 120vh;" value="{{$data->alamat}}">
                        </div>                        
                            <button type="submit" class="btn btn-primary mb-3 float-right">Update</button>
                    </form>            
                  </div>
                  <div class="col-md-6">                    
                  </div>
                </div>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('vendors/js') }}/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js') }}/off-canvas.js"></script>
  <script src="{{ asset('js') }}/hoverable-collapse.js"></script>
  <script src="{{ asset('js') }}/template.js"></script>
  <script src="{{ asset('js') }}/settings.js"></script>
  <script src="{{ asset('js') }}/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
