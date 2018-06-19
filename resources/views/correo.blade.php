@extends('home_admin')
          @section('correoadmin')
          <div class="social-wrapper">
            <div class="social " data-pages="social">
              <!-- START JUMBOTRON -->
              <div class="arriba" data-pages="parallax" data-social="cover">
                <div class="cover-photo">
                  <img alt="Cover photo" src="{{URL::asset('vista/assets/img/social/cover.jpg')}}" />
                </div>
                <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                  <div class="inner">
                    <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
                      <h5 class="text-white no-margin">Bienvenido a los prestamos de aula sur</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">PAS</span>| Correo</h1>
                    </div>
                  </div>
                </div>
              </div>             
            </div>        
          </div>
        
  
          <!-- START SECONDARY SIDEBAR MENU-->
          <nav class="secondary-sidebar light">
            <div class=" m-b-30 m-l-30 m-r-30 hidden-sm-down">
              <a href="email_compose.html" class="btn btn-primary btn-block btn-compose">Compose</a>
            </div>
            <p class="menu-title">BROWSE</p>
            <ul class="main-menu">
              <li class="active">
                <a href="#">
                  <span class="title"><i class="pg-inbox"></i> Inbox</span>
                  <span class="badge pull-right">5</span>
                </a>
              </li>
              <li class="">
                <a href="#">
                  <span class="title"><i class="pg-folder"></i> All mail</span>
                </a>
                <ul class="sub-menu no-padding">
                  <li>
                    <a href="#">
                      <span class="title">Important</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="title">Labeled</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <span class="title"><i class="pg-sent"></i> Sent</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="title"><i class="pg-spam"></i> Spam</span>
                  <span class="badge pull-right">10</span>
                </a>
              </li>
            </ul>
            <p class="menu-title m-t-20 all-caps">Quick view</p>
            <ul class="sub-menu no-padding">
              <li>
                <a href="#">
                  <span class="title">Documents</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="title">Flagged</span>
                  <span class="badge pull-right">5</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="title">Images</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- END SECONDARY SIDEBAR MENU -->
          <div class="inner-content full-height">
            <!-- START COMPOSE EMAIL -->
            <div class="email-composer container-fluid">
              <div class="row">
                <div class="col-md-12 no-padding">
                  <div class="wysiwyg5-wrapper email-toolbar-wrapper">
                  </div>
                  <form id="form-project" role="form" autocomplete="off">
                    <div class="form-group-attached">
                      <div class="row clearfix">
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>TO:</label>
                            <input name="to" data-role="tagsinput" class="form-control tagsinput" type="text" value="John Smith" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>CC:</label>
                            <input type="text" class="form-control" name="cc" placeholder="Add Carbon Copy">
                          </div>
                        </div>
                      </div>
                      <div class="form-group form-group-default">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject">
                      </div>
                    </div>
                  </form>
                  <div class="wysiwyg5-wrapper email-body-wrapper">
                    <textarea class="wysiwyg email-body" style="height:350px"></textarea>
                  </div>
                </div>
              </div>
              <div class="row p-b-20">
                <div class="col-md-11">
                  <button class="btn btn-white btn-cons">Cancel</button>
                  <button class="btn btn-complete btn-cons m-l-10">Send</button>
                  <div class="checkbox inline m-l-20">
                    <input type="checkbox" value="1" id="sendCC">
                    <label for="sendCC" class="hint-text hidden-sm-down">Send a <span class="text-complete">Carbon Copy</span> CC to my Primary email address.</label>
                    <label for="sendCC" class="hint-text hidden-md-up">Send me a CC</label>
                  </div>
                </div>
                <div class="col-md-1">
                  <button class="btn btn-complete pull-right">
                    <i class="pg-save"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- END COMPOSE EMAIL -->
          </div>
          <!-- END APP -->
      
          @endsection