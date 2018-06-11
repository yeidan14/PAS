@extends('principal')
    @section('promedia')
           <div class=" container-fluid   container-fixed-lg bg-white">
            <div class="row">
              <div class="col-md-5">
                <!-- START card -->
                 <div class=" container-fluid   container-fixed-lg">
            <!-- START BREADCRUMB -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">INICIO</a></li>
              <li class="breadcrumb-item active">Promedia</li>
            </ol>
            <!-- END BREADCRUMB -->
            
          </div><br>
                <div class="card card-transparent">
                  <div class="card-header ">
                    <div class="card-title">Prestamo de las Salas del Tercer piso de Aula sur
                    </div>
                  </div>
                  <div class="card-block">
                   
                    <br>
                    <div>
                      <img src="{{URL::asset('vista/assets/img/lab.jpg')}}" alt="" data-src="{{URL::asset('vista/assets/img/lab.jpg')}}" data-src-retina="{{URL::asset('vista/assets/img/lab.jpg')}}" width="400">
                     
                    </div>
                  </div>
                </div>
                <!-- END card -->
              </div>
              <div class="col-md-7">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-block">
                    <form id="form-project" role="form" autocomplete="off" novalidate><br><br><br>
                      <p>Diligencie los siguientes campos</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default">
                          <label>Seleccione el laboratorio:</label>
                          
                              <select class="cs-select form-control cs-skin-slide" data-init-plugin="select-tipoelemento">
                      <option value=" ">-------------------</option>
                      <option value="1">LABORAROTRIO DE MOVIL</option>
                      <option value="2">LABORATORIOS ....</option>
                      <option value="3">LABORATORIO ....</option>
                    </select>
                         
                          
                        </div>
                        <br>
                        <div class="row clearfix">
                          <div class="col-md-6">
                            <div class="form-group form-group-default required">
                              <label>Nombres</label>
                              <input type="text" class="form-control" name="firstName" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Apellidos</label>
                              <input type="text" class="form-control" name="lastName">
                            </div>
                          </div> 
                             
                              
                        </div>   <div class="row clearfix">
                          <div class="col-md-6">
                             <div class="form-group form-group-default required">
                              <label>Codigo</label>
                              <input type="text" class="form-control" name="Codigo" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Correo</label>
                              <input type="email" class="form-control" name="email">
                            </div>
                          </div>
                             
                              
                        </div>
                      </div>
                      
                      <div class="form-group-attached">
                        <div class="form-group form-group-default">
                          <label>Justificacion <i class="fa fa-info text-complete m-l-5"></i>
                          </label>
                          <input type="text" class="form-control" name="justificacion"><br><br>
                        </div>
                        <div class="row clearfix">
                          <div class="col-md-6">
                            <div class="form-group form-group-default required">
                              <label>Dia</label>
                              <input  type="date" class="form-control date" name="startDate" required>
                            </div>
                          </div><div class="col-md-6">
                            <div class="form-group form-group-default required">
                              <label>Cantidad de Elementos</label>
                              <input  type="number" class="form-control date" name="startDate" max="30" required>
                            </div>
                          </div>
                          
                          
                        </div>
                        
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Hora-Inici</label>
                              <input id="inicio" type="time" class="form-control date" name="endDate">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Hora-Fin</label>
                              <input id="end-date" type="time" class="form-control date" name="endDate">
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <br>
                      <div class="pull-left">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                          <label for="checkbox-agree">Acepta Terminos y condiciones ?
                          </label>
                        </div>
                      </div>
                      <br>
                      <button class="btn btn-success" type="submit">Enviar Solicitud</button>
                      
                    </form>
                  </div>
                </div>
                <!-- END card -->
              </div>
            </div>
          </div>
          @endsection