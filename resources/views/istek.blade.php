@extends('layout')

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
<!-- naseh sencun comment yazdim. form hisseye bashlangic :) -->
<section id="address">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
              <!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->
              <input type="hidden" id="lat">
              <input type="hidden" id="lng">
              <div id="map"></div>

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

@endsection
