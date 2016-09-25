@extends('pages/layout')

@section('title')
   Ana səhifə
@endsection
@section('content')
  <!-- SEARCHBAR SECTION START -->
  <section id="searchbar">
    <div class="container">
      <div class="row">
        <!-- Listlər inline olaraq yazılıb -->
          <form class="form-inline" action="index.html" method="POST">
            <div class="form-group col-lg-4 col-md-4 col-sm-4">
              <input type="text" class="form-control" name="keyword" placeholder="Açar söz">
            </div>
            <div class="form-group col-lg-3 col-md-3 col-sm-3"> <!--Şəhər inputu nisbətən kiçikdi. -->
              <input type="text" class="form-control" name="city" placeholder="Şəhər / Region">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-4">
              <input type="text" class="form-control" name="category" placeholder="Kateqoriya">
            </div>
            <div class="form-group col-lg-1 col-md-1 col-sm-1">
              <input type="submit" class="form-control" name="submit" value="&#xf002;">
            </div>
          </form>
      </div>
    </div>
  </section>
  <!-- SEARCHBAR SECTION END -->

  <!-- GOOGLEMAP SECTION START -->
  <section id="googlemap">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 padding0">
            <div id="infoMap" style="width:100%;height:500px"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- GOOGLEMAP SECTION END -->

  <section id="news">
    <div class="container">
      <div class="row">
          <h1>Ehtiyaclar</h1>
        <!-- NEWS BLOCK START -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/car.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
        <!-- NEWS BLOCK END -->

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/1.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/2.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/3.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
          <h1>Destekler</h1>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/4.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/5.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"><img src="image/2.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <a href="{{URL('single')}}"   ><img src="image/1.jpg" alt="News Image"></a>
            <div class="caption">
              <h3>Maşınımın təmirinə yardım</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
              <p><a href="{{URL('single')}}" class="btn center-block" role="button">Ətraflı</a></p>
            </div>
          </div>
        </div>
    </div>
    </div>
  </section>
 {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&libraries=places&callback=initMap"async defer></script> --}}
 <script type="text/javascript" src="scripts/main.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&callback=initMap"
        async defer></script>
@endsection
