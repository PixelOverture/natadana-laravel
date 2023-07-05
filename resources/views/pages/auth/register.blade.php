@extends('layouts.master')
@section('title', 'Register')

@section('content')
    <section class="auth" id="register">
        <div class="row align-items-center" id="form">
            <div class="col-lg-6">
                <div class="auth-form mx-auto">
                    <div class="heading text-center">
                        <h3>Buat akun</h3>
                        <p>Buat akun untuk akses iAdmin</p>
                    </div>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukan nama anda" />
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukan username anda" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukan email anda" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukan password anda" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No. WA</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Masukan nomor WA" />
                        </div>
                        <div class="link d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMeCheckbox" />
                                <label class="form-check-label" for="rememberMeCheckbox">
                                    Saya menerima <span><a href="#">Privacy Policy</a></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-warning" type="submit">Sign in</button>
                    </form>
                    <div class="new-user text-center">
                        <p>
                            Sudah memiliki akun?
                            <span><a href="{{ route('login') }}">Masuk</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <a href="/"><img src="{{ URL::asset('assets/images/Logo.svg') }}" alt="" /></a>
            </div>
        </div>
    </section>
@endsection
