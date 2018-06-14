@extends( 'principal' )
@section( 'promedia' )
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
                      <h5 class="text-white no-margin">Bienvenido a los pretsamos de aula sur</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">PAS</span>| Promedia</h1>
                    </div>
                  </div>
                </div>
              </div>             
            </div>        
          </div>
	<div class=" container-fluid   container-fixed-lg">
		<div id="rootwizard" class="m-t-50">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
				<li class="nav-item">
                    <a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-search tab-icon tab-icon"></i> <span>CONSULTA</span></a>
				</li>
				<li class="nav-item">
					<a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa  fa-check-square-o tab-icon"></i> <span>PLANIFICA</span></a>
				</li>
				<li class="nav-item">
					<a class="" data-toggle="tab" href="#tab3" role="tab"><i class="fa fa-credit-card tab-icon"></i> <span>GRABA</span></a>
				</li>
				<li class="nav-item">
					<a class="" data-toggle="tab" href="#tab4" role="tab"><i class="fa fa-check tab-icon"></i> <span>COMPARTE</span></a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
					<div class="row row-same-height">
						<div class="col-md-5 b-r b-dashed b-grey sm-b-b">
						<div class="card card-transparent">
                  <div class="card-header ">
                    <div class="card-title">Consulta
                    </div>
                  </div>
                  <div class="card-block">
                   
                    <br>
                    <div>
                      <img src="{{URL::asset('vista/assets/img/img_prome.jpg')}}"  width="400">
                     
                    </div>
                  </div>
                </div>
						</div>
						<div class="col-md-7">
							<div class="padding-30 sm-padding-5">
								<form id="form-project" role="form" autocomplete="off" novalidate><br><br><br>
                      <p>Consulte si esta disponible el servicio</p>
                      
                      <div class="form-group-attached">
                     
                        <div class="row clearfix">
                          <div class="col-md-6">
                            <div class="form-group form-group-default required">
                              <label>Dia</label>
                              <input  type="date" class="form-control date" name="startDate" required>
                            </div>
                          </div><div class="col-md-6">
                            
                          </div>
                          
                          
                        </div>
                        
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Hora-Inici</label>
                              <input id="inicio" type="time" class="form-control date" min="08:00" max="18:00" name="endDate">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>Hora-Fin</label>
                              <input id="end-date" type="time" class="form-control date"  min="08:00" max="18:00" name="endDate">
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <br>
                     
                      <br>
                      <button class="btn btn-success" type="submit">Consultar</button>
                      
                    </form>
							</div>
						</div>
					</div>
				</div>
				<!------reeemplazar-->
				<div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
					<div class="row row-same-height">
						<div class="col-md-5 b-r b-dashed b-grey ">
						
								<h3>1: DESCARGA LA PLANTILLA</h3>
								<p>Para empezar debes descargar la plantilla de powr point para realizar el video sobre esta.</p>
								<p class="small hint-text">la puedes descargar aqui:</p><a target="_blank" href="{{URL::asset('vista/plantillapromedia.pptx')}}">                      <img src="{{URL::asset('vista/assets/img/ppt.png')}}"  width="100">
</a>
							
						</div>
						<div class="col-md-7">
									
								<h3>2:LEER LAS NORMAS Y POLITICAS </h3>
								<p>Debes leer todas las normas para que puedas utilizar la sala de promedia, leer cuidadosamente todas las politicas que deberas cumplir dentro de la sala de promedia</p>
						
                                    <p class="small hint-text">Para leer las normas descargalas aqui:</p><a target="_blank" href="{{URL::asset('vista/normas.pdf')}}">                      <img src="{{URL::asset('vista/assets/img/pdf.png')}}"  width="100"></a>
							
							
						</div>
					</div>
				</div>
				<div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
					<div class="row row-same-height">
						<div class="col-md-5 b-r b-dashed b-grey ">
							 <div class="card card-transparent">
                  <div class="card-header ">
                    <div class="card-title">Prestamo de las Salas del Tercer piso de Aula sur
                    </div>
                  </div>
                  <div class="card-block">
                   
                    <br>
                    <div>
                      <img src="{{URL::asset('vista/assets/img/img_prome1.jpg')}}"  width="385">
                     
                    </div>
                  </div>
                </div>
						</div>
						<div class="col-md-7">
							<div class="padding-30 sm-padding-5">
								<form id="form-project" role="form" autocomplete="off" novalidate><br><br><br>
                      <p>Diligencie los siguientes campos</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default">
                          <label>Seleccione el Elemento:</label>
                          
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
					</div>
				</div>
				
				<div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
					<h1>Thank you.</h1>
				</div>
				
				<div class="wizard-footer padding-20 bg-master-light">
					<p class="small hint-text pull-left no-margin">
						EN CASO DE PROBLEMAS , CONTACTE LA PAGINA DE INGENIERIA DE SISTEMAS DE LA UFPS PARA CUALQUIER INQUIETUD.
					</p>
					<div class="pull-right">
						<img src="{{URL::asset('vista/assets/img/logohorizontal.png')}}" alt="logo" class="brand" data-src="{{URL::asset('vista/assets/img/logohorizontal.png')}}" data-src-retina="{{URL::asset('vista/assets/img/logohorizontal.png')}}" height="22">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
@endsection