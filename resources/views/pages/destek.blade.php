@extends('pages/layout')

@section('title')
   Dəstək
@endsection
@section('content')

  <section id="istek">
      <div class="container">
      <ul>
          <li class="pull-left"> <h1>Yeni <span style="color:#2AB6FF">dəstək</span></h1></li>
          <li class="pull-right">
               <a href="index.php">ANA SƏHİFƏ </a>
              <span> / </span>
              <a href="{{url('/destek')}}"> YENİ DƏSTƏK</a>
          </li>
      </ul>
      </div>
  </section>
  <!-- naseh sencun comment yazdim. form hisseye bashlangic :) -->
  <section id="address">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                <!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->

                <div id="map"></div>
                <div class="destek">
                  <!-- Soldakı bütün istəklər -->
                  <div class="thumbnail">
                    <a href="#"><img src="image/1.jpg" alt="News Image"></a>
                    <div class="caption">
                      <h4>Maşınımın təmirinə yardım</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                      dolore magna aliqua...</p>
                      <a href="{{url('desteksiyahisi')}}" class="btn btn-success" role="button">Bütün İstəklər</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="sag">
                  <form action="{{url('/destek')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <input type="hidden" id="lat" name="lat">
                      <input type="hidden" id="lng" name="lng">
                      <input type="hidden" value="1" name="type_id">
                    <!-- <div class="form-group"> -->
                    <label class="control-label col-sm-3" for="head">İstəyin başlığı:</label>
                    <div class="col-sm-9">
                      <input type="text" name="title" class="form-control" id="head" placeholder="Məsələn: Sökük məktəb, qırıq əşyalar və s...">
                    </div>

                    <label class="control-label col-sm-3" for="adres">İstəyin ünvanı:</label>
                    <div class="col-sm-9">
                      <input name="location" type="text" class="form-control" id="adres" placeholder="İstəyinizin və ya yaşadığınız yerin ünvanı">
                    </div>

                    <label class="control-label col-sm-3" for="qurum">Qurum isə qeyd edin:</label>
                    <div class="col-sm-9">
                      <input name="org" type="text" class="form-control" id="org" placeholder="Təskilat,Universitet ve s">
                    </div>


                    <label class="control-label col-sm-3" for="aciq">İstəyin Açıqlanması:</label>
                    <div class="col-sm-9">

                      <input type="text" name="about" class="form-control" id="aciq" placeholder="Bütün detalları açıqlayın. Problem nədir? Kimlərə təsir edir?">
                    </div>


                    <label class="control-label col-sm-3" for="pic">Şəkil:</label>
                    <div class="col-sm-9">
                      <input type="file" name="image" class="form-control" id="pic">
                    </div>

                    <label class="control-label col-sm-3" for="name">Ad Soyad:</label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" id="name" placeholder="İstək məsələsində əlaqə quracağımız şəxs">
                    </div>

                    <label class="control-label col-sm-3" for="numb">Telefon:</label>
                    <div class="col-sm-9">
                      <input type="text" name="phone" class="form-control" id="numb" placeholder="Şəxsin telefon nömrəsi">
                    </div>


                    <label class="control-label col-sm-3" for="mail">Email:</label>
                    <div class="col-sm-9">
                      <input type="email" name="email" class="form-control" id="mail" placeholder="Şəxsin elektron ünvanı">
                    </div>

                    <label class="control-label col-sm-3" for="nov">Növ:</label>
                    <div class="col-sm-9">
                      <input type="text" name="nov" class="form-control" id="nov" placeholder="Dəstəyin növü">
                    </div>

                    <!-- </div> -->
                    <div class="col-sm-2 col-sm-offset-3">
                      <input type="submit" name="kaydet" value="Qeyd Et" class="btn">
                    </div>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </section>
  <script type="text/javascript" src="scripts/main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&libraries=places&callback=initAutocomplete"
         async defer></script>
@endsection
