@extends('pages.layout')

@section('content')
  <section id="destek_olanlar">
     <div class="container">
        <div class="row">
        @foreach($isteklist as $istek)
        @if($istek->type_id=='2')
           <div class="col-md-5 col-sm-12">
              <div class="row_padding">
                 <div class="col-md-12">
                    <div class="destek_img">
                       <img class="img-responsive " src="{{url('image/'.$istek->image)}}"/>
                    </div>
                 </div>
                 <div class="col-md-12">
                    <h2>{{$istek->title}}</h2>
                    <p>{{substr($istek->about, 0,150)}}...</p>
                    <h4><b>Ünvan:</b> {{$istek->location}}</h4>
                    <a class="btn btn-info" href="{{URL('single/'.$istek->id)}}">Ətraflı</a>
                 </div>
              </div>
           </div>
           @endif
          @endforeach
          {{ $isteklist->links()}}
        </div>
        {{-- <nav aria-label="Page navigation">
          <ul class="pagination pull-right">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav> --}}

     </div>
  </section>
@endsection
