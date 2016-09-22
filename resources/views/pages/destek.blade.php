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
              <span style="color:#2ab6ff"> / </span>
              <a href=""> YENİ DƏSTƏK</a>
          </li>
      </ul>
      </div>
  </section>

  <section id="address">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                <!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->
                <input type="hidden" id="lat">
                <input type="hidden" id="lng">
                <div id="map"></div>
                <div class="destek">
                  <!-- Soldakı bütün istəklər -->
                  <div class="thumbnail">
                    <a href="#"><img src="image/1.jpg" alt="News Image"></a>
                    <div class="caption">
                      <h4>Maşınımın təmirinə yardım</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                      dolore magna aliqua...</p>
                      <a href="ds.php" class="btn btn-success" role="button">Bütün İstəklər</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="sag">
                  <form action="" method="post">
                    <!-- <div class="form-group"> -->
                    <label class="control-label col-sm-3" for="head">İstəyin başlığı:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="head" placeholder="Məsələn: Sökük məktəb, qırıq əşyalar və s...">
                    </div>

                    <label class="control-label col-sm-3" for="adres">İstəyin ünvanı:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="adres" placeholder="İstəyinizin və ya yaşadığınız yerin ünvanı">
                    </div>

                    <label class="control-label col-sm-3" for="qurum">Qurum isə qeyd edin:</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="qurum">
                        <option>Məktəb</option>
                        <option>Universitet</option>
                        <option>Bağça</option>
                      </select>
                    </div>


                    <label class="control-label col-sm-3" for="aciq">İstəyin Açıqlanması:</label>
                    <div class="col-sm-9">

                      <input type="text" class="form-control" id="aciq" placeholder="Bütün detalları açıqlayın. Problem nədir? Kimlərə təsir edir?">
                    </div>


                    <label class="control-label col-sm-3" for="pic">Şəkil:</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="pic">
                    </div>

                    <label class="control-label col-sm-3" for="name">Ad Soyad:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" placeholder="İstək məsələsində əlaqə quracağımız şəxs">
                    </div>

                    <label class="control-label col-sm-3" for="numb">Telefon:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="numb" placeholder="Şəxsin telefon nömrəsi">
                    </div>


                    <label class="control-label col-sm-3" for="mail">Email:</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="mail" placeholder="Şəxsin elektron ünvanı">
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
  {{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&callback=initAutocomplete"
  type="text/javascript"></script> --}}

  <script type="text/javascript">

  function initAutocomplete() {

    var map = new google.maps.Map(document.getElementById('map'), {
      center: {  lat: 40.100,lng: 47.500},
      zoom: 6,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoomControl:false,
      streetViewControl:false,
      mapTypeControl:false,
      overViewMapControl:false
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('adres');
    var searchBox = new google.maps.places.SearchBox(input);
    console.log(searchBox);
    // map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }

      // Clear out the old markers.
      markers.forEach(function(marker) {
        marker.setMap(null);
      });
      markers = [];

      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        var icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        markers.push(new google.maps.Marker({
          map: map,
          icon: icon,
          title: place.name,
          animation: google.maps.Animation.DROP,
          position: place.geometry.location
        })
      );
        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
          console.log(place.vicinity)
            document.getElementById('lat').value = place.geometry.location.lat();
            document.getElementById('lng').value = place.geometry.location.lng();


        } else {
          bounds.extend(place.geometry.location);
            console.log(place.formatted_address)
          document.getElementById('lat').value = place.geometry.location.lat();
          document.getElementById('lng').value = place.geometry.location.lng();

        }
      });
      map.fitBounds(bounds);
    });
  }

  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&libraries=places&callback=initAutocomplete"
  type="text/javascript"></script>

@endsection
