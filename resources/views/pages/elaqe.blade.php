@extends('pages/layout')
@section('title')
   Əlaqə
@endsection
@section('content')
  <section id="istek">
    <div class="container">
    <ul>
        <li class="pull-left"> <h1>Əlaqə</h1></li>
        <li class="pull-right">
             <a href="{{url('/')}}">ANA SƏHİFƏ </a>
            <span> / </span>
            <a href="{{url('/elaqe')}}"> ƏLAQƏ</a>
        </li>
    </ul>
    </div>
</section>
<section id="elaqepage">
  <div class="container">
    <div class="bizeqoshul">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h2 class="text-center">Bizə qoşul</h2>
          <h4>
            Saytımızın daimi aktivliyini təmin etmək üçün müxtəlif təyinatlı komandalarımız fəaliyyət göstərir.
          </h4>
          <p><span>1. Moderator komandası.</span> İstək və dəstək elanlarının idarə olunması.</p>
          <p><span>2. Sosial şəbəkə komandası.</span> Sosial şəbəkələrdəki səhifələrin idarə olunması</p>
          <p><span>3. Developer komandası.</span> Saytın kod hissəsində dəyişiklik etməyi bacarmaq.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img class="center-block" src="{{url('image/iwantyou.gif')}}" alt="I want you" />
        </div>
      </div>
    </div>
    <div class="elaqeusullari">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">Əlaqə üsulları</h1>
        </div>
        <div class="col-lg-6">
          <p>
            <i class="fa fa-map-marker fa-4x"></i> <span>AF Business House, 3cü mərtəbə </span>
          </p>
          <p>
            <i class="fa fa-envelope-o fa-4x"></i> <span> testwebsite@gmail.com</span>
          </p>
          <p>
            <i class="fa fa-phone fa-4x"></i> <span> +994877881254646</span>
          </p>
        </div>
        <div class="col-lg-6">
          <!-- BURA MAP ATILMALIDI -->
          <h1 class="text-center">BURDA MAP VAR</h1>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection