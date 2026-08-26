<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'TabunganSampahku') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system,
                BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f7f8fc;
            color: #253044;
        }

        .dashboard-wrapper {
            min-height: 100vh;
            display: flex;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 222px;
            background: #071313;
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand {
            height: 49px;
            padding: 0 34px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, .05);
        }

        .sidebar-brand h1 {
            font-size: 13px;
            font-weight: 700;
            margin: 0;
            color: #fff;
        }

        .sidebar-menu {
            padding: 15px 10px;
            flex: 1;
        }

        .menu-title {
            font-size: 9px;
            font-weight: 700;
            color: #87918f;
            letter-spacing: .5px;
            padding: 0 16px;
            margin-bottom: 8px;
        }

        .menu-item {
            height: 38px;
            margin-bottom: 2px;
            padding: 0 12px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            gap: 11px;
            color: #9ca7a6;
            text-decoration: none;
            font-size: 11px;
            font-weight: 500;
            transition: .2s;
        }

        .menu-item:hover {
            background: rgba(255, 255, 255, .06);
            color: #fff;
        }

        .menu-item.active {
            background: linear-gradient(90deg, #20b954, #12a843);
            color: #fff;
            font-weight: 600;
        }

        .menu-icon {
            width: 16px;
            height: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .menu-arrow {
            margin-left: auto;
            font-size: 14px;
        }

        /* =========================
           SIDEBAR BOTTOM
        ========================= */

        .sidebar-bottom {
            border-top: 1px solid rgba(255, 255, 255, .06);
            padding: 22px 14px 18px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 0 14px 0;
        }

        .user-avatar {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: #e8f5e9;
            color: #2d7745;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
        }

        .user-name {
            font-size: 11px;
            font-weight: 600;
            color: #fff;
        }

        .user-email {
            font-size: 8px;
            color: #a2acab;
            margin-top: 2px;
        }

        .user-role {
            font-size: 8px;
            color: #48bf69;
            margin-top: 2px;
        }

        .role-selector {
            height: 28px;
            border-radius: 7px;
            background: #14201f;
            display: flex;
            align-items: center;
            padding: 0 8px;
            color: #79c88c;
            font-size: 9px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .role-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #35bc5a;
            margin-right: 7px;
        }

        .role-arrow {
            margin-left: auto;
            color: #889492;
        }

        .logout-button {
            display: flex;
            align-items: center;
            gap: 9px;
            color: #ef4e5c;
            font-size: 11px;
            text-decoration: none;
            padding: 4px 2px;
        }

        .logout-button:hover {
            color: #ff6875;
        }

        /* =========================
           MAIN
        ========================= */

        .main-wrapper {
            margin-left: 222px;
            width: calc(100% - 222px);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 49px;
            background: #fff;
            border-bottom: 1px solid #e9ebf0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .03);
        }

        .page-title {
            font-size: 11px;
            font-weight: 600;
            color: #3d4656;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .view-web {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #687183;
            font-size: 10px;
            text-decoration: none;
        }

        .top-user {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #606978;
            font-size: 10px;
        }

        .top-avatar {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #e4f4e7;
            color: #3d8c53;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: 700;
        }

        .top-chevron {
            font-size: 11px;
            color: #8b929d;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            flex: 1;
            padding: 20px 18px 0;
        }

        .welcome-title {
            margin: 0;
            font-size: 20px;
            line-height: 1.3;
            font-weight: 700;
            color: #243044;
        }

        .welcome-subtitle {
            margin: 4px 0 18px;
            font-size: 11px;
            color: #7b8495;
        }

        /* =========================
           STAT CARDS
        ========================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 18px;
        }

        .stat-card {
            min-height: 89px;
            background: #fff;
            border: 1px solid #e8eaf0;
            border-radius: 22px;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 1px 4px rgba(30, 40, 60, .02);
        }

        .stat-icon {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .stat-icon.green {
            background: #effaf2;
            color: #43975b;
        }

        .stat-icon.mint {
            background: #edfbf5;
            color: #31ad77;
        }

        .stat-icon.orange {
            background: #fff9e9;
            color: #e3a328;
        }

        .stat-label {
            font-size: 10px;
            color: #7b8491;
            margin-bottom: 4px;
        }

        .stat-value {
            font-size: 17px;
            line-height: 1;
            font-weight: 700;
            color: #202a3b;
        }

        /* =========================
           LOWER CARDS
        ========================= */

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .dashboard-card {
            min-height: 70px;
            background: #fff;
            border: 1px solid #e9ebf0;
            border-radius: 22px;
            padding: 20px;
            box-shadow: 0 1px 4px rgba(30, 40, 60, .02);
        }

        .dashboard-card-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            font-weight: 700;
            color: #263043;
        }

        .dashboard-card-title .icon {
            color: #43b969;
            font-size: 15px;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            height: 38px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding-bottom: 8px;
            font-size: 9px;
            color: #a5acb9;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 900px) {
            .sidebar {
                width: 210px;
            }

            .main-wrapper {
                margin-left: 210px;
                width: calc(100% - 210px);
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }

            .main-wrapper {
                margin-left: 0;
                width: 100%;
            }

            .topbar {
                padding: 0 14px;
            }

            .content {
                padding: 18px 12px;
            }

            .welcome-title {
                font-size: 18px;
            }

            .topbar-right .view-web {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-wrapper">

        <!-- SIDEBAR -->
        <aside class="sidebar">

            <div class="sidebar-brand">
                <h1>TabunganSampahku</h1>
            </div>

            <nav class="sidebar-menu">

                <div class="menu-title">
                    MAIN MENU
                </div>

                <a href="{{ route('dashboard') }}"
                    class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="menu-icon">▦</span>
                    <span>Dashboard</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">＄</span>
                    <span>Setor Sampah</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">▣</span>
                    <span>Arus Kas</span>
                </a>

                <div class="menu-group">

                    <button type="button"
                        class="menu-item menu-parent {{ request()->is('master-data/*') ? 'open' : '' }}"
                        onclick="toggleMasterData()">

                        <span class="menu-icon">▤</span>

                        <span>Master Data</span>

                        <span class="menu-arrow" id="masterDataArrow">⌄</span>

                    </button>


                    <div id="masterDataSubmenu" class="submenu {{ request()->is('master-data/*') ? 'show' : '' }}">

                        <a href="#" class="submenu-item">
                            <span class="submenu-icon">▣</span>
                            <span>Jenis Transaksi</span>
                        </a>

                        <a href="#" class="submenu-item">
                            <span class="submenu-icon">▣</span>
                            <span>Periode Laporan</span>
                        </a>

                        <a href="#" class="submenu-item">
                            <span class="submenu-icon">▦</span>
                            <span>Mitra Bank Sampah</span>
                        </a>

                        <a href="#" class="submenu-item">
                            <span class="submenu-icon">▣</span>
                            <span>Bank</span>
                        </a>

                        <a href="{{ route('jenis-sampah.index') }}"
                            class="submenu-item {{ request()->routeIs('jenis-sampah.index') ? 'active' : '' }}">

                            <span class="submenu-icon">▦</span>
                            <span>Jenis Sampah</span>

                        </a>

                    </div>

                </div>

                <a href="#" class="menu-item">
                    <span class="menu-icon">◷</span>
                    <span>Laporan</span>
                    <span class="menu-arrow">›</span>
                </a>

                <a href="{{ route('management-pengguna.index') }}"
                    class="menu-item {{ request()->routeIs('management-pengguna.*') ? 'active' : '' }}">

                    <span class="menu-icon">♧</span>

                    <span>Manajemen Pengguna</span>

                </a>

                <a href="{{ route('profile.edit') }}" class="menu-item">
                    <span class="menu-icon">♙</span>
                    <span>Profile</span>
                </a>

            </nav>

            <!-- SIDEBAR USER -->
            <div class="sidebar-bottom">

                <div class="user-info">

                    <div class="user-avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                    </div>

                    <div>
                        <div class="user-name">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="user-email">
                            {{ auth()->user()->email }}
                        </div>

                        <div class="user-role">
                            Bank Sampah Sample
                        </div>
                    </div>

                </div>

                <div class="role-selector">
                    <span class="role-dot"></span>
                    Administrator
                    <span class="role-arrow">⌄</span>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="logout-button" style="background:none;border:0;cursor:pointer;">
                        <span>⇥</span>
                        <span>Sign out</span>
                    </button>
                </form>

            </div>

        </aside>


        <!-- MAIN -->
        <main class="main-wrapper">

            <!-- TOPBAR -->
            <header class="topbar">

                <div class="page-title">
                    Dashboard
                </div>

                <div class="topbar-right">

                    <a href="#" class="view-web">
                        ◉
                        <span>Lihat Web</span>
                    </a>

                    <div class="top-user">

                        <div class="top-avatar">
                            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                        </div>

                        <span>
                            {{ auth()->user()->name }}
                        </span>

                        <span class="top-chevron">
                            ⌄
                        </span>

                    </div>

                </div>

            </header>


            <!-- CONTENT -->
            <section class="content">

                {{ $slot }}

            </section>

        </main>

    </div>

    <script>
        function toggleMasterData() {

            const submenu = document.getElementById('masterDataSubmenu');
            const parent = document.querySelector('.menu-parent');
            const arrow = document.getElementById('masterDataArrow');

            submenu.classList.toggle('show');
            parent.classList.toggle('open');

            if (submenu.classList.contains('show')) {
                arrow.textContent = '⌄';
            } else {
                arrow.textContent = '›';
            }
        }
    </script>

</body>

</html>
