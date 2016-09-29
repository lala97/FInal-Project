@extends('pages/layout')

@section('content')


    <section id="profilim">
        <div class="container">
        <div id="qatqi">
            <div class="row">
                <form>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                      @if(Auth::user()->avatar)
                        <img class="img-responsive" src="{{url('image/'.Auth::user()->avatar)}}">
                     @else
                       <img class="img-responsive" src="{{url('image/prof.png')}}">
                     @endif
                        <label for="upload"><i class="fa fa-arrow-circle-o-up"></i> yüklə</label>
                        <input type="file" name="sekil" id="upload" class="hidden">
                        <ul class="list-unstyled">
                            <li><a href="{{url('/profil')}}"><i class="fa fa-user" aria-hidden="true"></i><b> İstifadəçinin məlumatları</b></a></li>
                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Şifrə dəyişdir</a></li>
                            <li><a href="{{url('/isteklerim')}}"><i class="fa fa-thumb-tack" aria-hidden="true"></i> İstək qeydlərim</a></li>
                            <li><a href="{{url('/desteklerim')}}"><i class="fa fa-tags" aria-hidden="true"></i> İstək qatqılarım</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-9  col-xs-12">
                        <div class="profilime panel panel-primary">
                            <div class="panel-heading">
                                <h4><i class="fa fa-tags" aria-hidden="true"></i> Dəstəklərim</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Başlıq</th>
                                            <th>Haqqında</th>
                                            <th>Şəkil</th>
                                            {{-- <th>Ad</th>
                                            <th>Nömrə</th>
                                            <th>Email</th>
                                            <th>Qurum</th>
                                            <th>Növ</th> --}}
                                        </tr>
                                        @foreach($destekler as $destek)
                                            @if($destek->status == '1' && $destek->user_id = Auth::user()->id && $destek->type_id == '1')
                                                <tr>
                                                    <td>{{$destek->title}}</td>
                                                    <td>{{$destek->about}}</td>
                                                    <td>{{$destek->image}}</td>
                                                    {{-- <td>{{$destek->location}}</td>
                                                    <td>{{$destek->name}}</td>
                                                    <td>{{$destek->phone}}</td>
                                                    <td>{{$destek->email}}</td>
                                                    <td>{{$destek->org}}</td>
                                                    <td>{{$destek->nov}}</td> --}}
                                                    <td><a class="btn btn-primary" href="{{url('/desteksil/'.$destek->id)}}">Sil</a></td>

                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>

@endsection
