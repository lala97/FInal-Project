@extends('pages.layout')
@section('title')
    Daxil ol
@endsection
@section('content')
  <section id="istek">
      <div class="container">
      <ul>
          <li class="pull-left"> <h1>Daxil <span>Ol</span></h1></li>
          <li class="pull-right">
               <a href="{{url('/')}}">ANA SƏHİFƏ </a>
              <span> / </span>
              <a href="{{url('/login')}}"> GİRİŞ ET</a>
          </li>
      </ul>
      </div>
  </section>
  <section id="loginpage">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                          {{ csrf_field() }}
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail adresi</label>
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Şifrə</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password">
                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Yadda saxla
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn">
                                      <i class="fa fa-btn fa-sign-in"></i> Daxil ol
                                  </button>
                                  <a class="btn btn-link" href="{{ url('/password/reset') }}">Şifrəni unutdun ?</a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
