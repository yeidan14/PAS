@extends('principal')
        @section('home')

          <div class="social-wrapper">
            <div class="social " data-pages="social">
              <!-- START JUMBOTRON -->
              <div class="jumbotron" data-pages="parallax" data-social="cover">
                <div class="cover-photo">
                  <img alt="Cover photo" src="{{URL::asset('vista/assets/img/social/cover.jpg')}}" />
                </div>
                <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                  <div class="inner">
                    <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
 <h1 class="text-white no-margin"><span class="semi-bold">Bienvenido</span> 
                      <h5 class="text-white no-margin">Bienvenido a los pretsamos de aula sur</h5>
                     </h1>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END JUMBOTRON -->
              
              <!-- END CONTAINER FLUID -->
            </div>
            <!-- /container -->
          </div>

        @endsection