@extends('layouts.master')
@section('title', 'Login')

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
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukan password anda" />
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
