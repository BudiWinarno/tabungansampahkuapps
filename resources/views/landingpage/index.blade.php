@extends('landingpage.layouts.app')

@section('title', 'TabunganSampahku')

@section('content')
    <img src="{{ asset('images/bannerhoempage.png') }}" alt="Banner Homepage" class="img-fluid w-100">

    <div class="container">
        <div class="row align-items-center hero-section">

            <!-- KIRI -->
            <div class="col-md-6 hero-left">

                <p class="digitalisasi-badge mb-4">
                    <span class="status-dot"></span>
                    Digitalisasi Bank Sampah
                </p>

                <h1 class="hero-title mb-4">
                    Aplikasi Pengelolaan
                    <span>Bank Sampah<br>Terintegrasi</span>
                </h1>

                <p class="hero-description">
                    Pencatatan transaksi lebih cepat, laporan otomatis, dan
                    pengecekan saldo nasabah secara <em>real time</em>. Solusi digital untuk
                    pengelolaan Bank Sampah yang <strong>transparan</strong> dan
                    <strong>akuntabel</strong>
                </p>

                <div class="hero-buttons">
                    <a href="#" class="btn-mulai">
                        Mulai Sekarang
                        <span>→</span>
                    </a>

                    <a href="#" class="btn-pelajari">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

                <!-- STATISTIK -->
                <img src="{{ asset('images/image2.png') }}" alt="Statistik Bank Sampah" class="stats-image">

            </div>


            <!-- KANAN -->
            <div class="col-md-6 hero-right">

                <img src="{{ asset('images/image3.png') }}" alt="Dashboard TabunganSampahku" class="hero-image">

            </div>

        </div>
    </div>


    <div class="container fitur-section">

        <h5 class="section-label mb-3">
            FITUR UTAMA
        </h5>

        <h1 class="fitur-title mb-2">
            Fitur Kami
        </h1>

        <p class="fiturdesc">
            Pelajari lebih lanjut fitur-fitur Kami
        </p>

        <img src="{{ asset('images/image4.png') }}" alt="Fitur Utama" class="fitur-image">

    </div>


    <section class="cta-section">
        <div class="cta-card">

            <h1>
                Nikmati berbagai kemudahan<br>
                Menabung Sampah
            </h1>

            <p>
                Bergabunglah dengan ratusan Nasabah Bank Sampah lainnya yang telah
                bertransformasi ke Era Digital.
            </p>

            <a href="#" class="cta-button">
                Daftar Sekarang Gratis
                <span>→</span>
            </a>

        </div>
    </section>
@endsection
