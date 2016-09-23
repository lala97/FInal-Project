@extends('layout')

@section('content')
	
	<section id="profilim">
    <div class="container">
        <div class="row">

        <form>            
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="assets/image/4.jpg">            

                <label for="upload"><i class="fa fa-arrow-circle-o-up"></i> yukle</label>
                <input type="file" name="sekil" id="upload" class="hidden">

               <ul class="list-unstyled">
                   <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><b> İstifadəçinin məlumatları</b></a></li>
                   <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Şifrə dəyişdir</a></li>
                   <li><a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i> İstək qeydlərim</a></li>
                   <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i> İstək qatqılarım</a></li>
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
                                <tr>
                                    <td>İstifadəçi adı</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Adınız Soyadınız *</td>
                                    <td><input class="form-control" type="text" name="ad" value=""></td>
                                </tr>
                                <tr>
                                    <td>Telefon Nömrəniz *</td>
                                    <td><input  class="form-control" type="text" name="telef" value=""></td>
                                </tr>
                                <tr>
                                    <td>Elektron Ünvan *</td>
                                    <td><input  class="form-control" type="email" name="mail" value=""></td>
                                </tr>
                                <tr>
                                    <td>Şəhər</td>
                                    <td><option></option></td>
                                </tr>
                                <tr>
                                    <td>Rayon</td>
                                    <td><option></option></td>
                                </tr>
                               
                            </tbody>
                        </table>

                                <p>Ulduz(*) ilə işarələnmiş hissələr boş buraxılmamalıdır</p>

                                <input class="btn btn-primary" type="submit" name="submit" value="Düzəlt">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>        
</section> 


@endsection
