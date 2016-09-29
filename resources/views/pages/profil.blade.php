@extends('pages/layout')

@section('content')

	<section id="profilim">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
							@if(Auth::user()->avatar)
					    	<img class="img-responsive" src="{{url('image/'.Auth::user()->avatar)}}">
				     @else
					  	 <img class="img-responsive" src="{{url('image/prof.png')}}">
				     @endif
              <form id="target" action="{{url('/avatar')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                                <!-- yeniiiiiiiiiiiii -->
                    {{-- <input type="file" name="image" id="file" value="hello"> --}}
										<label for="file"><i class="fa fa-arrow-circle-o-up"></i> Yüklə</label>
										<input type="file" name="image" id="file" class="hidden">
                </form>
               <ul class="list-unstyled">
                   <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><b> İstifadəçinin məlumatları</b></a></li>
                   <li><a href=""><i class="fa fa-lock" aria-hidden="true"></i> Şifrə dəyişdir</a></li>
                   <li><a href="{{url('/isteklerim')}}"><i class="fa fa-thumb-tack" aria-hidden="true"></i> İstək qeydlərim</a></li>
                   <li><a href="{{url('/desteklerim')}}"><i class="fa fa-tags" aria-hidden="true"></i>Dəstəklərim</a></li>
               </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-9  col-xs-12">
                <div class="profilime panel panel-primary">
                    <div class="panel-heading">
                        <h4>Profili Nizamlamaq</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tbody>
                            <form action="{{url('/profil')}}" method="post" enctype="multipart/form-data">
                             {{csrf_field()}}
                                <tr>
                                    <td>İstifadəçi adı</td>
                                    <td><input class="form-control" type="text" name="username" value="{{ Auth::user()->username}}"></td>
                                </tr>
                                <tr>
                                    <td>Adınız Soyadınız *</td>
                                    <td><input class="form-control" type="text" name="name" value="{{ Auth::user()->name}}"></td>
                                </tr>
                                <tr>
                                    <td>Telefon Nömrəniz *</td>
                                    <td><input  class="form-control" type="text" name="phone" value="{{ Auth::user()->phone}}"></td>
                                </tr>
                                <tr>
                                    <td>Elektron Ünvan *</td>
                                    <td><input  class="form-control" type="email" name="email" value="{{ Auth::user()->email}}"></td>
                                </tr>
                                <tr>
                                    <td>Şəhər/Rayon</td>
                                    <td><select  class="    form-control"  name="">
                                        @foreach($city as $city)
                                            <option>
                                                {{$city->name}}
                                            </option>
                                        @endforeach
                                    </td>
                                    </select>
                                </tr>
                            </tbody>
                        </table>

                                <p>Ulduz(*) ilə işarələnmiş hissələr boş buraxılmamalıdır</p>

                                <input class="btn btn-primary" type="submit" name="submit" value="Düzəlt">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{url('scripts/vendors/jquery.js')}}"></script>

		<script type="text/javascript">
		$(document).ready(function() {

				$('#file').change(function() {
					$('#target').submit();
				});
		});
		</script>
@endsection
