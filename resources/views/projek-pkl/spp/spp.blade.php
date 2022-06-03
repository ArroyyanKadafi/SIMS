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
                <span class="input-group-text" id="search">
                  <i class="text-primary icon-search"></i>
                </span>
              </div>
             <!-- Search -->
             <form action="/spp/cari" method="GET">
                <input type="search" name="cari" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search" value="{{ old('cari') }}">
              </form>
              <!-- end search -->
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('images/faces') }}/user.png" alt="profile"/>

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
          <li class="nav-item active">
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
      
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            
            <!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6"> -->
                    <h3 class="ti-money mr-3 mt-3"> List of School Payments</h3>
                    <div class="table-responsive">
                    <table class="table table-hover table-light text-center mt-3 mb-3">
                      <thead class="bg-primary text-white">
                        <tr>
                          <th scope="col">No.</th>                          
                          <th scope="col">SPN</th>
                          <th scope="col">Student Name</th>
                          <th scope="col">Payment Date</th>
                          <th scope="col">Payment Month</th>
                          <th scope="col">Class</th>
                          <th scope="col">Department</th>
                          <th scope="col">Amount of Payment</th>
                          <th scope="col" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($spp as $dataSpp)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dataSpp->nis }}</td>
                            <td>{{ $dataSpp->nama }}</td>
                            <td>{{ $dataSpp->tanggal }}</td>
                            <td>{{ $dataSpp->bulan }}</td>
                            <td>{{ $dataSpp->kelas }}</td>                         
                            <td>{{ $dataSpp->jurusan }}</td>                            
                            <td>{{ $dataSpp->jumlah }}</td>
                            <td>
                              <a href="{{ url('/spp/edit/' .$dataSpp->id) }}" class="btn btn-success ti-pencil-alt mr-2"> Edit</a> 
                              
                            <form action="{{ url('/spp/delete/'.$dataSpp->id) }}" method="POST" class="d-inline">         
                            @method('delete')
                                @csrf                     
                              <!-- <input type="hidden" name="_method" value="DELETE"> -->
                              <button type="submit" class="btn btn-danger ti-trash mr-2 border-0" onclick="return confirm('Are you sure ?')"> Delete</button>
                            </form>                       
                            <a href="{{ url('/spp/print/' .$dataSpp->id) }}" target="_blank" class="btn btn-warning ti-printer"> Print</a>    
                          </td>                          
                        </tr>                       
                       @endforeach
                      </tbody>                      
                    </table>
                    <a href="{{ url('spp/create') }}" class="btn btn-info mt-2 ti-plus mr-2 mb-5"> Add Payments</a> 
                  </div>  
                  <br>
                  </div>              
                </div>
              </div>
            </div>  
  
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/') }}/off-canvas.js"></script>
  <script src="j{{ asset('js/') }}/hoverable-collapse.js"></script>
  <script src="{{ asset('js/') }}/template.js"></script>
  <script src="{{ asset('js/') }}/settings.js"></script>
  <script src="{{ asset('js/') }}/todolist.js"></script>
  <!-- End custom js for this page-->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <!-- Sweetalert -->
  @include('sweetalert::alert')
  <!-- End Sweetalert -->
</body>
</html>

