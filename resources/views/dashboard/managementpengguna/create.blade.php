<x-app-layout>

    <div class="create-page">

        <div class="create-card">

            <!-- HEADER -->
            <div class="create-header">

                <div class="create-header-icon">
                    +
                </div>

                <div class="create-header-text">

                    <h1>
                        Create New Account
                    </h1>

                    <p>
                        Set up a new user with specific role and access
                    </p>

                </div>

            </div>


            <!-- FORM -->
            <form action="{{ route('management-pengguna.store') }}" method="POST" class="create-form">

                @csrf


                <div class="user-form-grid">

                    <!-- =========================================
                         LEFT COLUMN
                    ========================================== -->
                    <div class="user-form-column">


                        <!-- FULL NAME -->
                        <div class="form-group">

                            <label for="name">
                                FULL NAME
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon">
                                    ♙
                                </span>

                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="e.g. blok A01" required>

                            </div>

                            @error('name')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- USER ROLE -->
                        <div class="form-group">

                            <label>
                                USER ROLE
                            </label>

                            <div class="role-list">

                                <!-- KEUANGAN -->
                                <label class="role-option">

                                    <input type="checkbox" name="roles[]" value="keuangan"
                                        {{ in_array('keuangan', old('roles', [])) ? 'checked' : '' }}>

                                    <span class="role-checkbox"></span>

                                    <span class="role-name">
                                        Keuangan
                                    </span>

                                </label>


                                <!-- ADMINISTRATOR -->
                                <label class="role-option">

                                    <input type="checkbox" name="roles[]" value="administrator"
                                        {{ in_array('administrator', old('roles', [])) ? 'checked' : '' }}>

                                    <span class="role-checkbox"></span>

                                    <span class="role-name">
                                        Administrator
                                    </span>

                                </label>


                                <!-- ENTRY DATA -->
                                <label class="role-option">

                                    <input type="checkbox" name="roles[]" value="entry_data"
                                        {{ in_array('entry_data', old('roles', [])) ? 'checked' : '' }}>

                                    <span class="role-checkbox"></span>

                                    <span class="role-name">
                                        Entry Data
                                    </span>

                                </label>


                                <!-- NASABAH -->
                                <label class="role-option primary">

                                    <input type="checkbox" name="roles[]" value="nasabah"
                                        {{ in_array('nasabah', old('roles', ['nasabah'])) ? 'checked' : '' }}>

                                    <span class="role-checkbox"></span>

                                    <span class="role-name">
                                        Nasabah
                                    </span>

                                    <span class="primary-label">
                                        PRIMARY
                                    </span>

                                </label>

                            </div>

                            <small class="form-helper">
                                Role pertama yang dipilih akan menjadi role utama
                            </small>

                            @error('roles')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                    </div>


                    <!-- =========================================
                         RIGHT COLUMN
                    ========================================== -->
                    <div class="user-form-column">


                        <!-- EMAIL ADDRESS -->
                        <div class="form-group">

                            <label for="email">
                                EMAIL ADDRESS
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon">
                                    ✉
                                </span>

                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="e.g. user@example.com" required>

                            </div>

                            @error('email')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- BIRTH DATE -->
                        <div class="form-group">

                            <label for="birth_date">
                                BIRTH DATE
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon">
                                    ▣
                                </span>

                                <input type="date" id="birth_date" name="birth_date"
                                    value="{{ old('birth_date') }}">

                            </div>

                            @error('birth_date')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- PASSWORD -->
                        <div class="form-group">

                            <label for="password">
                                PASSWORD
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon">
                                    🔒
                                </span>

                                <input type="password" id="password" name="password" placeholder="Enter password"
                                    required>

                            </div>

                            @error('password')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- ACCOUNT STATUS -->
                        <div class="account-status">

                            <div class="status-icon">
                                ✓
                            </div>

                            <div class="status-text">

                                <strong>
                                    Account Status
                                </strong>

                                <span>
                                    Account is currently active
                                </span>

                            </div>

                            <label class="switch">

                                <input type="checkbox" name="is_active" value="1"
                                    {{ old('is_active', true) ? 'checked' : '' }}>

                                <span class="slider"></span>

                            </label>

                        </div>

                    </div>

                </div>


                <!-- =========================================
                     FOOTER
                ========================================== -->
                <div class="form-footer">

                    <a href="{{ route('management-pengguna.index') }}" class="discard-button">

                        DISCARD CHANGES

                    </a>


                    <button type="submit" class="create-button">

                        CREATE ACCOUNT

                    </button>

                </div>

            </form>

        </div>

    </div>

</x-app-layout>
