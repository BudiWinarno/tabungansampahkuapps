@extends('landingpage.layouts.app')

@section('title', 'TabunganSampahku')

@section('content')

<section class="lokasi-section">

    <div class="lokasi-content">

        <h1>Lokasi Bank Sampah</h1>

        <p>
            Temukan lokasi Bank Sampah terdekat dari Anda.
        </p>

        <div class="lokasi-search">

            <i class="bi bi-search"></i>

            <input
                type="text"
                placeholder="Cari berdasarkan nama atau alamat..."
            >

        </div>

    </div>

</section>

@endsection