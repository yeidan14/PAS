


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>ADMINIDTRADOR PAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link href="{{URL::asset('vista/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/pages/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('vista/pages/css/themes/light.css')}}" rel="stylesheet" type="text/css" />
    
   
   
    
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header ">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        
        <img src="{{URL::asset('vista/assets/img/demo/admin.jpg')}}" data-src="{{URL::asset('vista/assets/img/demo/admin.jpg')}}" data-src-retina="{{URL::asset('vista/assets/img/demo/admin.jpg')}}" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					BIENVENIDO ADMINISTRADOR</h2>
          <p class="small">
            Bases de Datos Ingenieria de sistemas UFPS © 2018
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        
          <img src="{{URL::asset('vista/assets/img/logohorizontal.png')}}" alt="logo" data-src=" {{URL::asset('vista/assets/img/logohorizontal.png')}}" data-src-retina=" {{URL::asset('vista/assets/img/logohorizontal.png')}}"  height="100">
          <!-- START Login Form -->
          <form id="form-login" class="p-t-15" role="form" method="POST">
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Administrador</label>
              <div class="controls">
                <input type="text" name="username" placeholder="Ingrese su codigo" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Contraseña</label>
              <div class="controls">
                <input type="password" class="form-control" name="password" placeholder="Ingrese su Contraseña" required>
              </div>
            </div>
            <div>
                <br><br>
            </div>
                        <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">INGRESAR</button>
          </form>
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-3 col-md-2 no-padding">
                <img alt="logo" class="m-t-5" data-src="vista/assets/img/logo.png" data-src-retina="vista/assets/img/demo/logo.png" height="35" src="vista/assets/logo.png" >
              </div>
              <div class="col-sm-9 no-padding m-t-10">
                <p>
                  <small>
Esta pagina fue creada para gestionar los prestamos de la sala de aula sur del tercer piso 
								</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="vista/assets/img/logo.png" alt="logo" data-src="vista/assets/img/logo.png" data-src-retina="vista/assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    
    <script src="{{URL::asset('vista/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/tether/js/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-actual/jquery.actual.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/classie/classie.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('vista/pages/js/pages.min.js')}}" type="text/javascript"></script>


    <!-- END VENDOR JS -->
    <script src=""></script>
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>