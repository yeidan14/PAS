@extends('principal')
          @section('contacto')
           <div class=" container-fluid   container-fixed-lg">
            <!-- START BREADCRUMB -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form layouts</li>
            </ol>
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
                            <label>First name</label>
                            <input type="text" class="form-control" name="firstName" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="lastName" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-group-default input-group">
                            <div class="form-input-group">
                              <label>Pages username</label>
                              <input type="text" class="form-control" name="username" placeholder="yourname.pages.com (this can be changed later)" required>
                            </div>
                            <div class="input-group-addon d-flex ">
                              .pages.com
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-group-default">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Minimum of 4 characters." required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-group-default">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="We’ll send your login details to this address" required>
                          </div>
                        </div>
                      </div>
                      <p class="pull-left">
                        I agree to the <a href="#">Pages Terms</a> and <a href="#">Privacy</a>.
                      </p>
                      <p class="pull-right">
                        <a href="#">Help? Contact Support</a>
                      </p>
                      <div class="clearfix"></div>
                      <button class="btn btn-primary" type="submit">Create a new account</button>
                    </form>
                  </div>
                </div>
                <!-- END card -->
              </div>
              <div class="col-xl-5 col-lg-6">
                <!-- START card -->
                <div class="card card-transparent">
                  <div class="card-header ">
                    <div class="card-title">Validation
                    </div>
                  </div>
                  <div class="card-block">
                    <h3>Showcase and guide users with a <br>
							better User Interface &amp; Experience.</h3>
                    <p>Forms are one of the most important components
                      <br> when it comes to a dashboard. Recognizing that fact, users are
                      <br>able work in a maximum content width.</p>
                    <br>
                    <p class="small hint-text m-t-5">VIA senior product manager
                      <br> for UI/UX at REVOX</p>
                    <button class="btn btn-primary btn-cons">More</button>
                  </div>
                </div>
                <!-- END card -->
              </div>
            </div>
          </div>
          @endsection