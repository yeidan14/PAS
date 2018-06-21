@extends('home_admin')
          @section('solicitudesadmin')
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
                          <button class="btn btn-link"><i class="pg-"></i>
                          </button>
                        </th>
                        <th style="width:20%">fecha</th>
                        <th style="width:15%">Hora inicio</th>
                        <th style="width:29%">Hora fin</th>
                        <th style="width:15%">elemento</th>
                        <th style="width:15%">cadEelemento</th>
                        <th style="width:15%">estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>

                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle ">
                          <p>First Tour</p>
                        </td>
                        <td class="v-align-middle">
                          <p>United States, India, China,Africa</p>
                        </td>
                        <td class="v-align-middle">
                          <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                        </td>
                        <td class="v-align-middle">
                          <p>Public</p>
                        </td>
                        <td class="v-align-middle">
                          <p>April 13,2014 10:13</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox2">
                            <label for="checkbox2" class="no-padding no-margin"></label>
                          </div>
                        </td>

                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle ">
                          <p>Among the children</p>
                        </td>
                        <td class="v-align-middle">
                          <p>United States, India, China,Africa</p>
                        </td>
                        <td class="v-align-middle">
                          <p>you want English, Scottish, Welsh, Irish, British, European or UK even a British (name other original country you came form or have roots to E.G. A British Japanese or a 5th generation</p>
                        </td>
                        <td class="v-align-middle">
                          <p>Public</p>
                        </td>
                        <td class="v-align-middle">
                          <p>April 13,2014 10:13</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox3">
                            <label for="checkbox3" class="no-padding no-margin"></label>
                          </div>
                        </td>

                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle ">
                          <p>A day to remember</p>
                        </td>
                        <td class="v-align-middle">
                          <p>United States, India, China,Africa</p>
                        </td>
                        <td class="v-align-middle">
                          <p>UK was on top of the art world 18-19 century had the best food, best cloths and best entertainment back then) it was a hyper nation</p>
                        </td>
                        <td class="v-align-middle">
                          <p>Public</p>
                        </td>
                        <td class="v-align-middle">
                          <p>April 13,2014 10:13</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox4">
                            <label for="checkbox4" class="no-padding no-margin"></label>
                          </div>
                        </td>

                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle ">
                          <p>Life’s sadness shared</p>
                        </td>
                        <td class="v-align-middle">
                          <p>United States, India, China,Africa</p>
                        </td>
                        <td class="v-align-middle">
                          <p>he world speaks English. Common law, Magna Carta and the Bill of Rights are its wonderful legacy</p>
                        </td>
                        <td class="v-align-middle">
                          <p>Public</p>
                        </td>
                        <td class="v-align-middle">
                          <p>April 13,2014 10:13</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox ">
                            <input type="checkbox" value="3" id="checkbox5">
                            <label for="checkbox5" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle ">
                          <p>First Tour</p>
                        </td>
                        <td class="v-align-middle">
                          <p>United States, India, China,Africa</p>
                        </td>
                        <td class="v-align-middle">
                          <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                        </td>
                        <td class="v-align-middle">
                          <p>Public</p>
                        </td>
                        <td class="v-align-middle">
                          <p>April 13,2014 10:13</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox6">
                            <label for="checkbox6" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle">
                          <div class="checkbox text-center">
                            <input type="checkbox" value="3" id="checkbox1">
                            <label for="checkbox1" class="no-padding no-margin"></label>
                          </div>
                        </td>
                        <td class="v-align-middle ">
                          <p>First Tour</p>
                        </td>
                        <td class="v-align-middle">
                          <p>United States, India, China,Africa</p>
                        </td>
                        <td class="v-align-middle">
                          <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                        </td>
                        <td class="v-align-middle">
                          <p>Public</p>
                        </td>
                        <td class="v-align-middle">
                          <p>April 13,2014 10:13</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endsection