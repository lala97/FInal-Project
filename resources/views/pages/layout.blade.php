<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap və Fontawesome sass ilə qoşulub -->
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<!-- CONTACT SECTION START -->
<section id="contact" class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <!-- Email və əlaqə nömrəsi (solda)-->

                <ul class="list-inline pull-left margin0 padding0">
                    <li><a href="mailto:info@testwebsite.com"><h6 class="pull-left margin0">testwebsite@gmail.com</h6></a></li>
                </ul>
                <!-- Social fontawesome iconlar (sağda) -->
                <ul class="list-inline pull-right margin0 padding0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION END -->

<!-- NAVBAR SECTION START -->
<section id="navbar">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
              <!-- Ekran ölçüsü balacalaşdıqda istifadə olunacaq button(lar) -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand şəkil olaraq yüklənir -->
                <a class="navbar-brand" href="{{URL('/')}}"><img src="image/logo.png" alt="logo" /></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <!-- Səhifə adları -->
                <ul class="nav navbar-nav">
                    <li><a class="active" href="{{URL('/')}}"><i class="fa fa-home"></i> Ana Səhİfə</a></li>
                    <li><a href="{{URL('istək')}}"><i class="fa fa-map-marker"></i> İstək əlavə et</a></li>
                    <li><a href="{{URL('/dəstək')}}"><i class="fa fa-yelp"></i> Dəstək ol</a></li>
                    <li><a href="{{URL('/haqqımızda')}}"><i class="fa fa-info-circle"></i> Haqqımızda</a></li>
                    <li><a href="{{URL('/əlaqə')}}"><i class="fa fa-phone"></i> Əlaqə</a></li>
                </ul>
                <!-- Qeydiyyat və giriş hissəsi  -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-user-plus"></i> Qeydiyyat</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in"></i> Daxil ol</a></li>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Daxil Ol</h4>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="exampleInputEmail1" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Yadda saxla
                                </label>
                                <a href="#" class="pull-right">Şifrəni unutdun?</a>
                              </div>
                              <button type="submit" class="btn btn-primary">Daxil ol</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Bağla</button>
                          </div>
                        </div>

                      </div>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
</section>
<!-- NAVBAR SECTION END -->
@yield('content')
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
        <img src="image/logo.png" alt="logo" />
      </div>
      <div class="col-lg-6 col-md-6 col-sm-4 col-xs-9">
        <p>
          Bu layihə könüllü şəxslər tərəfindən yaradılıb və heç bir
          maddi maraq güdülmür. Saytda yerləşdirilmiş materiallara
          görə məsuliyyət daşımırıq.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5 hidden-xs"></div>
    </div>
  </div>
</div>
<script src="scripts/vendors/jquery.js"></script>
<script src="scripts/vendors/bootstrap.min.js"></script>
<script src="scripts/vendors/modernizr.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&libraries=places&callback=initAutocomplete"async defer></script>
<script src="scripts/main.js"></script>
</body>
</html>
