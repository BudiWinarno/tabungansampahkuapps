<x-app-layout>

    <div>

        <!-- WELCOME -->
        <h1 class="welcome-title">
            Halo, {{ auth()->user()->name }}!
        </h1>

        <p class="welcome-subtitle">
            Pantau ringkasan aktivitas dan informasi terkini Anda di sini.
        </p>


        <!-- STATISTICS -->
        <div class="stats-grid">

            <!-- NASABAH -->
            <div class="stat-card">

                <div class="stat-icon green">
                    ♧
                </div>

                <div>
                    <div class="stat-label">
                        Total Nasabah
                    </div>

                    <div class="stat-value">
                        0
                    </div>
                </div>

            </div>


            <!-- KAS -->
            <div class="stat-card">

                <div class="stat-icon mint">
                    ▣
                </div>

                <div>
                    <div class="stat-label">
                        Kas Bank Sampah
                    </div>

                    <div class="stat-value">
                        Rp 0
                    </div>
                </div>

            </div>


            <!-- TRANSAKSI -->
            <div class="stat-card">

                <div class="stat-icon orange">
                    ∿
                </div>

                <div>
                    <div class="stat-label">
                        Transaksi Setor Hari Ini
                    </div>

                    <div class="stat-value">
                        0
                    </div>
                </div>

            </div>

        </div>


        <!-- LOWER CARDS -->
        <div class="dashboard-grid">

            <div class="dashboard-card">

                <div class="dashboard-card-title">

                    <span class="icon">
                        ↗
                    </span>

                    <span>
                        Leaderboard Nasabah Paling Aktif
                    </span>

                </div>

            </div>


            <div class="dashboard-card">

                <div class="dashboard-card-title">

                    <span class="icon">
                        ♧
                    </span>

                    <span>
                        Komposisi Sampah (Semua Waktu)
                    </span>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>