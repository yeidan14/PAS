<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Registrate</title>
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
    <div class="register-container full-height sm-p-t-30">
      <div class="d-flex justify-content-center flex-column full-height ">
        <img src="{{URL::asset('vista/assets/img/logohorizontal.png')}}" alt="logo" data-src=" {{URL::asset('vista/assets/img/logohorizontal.png')}}" data-src-retina=" {{URL::asset('vista/assets/img/logohorizontal.png')}}" width="500"  >
        <h3>Ingrese los datos necesarios para su registro</h3>
        <p>
        </p>
        <form id="form-register" class="p-t-15" role="form" action="index.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-group-default">
                <label>Nombres</label>
                <input type="text" name="fname" placeholder="Ingrese sus nombres" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group form-group-default">
                <label>Apellidos</label>
                <input type="text" name="lname" placeholder="Ingrese sus apellidos" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label>Codigo</label>
                <input type="text" name="uname" placeholder="Ingrese su codigo" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label>Contraseña</label>
                <input type="password" name="pass" placeholder="Combine Mayusculas y caracteres" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-group-default">
                <label>Email</label>
                <input type="email" name="email" placeholder="Ingrese aqui su correo" class="form-control" required>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              
                <label>Email</label>
               
                <div class="radio radio-success">
                            <input type="radio" value="1" name="optionyes" id="Estudiante">
                            <label for="Estudiante">Estudiante</label>
                            <input type="radio" checked="checked" value="2" name="optionyes" id="Docente">
                            <label for="Docente">Docente</label>
                          </div>
             
            </div>
          </div>
          
          <button class="btn btn-primary btn-cons m-t-10" type="submit">Registrarse</button>
        </form>
      </div>
    </div>
    <div class=" full-width">
      <div class="register-container m-b-10 clearfix">
        <div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up">
          
          <div class="col-md-9 no-padding d-flex align-items-center">
            <p class="hinted-text small inline sm-p-t-10">Verificar que todos los datos coincidan </p>
          </div>
        </div>
      </div>
    </div>
    <!-- START OVERLAY -->
    
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
    <script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
  </body>
</html>