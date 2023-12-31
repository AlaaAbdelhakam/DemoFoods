@extends('layouts.login')

@section('content')
    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <div class="p-1">
                                {{-- <img src="{{asset('assets/front/images/logo.png')}}" alt="LOGO"/> --}}

                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span>LOGIN</span>
                        </h6>
                    </div>
                    @include('dashboard.includes.alerts.errors')
                    @include('dashboard.includes.alerts.success')
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal form-simple" action="{{ route('login') }}" method="post"
                                novalidate>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <fieldset class="form-group position-relative has-icon-left mb-0">


                                    <input type="email" name="email" class="form-control form-control-lg input-lg"
                                        value="{{ old('username') }}" id="email" placeholder=""
                                        required autocomplete="email" autofocus>
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="password" value="{{ old('password') }}" name="password" class="form-control form-control-lg input-lg"
                                        id="password" placeholder="" required
                                        autocomplete="current-password">
                                    <div class="form-control-position">
                                        <i class="la la-key"></i>
                                    </div>

                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </fieldset>


                                <div class="form-group row">
                                    <div class="col-md-6 col-12 text-center text-md-left">
                                        <fieldset>
                                            <input type="checkbox" name="remember" id="remember" class="chk-remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember-me">remember me</label>
                                        </fieldset>
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                                    Login
                                </button>
                                {{-- <a class="btn btn-info btn-lg btn-block" href="{{ route('register.show') }}">      <i class="ft-user"></i>اضافة مستخدم جديد</a> --}}
                                {{-- @include('auth.partials.copy') --}}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
