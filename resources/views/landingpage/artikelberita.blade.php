@extends('landingpage.layouts.app')

@section('title', 'TabunganSampahku')

@section('content')

<section class="artikel-section">

    <div class="artikel-content">

        <h1>Artikel & Berita Terkini</h1>

        <p>
            Temukan informasi, tips, dan berita terbaru seputar lingkungan hidup dan
            <br class="artikel-break">
            pengelolaan sampah.
        </p>

        <form class="artikel-search" action="#" method="GET">

            <i class="bi bi-search"></i>

            <input
                type="text"
                name="search"
                placeholder="Cari artikel..."
            >

            <button type="submit">
                Cari
            </button>

        </form>

    </div>

</section>

@endsection