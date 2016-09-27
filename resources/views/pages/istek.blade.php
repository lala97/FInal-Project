@extends('pages/layout')

@section('title')
   İstək
@endsection
@section('content')

  <section id="istek">
    <div class="container">
    <ul>
        <li class="pull-left"> <h1>Yeni <span style="color:#2AB6FF">istək</span></h1></li>
        <li class="pull-right">
             <a href="index.php">ANA SƏHİFƏ </a>
            <span style="color:#2ab6ff"> / </span>
            <a href=""> YENİ İSTƏK</a>
        </li>
    </ul>
    </div>
</section>

<section id="address">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
              <div id="map"></div>
            </div>

            <div class="col-lg-8">
              <div class="sag">
                <form action="{{url('/istek')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <input type="hidden" id="lat" name="lat">
                  <input type="hidden" id="lng" name="lng">
                  <input type="hidden" value="2" name="type_id">
                  {{-- <input type="hidden" value="{{Auth::user()->id}}" name="user_id"> --}}


                  <label class="control-label col-sm-3" for="head">İstəyin başlığı:</label>
                  <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" id="head" placeholder="Məsələn: Sökük məktəb, qırıq əşyalar və s...">
                  </div>

                  <label class="control-label col-sm-3" for="adres">İstəyin ünvanı:</label>
                  <div class="col-sm-9">
                  <input type="text" name="location" class="form-control" id="adres" placeholder="İstəyinizin və ya yaşadığınız yerin ünvanı">
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
                    <input  type="file" class="form-control" id="pic" name="image">
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
                    <input type="email" name='email' class="form-control" id="mail" placeholder="Şəxsin elektron ünvanı">
                  </div>

                  <label class="control-label col-sm-3" for="nov">Növ:</label>
                  <div class="col-sm-9">
                    <input type="text" name='nov' class="form-control" id="nov" placeholder="isteyin novu">
                  </div>
                  <div class="col-sm-2 col-sm-offset-3">
                    <input type="submit" name="kaydet" value="Qeyd Et" class="btn">
                  </div>

                  @if (count($errors) > 0)

                    <ul class="alert alert-danger table">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>

                  @endif
                </form>
              </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="scripts/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAanmTrOlQYWRepobnwqSO1E2SOoHYMRBA&libraries=places&callback=initAutocomplete"
@endsection
