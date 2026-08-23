<x-guest-layout>

    <div class="register-page">

        <!-- BRAND -->
        <div class="register-brand">
            <h1>TabunganSampahku</h1>
            <p>Buat akun baru Anda</p>
        </div>

        <!-- REGISTER CARD -->
        <div class="register-card">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- NAME -->
                <div class="register-field">
                    <label for="name">NAMA</label>

                    <div class="register-input-wrapper">
                        <span class="register-input-icon">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Nama lengkap"
                            required
                            autofocus
                            autocomplete="name"
                        >
                    </div>

                    <x-input-error
                        :messages="$errors->get('name')"
                        class="register-error"
                    />
                </div>

                <!-- EMAIL -->
                <div class="register-field">
                    <label for="email">EMAIL</label>

                    <div class="register-input-wrapper">
                        <span class="register-input-icon">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            required
                            autocomplete="username"
                        >
                    </div>

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="register-error"
                    />
                </div>

                <!-- PASSWORD -->
                <div class="register-field">
                    <label for="password">PASSWORD</label>

                    <div class="register-input-wrapper">
                        <span class="register-input-icon">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            required
                            autocomplete="new-password"
                        >
                    </div>

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="register-error"
                    />
                </div>

                <!-- CONFIRM PASSWORD -->
                <div class="register-field">
                    <label for="password_confirmation">
                        KONFIRMASI PASSWORD
                    </label>

                    <div class="register-input-wrapper">
                        <span class="register-input-icon">
                            <i class="bi bi-shield-lock"></i>
                        </span>

                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="••••••••"
                            required
                            autocomplete="new-password"
                        >
                    </div>

                    <x-input-error
                        :messages="$errors->get('password_confirmation')"
                        class="register-error"
                    />
                </div>

                <!-- REGISTER BUTTON -->
                <button
                    type="submit"
                    class="register-submit"
                >
                    Daftar
                </button>

            </form>

            <!-- LOGIN -->
            <div class="register-login">
                <span>Sudah punya akun?</span>

                <a href="{{ route('login') }}">
                    Masuk sekarang
                </a>
            </div>

            <!-- BACK -->
            <a
                href="{{ route('index') }}"
                class="register-back"
            >
                <i class="bi bi-chevron-left"></i>
                Kembali ke Beranda
            </a>

        </div>

        <!-- FOOTER -->
        <div class="register-footer">
            © Yayasan Peduli Lingkungan Sehat
        </div>

    </div>

</x-guest-layout>