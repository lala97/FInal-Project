@extends('pages/layout')

@section('content')


    <section id="profilim">
        <div class="container">
        <div id="qatqi">
            <div class="row">
                <form>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="assets/image/4.jpg">
                        <label for="upload"><i class="fa fa-arrow-circle-o-up"></i> yüklə</label>
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
                                <h4><i class="fa fa-tags" aria-hidden="true"></i> Dəstəklərim</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <!-- burda olanlar da artiq cedvelden gelecek. static bi shey yazmiram ehtiyac yoxdu cunki. olsa yazardim narahat olmuyun -->
                                        </tr>

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
