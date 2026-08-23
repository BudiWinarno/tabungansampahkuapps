@extends('landingpage.layouts.app')

@section('title', 'TabunganSampahku')

@section('content')

    <section class="hero-section2">

        <div class="hero-content">

            <div class="hero-badge">
                <span class="badge-dot"></span>
                Kenali Kami Lebih Dekat
            </div>

            <h1>
                Bersama Mewujudkan
                <br>
                Lingkungan <span>Lebih Bersih</span>
            </h1>

            <p>
                TabunganSampahku adalah platform digital pengelolaan Bank Sampah
                yang di kembangkan oleh Yayasan Peduli Lingkungan Sehat sebagai
                solusi untuk meningkatkan efektivitas, transparansi, dan
                akuntabilitas pengelolaan bank sampah.
            </p>

        </div>

    </section>

    <section class="about-section">

        <!-- Tentang Kami -->
        <div class="about-card">

            <div class="about-title">
                <span></span>
                <h1>Tentang Kami</h1>
            </div>

            <p>
                Aplikasi ini membantu pengurus Bank Sampah dalam mencatat transaksi,
                mengelola data nasabah, menyusun laporan, serta memantau operasional
                secara terintegrasi. Di sisi lain, Nasabah dapat memantau saldo dan
                riwayat transaksi secara real-time melalui perangkat mereka.
            </p>

            <p>
                Dengan TabunganSampahku, pengelolaan banyak Bank Sampah dalam satu
                wilayah menjadi lebih mudah, terstruktur, dan terdigitalisasi,
                sehingga mendukung terwujudnya lingkungan yang lebih bersih dan
                masyarakat yang lebih peduli terhadap pengelolaan sampah.
            </p>

        </div>


        <!-- Feature Cards -->
        <div class="about-features">

            <!-- Card 1 -->
            <div class="about-feature-card">

                <div class="feature-icon feature-icon-green">
                    <i class="bi bi-heart"></i>
                </div>

                <h3>Peduli Lingkungan</h3>

                <p>
                    Berkomitmen menjaga kebersihan dan kelestarian alam melalui
                    edukasi pemilahan sampah.
                </p>

            </div>


            <!-- Card 2 -->
            <div class="about-feature-card">

                <div class="feature-icon feature-icon-blue">
                    <i class="bi bi-coin"></i>
                </div>

                <h3>Nilai Ekonomis</h3>

                <p>
                    Mengubah sampah menjadi berkah dengan sistem tabungan yang
                    menguntungkan warga.
                </p>

            </div>


            <!-- Card 3 -->
            <div class="about-feature-card">

                <div class="feature-icon feature-icon-purple">
                    <i class="bi bi-people"></i>
                </div>

                <h3>Pemberdayaan</h3>

                <p>
                    Melibatkan partisipasi aktif komunitas untuk membangun
                    ekosistem yang berkelanjutan.
                </p>

            </div>

        </div>

    </section>

@endsection
