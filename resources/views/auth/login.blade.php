<x-guest-layout>

    <div class="login-page">

        <!-- BRAND -->
        <div class="login-brand">
            <h1>TabunganSampahku</h1>
            <p>Masuk ke akun Anda</p>
        </div>

        <!-- LOGIN CARD -->
        <div class="login-card">

            <x-auth-session-status
                class="login-status"
                :status="session('status')"
            />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div class="login-field">

                    <label for="email">
                        EMAIL
                    </label>

                    <div class="login-input-wrapper">

                        <span class="login-input-icon">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            required
                            autofocus
                            autocomplete="username"
                        >

                    </div>

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="login-error"
                    />

                </div>


                <!-- PASSWORD -->
                <div class="login-field">

                    <label for="password">
                        PASSWORD
                    </label>

                    <div class="login-input-wrapper">

                        <span class="login-input-icon">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            required
                            autocomplete="current-password"
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            aria-label="Tampilkan password"
                        >
                            <i id="password-eye" class="bi bi-eye"></i>
                        </button>

                    </div>

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="login-error"
                    />

                </div>


                <!-- REMEMBER + FORGOT -->
                <div class="login-options">

                    <label class="remember-wrapper">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                        >

                        <span>Ingat saya</span>

                    </label>


                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="forgot-password"
                        >
                            Lupa password?
                        </a>

                    @endif

                </div>


                <!-- LOGIN BUTTON -->
                <button type="submit" class="login-submit">
                    Masuk
                </button>

            </form>


            <!-- REGISTER -->
            <div class="login-register">

                <span>Belum punya akun?</span>

                @if (Route::has('register'))

                    <a href="{{ route('register') }}">
                        Daftar sekarang
                    </a>

                @endif

            </div>


            <!-- BACK -->
            <a
                href="{{ route('index') }}"
                class="back-home"
            >
                <i class="bi bi-chevron-left"></i>
                Kembali ke Beranda
            </a>

        </div>


        <!-- FOOTER -->
        <div class="login-footer">
            © Yayasan Peduli Lingkungan Sehat
        </div>

    </div>


    <script>
        function togglePassword() {

            const password = document.getElementById('password');
            const eye = document.getElementById('password-eye');

            if (password.type === 'password') {

                password.type = 'text';

                eye.classList.remove('bi-eye');
                eye.classList.add('bi-eye-slash');

            } else {

                password.type = 'password';

                eye.classList.remove('bi-eye-slash');
                eye.classList.add('bi-eye');

            }
        }
    </script>

</x-guest-layout>