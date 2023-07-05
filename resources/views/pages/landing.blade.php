@extends('layouts.master')
@section('title', 'Landing Page')

@section('content')
    <!-- Hero -->
    <section class="hero">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="align-items-start">
                    <img class="hero-badge" src="{{ URL::asset('assets/images/hero-badge.svg') }}" alt="" />
                    <h1>
                        Financial Service <br />
                        Modern
                    </h1>
                    <h3>
                        Solusi digital Anda dalam efektivitas <br />
                        dan efisiensi untuk operasional bisnis Anda
                    </h3>
                    <button class="btn btn-main">Pelajari Lebih Lanjut</button>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <img class="hero-img" src="{{ URL::asset('assets/images/hero-img.png') }}" alt="" />
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="vision">
        <div class="row">
            <div class="heading">
                <p>Tujuan dan Langkah</p>
                <h2>Visi Misi yang Selaras</h2>
            </div>
            <div class="row content">
                <div class="col-md-6">
                    <img src="{{ URL::asset('assets/images/ic_vision.svg') }}" alt="" />
                    <h4>Visi Kami</h4>
                    <p>
                        Komitmen kami adalah memberikan pengalaman pengguna yang luar
                        biasa, menjaga standar keamanan dan privasi tertinggi, dan
                        menumbuhkan kepercayaan dalam industri notaris digital
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ URL::asset('assets/images/ic_mission.svg') }}" alt="" />
                    <h4>Misi Kami</h4>
                    <p>
                        Menumbuhkan masyarakat digital yang percaya diri untuk proses
                        kenotariatan dan perbaikan sistem serta menyertakan keterlibatan
                        Notaris dalam industri 4.0
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="row">
            <div class="heading">
                <h2>Bidang Keahlian</h2>
                <p>
                    Keunggulan yang menawarkan rasa aman serta akses tak <br />
                    terbatas pada sumberdaya berkualitas
                </p>
            </div>
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img class="features-img" src="{{ URL::asset('assets/images/features-img.png') }}" alt="" />
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="features-list">
                                <div class="features-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <img class="features-icon"
                                                src="{{ URL::asset('assets/images/ic_solution.svg') }}" alt="" />
                                        </div>
                                        <div class="ms-3 col">
                                            <h4>Solusi Teknologi Finansial</h4>
                                            <p>
                                                Kemitraan dengan lembaga keuangan untuk mengembangkan
                                                pasar baru melalui proses distribusi echannel.
                                            </p>
                                            <a class="features-cta" href="#">Selengkapnya
                                                <span><img src="{{ URL::asset('assets/images/arrow-right.svg') }}"
                                                        alt="" /></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="features-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <img class="features-icon"
                                                src="{{ URL::asset('assets/images/ic_process.svg') }}" alt="" />
                                        </div>
                                        <div class="ms-3 col">
                                            <h4>Bisnis Proses</h4>
                                            <p>
                                                Re-engineering Menawarkan teknologi sebagai solusi
                                                proses bisnis yang lebih efisien dan efektif.
                                            </p>
                                            <a class="features-cta" href="#">Selengkapnya
                                                <span><img src="{{ URL::asset('assets/images/arrow-right.svg') }}"
                                                        alt="" /></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="features-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <img class="features-icon" src="{{ URL::asset('assets/images/ic_gift.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="ms-3 col">
                                            <h4>Penawaran Konsultasi Produk</h4>
                                            <p>
                                                Strategi produk dan konsultasi produk baru untuk
                                                lembaga keuangan.
                                            </p>
                                            <a class="features-cta" href="#">Selengkapnya
                                                <span><img src="{{ URL::asset('assets/images/arrow-right.svg') }}"
                                                        alt="" /></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="service">
        <div class="row">
            <div class="heading">
                <p>Service</p>
                <h2>Safe & Comfortable with Natadana</h2>
                <span>
                    Avoid human error dan Minimize human intervention in accessing your
                    data, anywhere.
                </span>
            </div>
            <div class="content mt-5">
                <div class="service-list">
                    <!-- row on desktop & tablet -->
                    <div class="row row-desktop">
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="icon-wrap">
                                    <div class="icon">
                                        <img src="{{ URL::asset('assets/images/ic_automation.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h4>Otomatisasi</h4>
                                <p>
                                    An all-in-one customer service platform that helps you
                                    balance everything.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="icon-wrap">
                                    <div class="icon">
                                        <img src="{{ URL::asset('assets/images/ic_shield.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h4>Keamanan data</h4>
                                <p>
                                    Work faster and smarter by integrating directly with Slack,
                                    right in the app.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="icon-wrap">
                                    <div class="icon">
                                        <img src="{{ URL::asset('assets/images/ic_clock.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h4>Efesiensi waktu</h4>
                                <p>
                                    Work faster and smarter by integrating directly with Slack,
                                    right in the app.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="icon-wrap">
                                    <div class="icon">
                                        <img src="{{ URL::asset('assets/images/ic_monitor.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h4>Pemantauan</h4>
                                <p>
                                    Work faster and smarter by integrating directly with Slack,
                                    right in the app.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="icon-wrap">
                                    <div class="icon">
                                        <img src="{{ URL::asset('assets/images/ic_certificate.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h4>Tersertifikasi ISO 270001</h4>
                                <p>
                                    Work faster and smarter by integrating directly with Slack,
                                    right in the app.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="icon-wrap">
                                    <div class="icon">
                                        <img src="{{ URL::asset('assets/images/ic_database.svg') }}" alt="" />
                                    </div>
                                </div>
                                <h4>Data Tersimpan Secara Digital</h4>
                                <p>
                                    Work faster and smarter by integrating directly with Slack,
                                    right in the app.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- row on mobile -->
                    <div class="row row-mobile">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_automation.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Otomatisasi</h4>
                                        <p>
                                            An all-in-one customer service platform that helps you
                                            balance everything.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_shield.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Keamanan data</h4>
                                        <p>
                                            Work faster and smarter by integrating directly with
                                            Slack, right in the app.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_clock.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Efesiensi waktu</h4>
                                        <p>
                                            Work faster and smarter by integrating directly with
                                            Slack, right in the app.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_clock.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Efesiensi waktu</h4>
                                        <p>
                                            Work faster and smarter by integrating directly with
                                            Slack, right in the app.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_monitor.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Pemantauan</h4>
                                        <p>
                                            Work faster and smarter by integrating directly with
                                            Slack, right in the app.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_certificate.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Tersertifikasi ISO 270001</h4>
                                        <p>
                                            Work faster and smarter by integrating directly with
                                            Slack, right in the app.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="icon-wrap">
                                            <div class="icon">
                                                <img src="{{ URL::asset('assets/images/ic_database.svg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <h4>Data Tersimpan Secara Digital</h4>
                                        <p>
                                            Work faster and smarter by integrating directly with
                                            Slack, right in the app.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="contact">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ URL::asset('assets/images/contact_img.jpg') }}" alt="" />
            </div>
            <div class="col-md-6">
                <h2>Hubungi Kami</h2>
                <p>Anda dapat menghubungi kami kapan saja melalui admin@nda.co.id</p>
                <form action="#" method="post">
                    <!-- name field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" />
                    </div>
                    <div class="mb-3">
                        <label for="no.telp" class="form-label">No. Handphone</label>
                        <input type="text" class="form-control" id="no.telp" placeholder="+62 (555) 000-0000" />
                    </div>
                    <div class="mb-3">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="4" placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                    <button class="btn btn-main" type="submit">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
