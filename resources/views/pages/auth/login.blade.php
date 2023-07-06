@extends('layouts.master')
@section('title', 'Login')

@push('addon-style')
    <style>
        #show_eye, #hide_eye {
            width: 20px;
        }
    </style>
@endpush

@section('content')
    <section class="auth">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex justify-content-center">
                <a href="/"><img src="{{ URL::asset('assets/images/Logo.svg') }}" alt="" /></a>
            </div>
            <div class="col-lg-6">
                <div class="auth-form">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ $message }}
                        </div>
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                <ul>
                            </div>
                        </div>
                    @endif
                    <div class="heading text-center">
                        <h3>Selamat Datang!</h3>
                        <p>Silakan masukan data login anda</p>
                    </div>
                    <form action="{{ route('post.login') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukan email anda" value="{{ old('email') }}" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukan password anda" />
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <img src="{{ URL::asset('assets/images/ic_eye.svg') }}" alt="" id="show_eye">
                                    <img class="d-none" src="{{ URL::asset('assets/images/ic_eye_off.svg') }}" alt="" id="hide_eye">
                                    {{-- <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i> --}}
                                </span>
                            </div>
                        </div>
                        <div class="link d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMeCheckbox" />
                                <label class="form-check-label" for="rememberMeCheckbox">
                                    Ingat saya
                                </label>
                            </div>
                            <div class="forgot">
                                <a href="#">Lupa password</a>
                            </div>
                        </div>
                        <button class="btn btn-warning" type="submit">Sign in</button>
                    </form>
                    <div class="new-user text-center">
                        <p>
                            Belum memiliki akun?
                            <span><a href="{{ route('register') }}">Daftar</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";

            }
        }

        $(document).ready(function() {
            $('#show_password').click(function() {
                var passwordField = $('#password');
                var passwordFieldType = passwordField.attr('type');
                if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
                $(this).html('<img class="d-none" src="{{ URL::asset('assets/images/ic_eye_off.svg') }}" alt="" id="hide-eye">');
                } else {
                passwordField.attr('type', 'password');
                $(this).html('<img src="{{ URL::asset('assets/images/ic_eye.svg') }}" alt="" id="show-eye">');
                }
            });
        });
    </script>
@endpush
