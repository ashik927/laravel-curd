<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{URL :: asset('admin/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{URL :: asset('admin/assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/date-picker.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{URL :: asset('admin/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/responsive.css')}}">
    <!--Datable -->
    <link rel="stylesheet" type="text/css" href="{{URL :: asset('admin/assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
     <!--End Datable -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  </head>
  <body >
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">    </fecolormatrix>
        </filter>
      </svg>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="/"><img class="img-fluid" src="admin/assets/images/logo/logo.png" alt=""></a></div>
          </div>

          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"></i></div>
         
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-secondary">2</span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-600 font-roboto">You have 3 notifications</p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p class="mb-0"><i class="fa fa-circle-o mr-3 font-warning"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                </ul>
              </li>
              
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0">
                <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="">
                  <div class="media-body"><span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><i data-feather="user"></i><span>Account </span></li>
                  <li><i data-feather="mail"></i><span>Inbox</span></li>
                  <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                  <li><i data-feather="settings"></i><span>Settings</span></li>
                  <li><i data-feather="log-in"> </i><span>Log in</span></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        
        <header class="main-nav">
          <div class="logo-wrapper"><a href="/"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
          <div class="logo-icon-wrapper"><a href="/"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                  </li>
                  <li 
                      class="dropdown"><a class="nav-link " href="/"><i data-feather="home"></i><span>Dashboard</span></a>
                  </li>

                  <li 
                      class="dropdown"><a class="nav-link" href="/category"><i data-feather="slack"></i><span>Category</span></a>
                  </li>
                <li
                class="dropdown"><a class="nav-link" href="/review"><i data-feather="slack"></i><span>review</span></a>
               </li>
               <li 
               class="dropdown"><a class="nav-link" href="/seo"><i data-feather="slack"></i><span>Seo</span></a>
              </li>
              <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="trello"></i><span>Order</span></a>
                <ul class="nav-submenu menu-content">
                  <li>
                    <a  href=/order>All</a>
                  </li>
                  <li>
                    <a  href="#">Review</a>
                  </li>
                </ul>
              </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="trello"></i><span>Product</span></a>
                    <ul class="nav-submenu menu-content">
                      <li>
                        <a  href=/product>All</a>
                      </li>
                      <li>
                        <a  href="#">Add</a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="server"></i><span>Tables</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a class="submenu-title" href="#">Bootstrap Tables<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                          <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                          <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                          <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                          <li><a href="table-components.html">Table components</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Data Tables<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datatable-basic-init.html">Basic Init</a></li>
                          <li><a href="/datatable-advance">Advance Init</a></li>
                          <li><a href="datatable-styling.html">Styling</a></li>
                          <li><a href="datatable-AJAX.html">AJAX</a></li>
                          <li><a href="datatable-server-side.html">Server Side</a></li>
                          <li><a href="datatable-plugin.html">Plug-in</a></li>
                          <li><a href="datatable-API.html">API</a></li>
                          <li><a href="datatable-data-source.html">Data Sources</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Ex. Data Tables<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                       
                      </li>
                     
                    </ul>
                  </li>
                 
                  <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="file-text"></i><span>Forms</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a class="submenu-title" href="#">Form Controls<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="form-validation.html">Form Validation</a></li>
                          <li><a href="base-input.html">Base Inputs</a></li>
                          <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                          <li><a href="input-group.html">Input Groups</a></li>
                          <li><a href="megaoptions.html">Mega Options</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Form Widgets<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datepicker.html">Datepicker</a></li>
                          <li><a href="time-picker.html">Timepicker</a></li>
                          <li><a href="datetimepicker.html">Datetimepicker</a></li>
                          <li><a href="daterangepicker.html">Daterangepicker</a></li>
                          <li><a href="touchspin.html">Touchspin</a></li>
                          <li><a href="select2.html">Select2</a></li>
                          <li><a href="switch.html">Switch</a></li>
                          <li><a href="typeahead.html">Typeahead</a></li>
                          <li><a href="clipboard.html">Clipboard</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Form layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="default-form.html">Default Forms</a></li>
                          <li><a href="form-wizard.html">Form Wizard 1</a></li>
                          <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                          <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                          <li><a href="form-wizard-four.html">Form Wizard 4</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                 
                 
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
          @if(session()->has('success'))
          <div class="alert alert-success">
              {{ session()->get('success') }}
          </div>
      @endif
        </header>
        <!-- Page Sidebar Ends-->
       
         
            @yield('content')
          
          <!-- Container-fluid starts-->
         
          <!-- Container-fluid Ends-->
        
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2020 © Ashik All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{URL :: asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{URL :: asset('admin/assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/bootstrap/bootstrap.js')}}"></script>
    <!-- feather icon js-->
    <!-- <script src="https://unpkg.com/feather-icons"></script> -->
    <!-- <script src="{{URL :: asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script> -->
    <!-- Sidebar jquery-->
    <script src="{{URL :: asset('admin/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{URL :: asset('admin/assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/chart/knob/knob-chart.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/dashboard/default.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/notify/index.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    
    <!--Datatale Plugins JS start-->
    <script src="{{URL :: asset('admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    
    <!--Datatale Plugins JS Ends-->
    <script>
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
 } );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    {{--end copy paste pluhin --}}

    <!-- Theme js-->
    <script src="{{URL :: asset('admin/assets/js/script.js')}}"></script>
    <script src="{{URL :: asset('admin/assets/js/theme-customizer/customizer.js')}}"></script>
     <script>
      feather.replace()
    </script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>