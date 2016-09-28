@extends('pages.layout')

@section('content')
  <section id="istek">
      <div class="container">
      <ul>
          <li class="pull-left"> <h1>Mənim <span>İstəyim</span></h1></li>
          <li class="pull-right">
               <a href="index.php">ANA SƏHİFƏ / </a>
              <a href="{{url('/istek')}}"> İSTƏK</a>
          </li>
      </ul>
      </div>
  </section>
  <section id="singlePage">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <img class="img-responsive center-block" src="{{url('/image/'.$single->image)}}" alt="singleNews Photo" />
              </div>
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <h1 class="text-center">{{$single->title}}</h1>
                <p class="text-center">{{$single->about}}</p>
                <a href="#"></a>
              </div>
          </div>
      </div>
  </section>
@endsection
