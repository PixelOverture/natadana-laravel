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
                    <div class="heading text-center">
                        <h3>Selamat Datang!</h3>
                        <p>Silakan masukan data login anda</p>
                    </div>
                    <form action="#" method="post">
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukan email anda" />
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
