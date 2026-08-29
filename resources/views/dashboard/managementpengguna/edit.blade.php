<x-app-layout>
    
<div class="create-page">

    <div class="create-card">

        <!-- HEADER -->
        <div class="create-header">

            <div class="create-header-icon">
                ✎
            </div>

            <div class="create-header-text">

                <h1>
                    Edit Account
                </h1>

                <p>
                    Update user information, role and access
                </p>

            </div>

        </div>


        <!-- FORM -->
        <form
            action="{{ route('management-pengguna.update', $managementpengguna->id) }}"
            method="POST"
            class="create-form"
        >

            @csrf
            @method('PUT')


            <div class="user-form-grid">

                <!-- LEFT COLUMN -->
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

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $managementpengguna->name) }}"
                                placeholder="e.g. blok A01"
                                required
                            >

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

                                <input
                                    type="radio"
                                    name="role"
                                    value="keuangan"
                                    {{ old('role', $managementpengguna->role) == 'keuangan' ? 'checked' : '' }}
                                >

                                <span class="role-checkbox"></span>

                                <span class="role-name">
                                    Keuangan
                                </span>

                            </label>


                            <!-- ADMINISTRATOR -->
                            <label class="role-option">

                                <input
                                    type="radio"
                                    name="role"
                                    value="administrator"
                                    {{ old('role', $managementpengguna->role) == 'administrator' ? 'checked' : '' }}
                                >

                                <span class="role-checkbox"></span>

                                <span class="role-name">
                                    Administrator
                                </span>

                            </label>


                            <!-- ENTRY DATA -->
                            <label class="role-option">

                                <input
                                    type="radio"
                                    name="role"
                                    value="entry_data"
                                    {{ old('role', $managementpengguna->role) == 'entry_data' ? 'checked' : '' }}
                                >

                                <span class="role-checkbox"></span>

                                <span class="role-name">
                                    Entry Data
                                </span>

                            </label>


                            <!-- NASABAH -->
                            <label class="role-option primary">

                                <input
                                    type="radio"
                                    name="role"
                                    value="nasabah"
                                    {{ old('role', $managementpengguna->role) == 'nasabah' ? 'checked' : '' }}
                                >

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
                            Pilih role untuk account ini
                        </small>

                        @error('role')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>


                <!-- RIGHT COLUMN -->
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

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email', $managementpengguna->email) }}"
                                placeholder="e.g. user@example.com"
                                required
                            >

                        </div>

                        @error('email')
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

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Leave blank to keep current password"
                            >

                        </div>

                        <small class="form-helper">
                            Kosongkan jika tidak ingin mengubah password
                        </small>

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
                                {{ $managementpengguna->is_active
                                    ? 'Account is currently active'
                                    : 'Account is currently inactive' }}
                            </span>

                        </div>

                        <label class="switch">

                            <input
                                type="checkbox"
                                name="is_active"
                                value="1"
                                {{ old('is_active', $managementpengguna->is_active) ? 'checked' : '' }}
                            >

                            <span class="slider"></span>

                        </label>

                    </div>

                </div>

            </div>


            <!-- FOOTER -->
            <div class="form-footer">

                <a
                    href="{{ route('management-pengguna.index') }}"
                    class="discard-button"
                >
                    CANCEL
                </a>

                <button
                    type="submit"
                    class="create-button"
                >
                    UPDATE ACCOUNT
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>
