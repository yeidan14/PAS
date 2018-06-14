<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>PAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  
   <link rel="shortcut icon" href="{{URL::asset('vista/assets/img/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{URL::asset('vista/assets/img/favicon.ico')}}" type="image/x-icon">
<link href="{{URL::asset('vista/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('vista/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('vista/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{URL::asset('vista/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet')}}" type="text/css" media="screen" />
    <link href="{{URL::asset('vista/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{URL::asset('vista/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{URL::asset('vista/assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{URL::asset('vista/assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/css/dashboard.widgets.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{URL::asset('vista/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{URL::asset('vista/pages/css/themes/light.css')}}"
		  rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header dashboard menu-pin">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="{{URL::asset('vista/assets/img/logohorizontal.png')}}" alt="logo" class="brand" data-src="{{URL::asset('vista/assets/img/logohorizontal.png')}}" data-src-retina="{{URL::asset('vista/assets/img/logohorizontal.png')}}" width="200">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="{{route('path_home')}}" >INICIO             
              </a>          
     <span class="icon-thumbnail"><i class="pg  pg-home"></i> </span>
                  
        
              <li class="">
                <a href="{{route('path_elemento')}}">ELEMENTOS</a>
               <span class="icon-thumbnail"><i class="pg  pg-laptop"></i> </span>
              </li>
              <li class="">
                <a href="{{route('path_laboratorio')}}">LABORATORIOS</a>
                <span class="icon-thumbnail"><i class="fa fa-hospital-o"></i> </span>
              </li>
              <li class="">
                <a href="{{route('path_promedia')}}">PROMEDIA</a>
                       <span class="icon-thumbnail"><i class="fa  fa-camera"></i> </span>
              </li>           
         <li class="">
            <a href="{{route('path_politica')}}">POLITICAS</a>
             <span class="icon-thumbnail"><i class="fa  fa-file-text"></i> </span>
          
            
          </li>
          <li class="">
              <a href="{{route('path_contacto')}}"> CONTACTO </a>
              <span class="icon-thumbnail"><i class="fa   fa-comments-o
            "></i> </span>
          
          </li>
          

          
          
          
          
          
          
          
           
        <div><br><br><br><br></div>
         <div class=" container-fluid  container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
             <img src="{{URL::asset('vista/assets/img/logo.png')}}" alt="logo" class="brand" data-src="{{URL::asset('vista/assets/img/logo.png')}}" data-src-retina="{{URL::asset('vista/assets/img/logo.png')}}" width="130"><br>
              <span class="font-montserrat">BD Ingenieria de sistemas </span>.<br>
              <span class="hint-text">Copyright &copy; 2018</span><br>
              <span class="hint-text">All rights reserved. </span><br>
              <span class="sm-block"><a href="https://ww2.ufps.edu.co/" target="_blank" class="m-l-10 m-r-10">UFPS</a> <span class="muted">|</span> <a href="http://ingsistemas.ufps.edu.co/"  target="_blank" class="m-l-10">Ing de Sistemas</a></span>
            </p>
           
           
          </div>
        </div>
          
        </ul>
		  
        
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="brand inline">
          
          </div>
          
        </div>
        <div class="d-flex align-items-center">
          <!-- START NOTIFICATION LIST -->
          <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-r no-style p-l-30 p-r-20">
            <li class="p-r-10 inline">
              <div class="dropdown">
               
                <!-- START Notification Dropdown -->
                
                <!-- END Notification Dropdown -->
              </div>
            </li>
           
          </ul>
          <!-- END NOTIFICATIONS LIST -->
          <!-- START User Info-->
          <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down m-l-20">
            <span class="semi-bold">David</span> <span class="text-master">Nest</span>
          </div>
          <div class="dropdown pull-right hidden-md-down">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="thumbnail-wrapper d32 circular inline">
              <img src="{{URL::asset('vista/assets/img/profiles/avatar.jpg')}}" alt="" data-src="{{URL::asset('vista/assets/img/profiles/avatar.jpg')}}" data-src-retina="{{URL::asset('vista/assets/img/profiles/avatar_small2x.jpg')}}" width="32" height="32">
              </span>
            </button>
            
          </div>
          <!-- END User Info-->
          <a href="#" class="header-icon pg pg-power btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
     <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div  class="content " >
        
          
          @yield('laboratorio')
          @yield('home')
          @yield('elemento')
          @yield('promedia')
          @yield('politicas')
          @yield('contacto')
          
         
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
       
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->

      
    </div>
   
    <script src="{{URL::asset('vista/assets/plugins/feather-icons/feather.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/tether/js/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>    
    <script src="{{URL::asset('vista/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    
    <script type="text/javascript" src="{{URL::asset('vista/assets/plugins/select2/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="URL::asset('vista/assets/plugins/classie/classie.js')}}"></script>
    <script src="{{URL::asset('vista/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/lib/d3.v3.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/nv.d3.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/src/utils.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/src/tooltip.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/src/interactiveLayer.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/src/models/axis.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/src/models/line.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/nvd3/src/models/lineWithFocusChart.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{URL::asset('vista/assets/plugins/mapplic/js/hammer.js')}}"></script>
    <script src="{{URL::asset('vista/assets/plugins/mapplic/js/jquery.mousewheel.js')}}"></script>
    <script src="{{URL::asset('vista/assets/plugins/mapplic/js/mapplic.js')}}"></script>
    <script src="{{URL::asset('vista/assets/js/dashboard.js')}}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{URL::asset('vista/pages/js/pages.min.js')}}"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{URL::asset('vista/assets/js/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/js/scripts.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/js/form_wizard.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/js/scripts.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-autonumeric/autoNumeric.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/dropzone/dropzone.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-inputmask/jquery.inputmask.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/summernote/js/summernote.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/moment/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
    
    
   
    
    <!-- END PAGE LEVEL JS -->
  </body>
</html>