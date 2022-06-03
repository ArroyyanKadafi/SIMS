<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SCHOOL MANAGEMENT INFORMATION SYSTEM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="icon" href="/frontend/img/desktop.png" type="image/gif"/>
  <!-- box-icon -->
  <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
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
              <img src="images/faces/user.png" alt="profile"/>
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
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
         
        </div>
      </div>
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
      <!-- partial:partials/_sidebar.html -->
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
            <a class="nav-link" href="/siswa/create                                                                                                                                                                                                    ">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Student Registration</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/spp">
            <i class="ti-money menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Money Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penggajian">
            <i class="ti-credit-card menu-icon" style="margin-right: 17px; margin-left: 15px;"></i>
              <span class="menu-title" style="margin-top: 5px;">Payroll</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/spp.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Money Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/penggajian.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Payroll</span>
            </a>
          </li> -->
      </nav>

      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6"> -->
                    <h3 class="ti-book mr-3 mt-3"> Schedule Lesson</h3>
                    <div class="table-responsive">
                    <table class="table table-bordered border-secondary text-center mt-3">
                      <tr class="text-center border-secondary">
                        <th class="table-success border-secondary" rowspan="3">Time</th>
                        <th class="table-warning border-secondary" rowspan="3">Hours to</th> 
                        <th class="table-danger border-secondary"  rowspan="3">Day</th>
                        <th class="table-primary border-secondary" scope="col" colspan="13">Class</th>                                                  
                      </tr>

                        <tr>       
                            <th class="table-primary border-secondary" scope="col" colspan="3">Software Engineering</th>
                            <th class="table-primary border-secondary" scope="col" colspan="3">Computer & Network Engineering</th>
                            <th class="table-primary border-secondary" scope="col" colspan="3">Broadcasting</th>
                            <th class="table-primary border-secondary" scope="col" colspan="3">Robotic</th>
                        </tr>
                        <tr>
                          <th scope="col" class="table-primary border-secondary" >12-A</th>
                          <th scope="col" class="table-primary border-secondary" >12-B</th>
                          <th scope="col" class="table-primary border-secondary" >12-C</th>   
                          <!--  -->
                          <th scope="col" class="table-primary border-secondary" >12-A</th>
                          <th scope="col" class="table-primary border-secondary" >12-B</th>
                          <th scope="col" class="table-primary border-secondary" >12-C</th>
                          <!--  -->
                          <th scope="col" class="table-primary border-secondary" >12-A</th>
                          <th scope="col" class="table-primary border-secondary" >12-B</th>
                          <th scope="col" class="table-primary border-secondary" >12-C</th>
                          <!--  -->
                          <th scope="col" class="table-primary border-secondary" >12-A</th>
                          <th scope="col" class="table-primary border-secondary" >12-B</th>
                          <th scope="col" class="table-primary border-secondary" >12-C</th>
                        </tr>        
                      <tbody class="border-secondary">
                         <!-- @foreach ($data as $dataJadpel)      -->
                        <tr>
                          <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                          <td class="table-success border-secondary">{{ $dataJadpel->waktu }}</td>
                          <td class="table-warning border-secondary">{{ $dataJadpel->jam }}</td>
                          <td class="table-danger  border-secondary">{{ $dataJadpel->hari }}</td>
                          <td class="table-secondary border-secondary">{{ $dataJadpel->mapel }}</td>
                          <!-- <td>
                            <a href="{{ url('/jadpel/edit/'.$dataJadpel->id) }}" class="btn btn-success ti-pencil-alt mr-2"> Edit</a> 
                            <form action="{{ url('/jadpel/delete/'.$dataJadpel->id) }}" method="POST" class="d-inline">
                              @method('delete')
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger ti-trash mr-2 border-0" onclick="return confirm('Are you sure ?')"> Delete</button>
                            </form>  
                          </td> -->
                        </tr>                         
                         @endforeach
                      </tbody>                      
                    </table>
                    <a href="{{ url('jadpel/create') }}" class="btn btn-info mt-2 ti-plus mr-2 mb-5"> Add Lesson Schedule</a> 
                    <a href="#" class="btn btn-warning mt-2 ti-printer mr-2 mb-5"> Print</a>
                  </div>
                  </div>
                  <div class="col-md-6">
                   
                  </div>
                </div>
              </div>
            </div>
           
           
           
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                   
                  </div>
                  <div class="col-md-6">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-7">
                   
                  </div> 
                  <div class="col-md-5">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>
