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

          @foreach($datas as $data)
            @if($data->status=='1')
                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="thumbnail">
                    <a href="{{url('/single/'.$data->id)}}"><img src="{{url('/image/'.$data->image)}}" alt="News Image"></a>
                    <div class="caption">
                      <h3>{{$data->title}}</h3>
                      <p>{{substr($data->about, 0,150)}}...</p>
                      <p><a href="{{url('/single/'.$data->id)}}" class="btn center-block" role="button">Ətraflı</a></p>
                    </div>
                  </div>
                </div>
              @endif
          @endforeach
    </div>
               {{ $datas->links()}}
    </div>
  </section>
 {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&libraries=places&callback=initMap"async defer></script> --}}
 <script type="text/javascript" src="scripts/main.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&callback=initMap"
        async defer></script>

        <script type="text/javascript">
      function initMap() {
      var myLatLng = [
      @foreach($datamaps as $datamap)
         @if($datamap->status=='1')
            {lat: {{$datamap->lat}}, lng:{{$datamap->lng}} },
          @endif
      @endforeach
      ];
      var map = new google.maps.Map(document.getElementById('infoMap'), {
      center: {  lat: 40.100,lng: 48.800},
      zoom: 8,
      scrollwheel: false
    });
     
   
         for (var i = 0; i < myLatLng.length; i++) {
            marker = new google.maps.Marker({
            position: myLatLng[i],
            map: map,
            title: 'Hello World!'
           });
          
        }       
   
}

        </script>
@endsection
