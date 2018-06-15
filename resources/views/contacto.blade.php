@extends('principal')
          @section('contacto')
          
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
                      <h5 class="text-white no-margin">Pretsamos de Aula Sur</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">PAS</span>| Contacto</h1>
                    </div>
                  </div>
                </div>
              </div>             
            </div>        
          </div>
           <div class=" container-fluid   container-fixed-lg">

           
           
            <!-- END BREADCRUMB -->
            <div class="row">
              <div class="col-xl-7 col-lg-6 ">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-block">
                    <form id="form-personal" role="form" autocomplete="off">
                      <div class="row clearfix">
                        <div class="col-md-6">
                          <div class="form-group form-group-default required">
                            <label>NOMBRE</label>
                            <input type="text" class="form-control" name="firstName" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>APELLIDOS</label>
                            <input type="text" class="form-control" name="lastName" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                                       <label>MENSAJE</label>
                                                       <textarea class="form-group form-group-default" style="height: 230px;" id="msg" name="msg" required></textarea>
                                                       </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-group-default">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="expample@pages.com" required>
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="clearfix"></div>
                      <button class="btn btn-primary" type="submit">ENVIAR MENSAJE</button>
                    </form>
                  </div>
                </div>
                <!-- END card -->
              </div>
              <div class="col-xl-5 col-lg-6">
                <!-- START card -->
                <div class="card card-transparent">
                 
                  <div class="card-block">
                                 
                   <h2>DIRECCION<br></h2>
                    <p>Avenida Gran Colombia No. 12E-96 Barrio Colsag, Cúcuta, Colombia<br>

  <h2>HORARIO DE ATENCION <br></h2>
                    <p>
Horario : 9 am a 5 pm<br>
Horario no laborable : 12 m a 2 pm<br> 
                   
 <h2>CONTACTO<br></h2>
                    <p>
Teléfono (57) 7 5776655 Extensiones 201 y 203<br>
Correo electrónico: ingsistemas@ufps.edu.co
                   
</p>
                    <br>
                    
                    
                  </div>
                </div>
                <!-- END card -->
              </div>
            </div>
          </div>
          @endsection