@extends('principal')
          @section('prestamo')
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
                      <h1 class="text-white no-margin"><span class="semi-bold">PAS</span>| Prestamos Realizados</h1>
                    </div>
                  </div>
                </div>
              </div>             
            </div>        
          </div>
         <div class=" container-fluid   container-fixed-lg">
            <div class="card card-transparent">
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover" id="basicTable">
                    <thead>
                      <tr>
                        <!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
    										Comman Practice Followed
    										-->
                        <th style="width:3%" class="text-center">
                          <button class="btn btn-link"><i class="pg-trash"></i>
                          </button>
                        </th>

                        <th style="width:3%" class="text-center">
                          <button class="btn btn-link"><i class="pg-plus"></i>
                          </button>
                        </th>
                        <th style="width:20%">id</th>
                        <th style="width:20%">fecha</th>
                        <th style="width:15%">Hora inicio</th>
                        <th style="width:29%">Hora fin</th>                                        
                        <th style="width:15%">estado</th>
                      </tr>
                    </thead>
                   <tbody>
                     
                
                   </tbody>
                  </table>
                  {!$solicitudes->render()!}
                </div>
              </div>
            </div>
          </div>
          @endsection