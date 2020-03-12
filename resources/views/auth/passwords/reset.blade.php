@extends('admin.layouts.authNew')

{{-- @section('content')

<div class="login-box">

  <div class="login-box-body">
      <div class="login-logo">
          <a href="{{route('home')}}"><img src="{{ asset('admin/img/image.png') }}" alt="User Image" width="30%" height="30%"></a>
      </div>

    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
      </div>

      <div class="row">
        <div class="col-xs-8">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>

</div>

@endsection --}}

@section('content')

    <div class="main-content">
        <div class="login-section _left">
            <div class="logo">
                <a href="{{route('login')}}"><img src="{{ asset('admin/img/image.png') }}" alt="Credit Costs"></a>
            </div>
            <div class="login-form">
                <form action="{{ route('password.update') }}" method="post">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-item">
                        <div class="input-content">
                            <div class="svg-content">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="main-input">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <p class="text-right text-danger"><span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span></p>
                    @enderror

                    <div class="input-item">
                        <div class="input-content">
                            <div class="svg-content">
                                <i style="font-size: 18px;" class="fa fa-key"></i>
                            </div>
                            <div class="main-input">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            </div>
                           
                        </div>
                    </div>

                    @error('password')
                    <p class="text-right text-danger"><span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span></p>
                    @enderror

                    <div class="input-item">
                      <div class="input-content">
                          <div class="svg-content">
                              <i style="font-size: 18px;" class="fa fa-key"></i>
                          </div>
                          <div class="main-input">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                          </div>
                      </div>
                  </div>
                    <div class="checkbox icheck">
                       
                    </div>

                    <div class="form-footer">
                        <div class="footer-item">
                            <div class="">
                                <Button class="btn btn-lg btn-primary">Reset Password</Button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="banner-section _left">
        </div>
    </div>


@endsection

