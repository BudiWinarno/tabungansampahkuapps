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
                        Create Jenis Sampah
                    </h1>

                    <p>
                        Add a new jenis sampah to the system
                    </p>

                </div>

            </div>


            <!-- FORM -->
            <form
                action="{{ route('jenis-sampah.store') }}"
                method="POST"
                class="create-form">

                @csrf


                <!-- NAMA -->
                <div class="form-group">

                    <label for="nama">
                        NAMA
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            T
                        </span>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            value="{{ old('nama') }}"
                            placeholder="e.g. Plastik"
                            required
                        >

                    </div>

                    @error('nama')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- KETERANGAN -->
                <div class="form-group">

                    <label for="keterangan">
                        KETERANGAN
                    </label>

                    <div class="textarea-wrapper">

                        <span class="textarea-icon">
                            ☰
                        </span>

                        <textarea
                            id="keterangan"
                            name="keterangan"
                            placeholder="Jenis sampah description..."
                        >{{ old('keterangan') }}</textarea>

                    </div>

                    @error('keterangan')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- SATUAN / HARGA -->
                <div class="form-row">

                    <!-- SATUAN -->
                    <div class="form-group">

                        <label for="satuan">
                            SATUAN
                        </label>

                        <div class="select-wrapper">

                            <span class="input-icon">
                                ⚖
                            </span>

                            <select
                                id="satuan"
                                name="satuan"
                                required
                            >
                                <option value="Kg"
                                    {{ old('satuan', 'Kg') == 'Kg' ? 'selected' : '' }}>
                                    Kg
                                </option>

                                <option value="Gram"
                                    {{ old('satuan') == 'Gram' ? 'selected' : '' }}>
                                    Gram
                                </option>

                                <option value="Liter"
                                    {{ old('satuan') == 'Liter' ? 'selected' : '' }}>
                                    Liter
                                </option>

                                <option value="Pcs"
                                    {{ old('satuan') == 'Pcs' ? 'selected' : '' }}>
                                    Pcs
                                </option>
                            </select>

                            <span class="select-arrow">
                                ⌄
                            </span>

                        </div>

                    </div>


                    <!-- HARGA -->
                    <div class="form-group">

                        <label for="harga">
                            HARGA
                        </label>

                        <div class="input-wrapper">

                            <input
                                type="number"
                                id="harga"
                                name="harga"
                                value="{{ old('harga') }}"
                                placeholder="e.g. 5000"
                                min="0"
                                step="0.01"
                                required
                            >

                        </div>

                        @error('harga')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- HARGA PENGEPUL -->
                    <div class="form-group">

                        <label for="harga_pengepul">
                            HARGA PENGEPUL
                        </label>

                        <div class="input-wrapper">

                            <input
                                type="number"
                                id="harga_pengepul"
                                name="harga_pengepul"
                                value="{{ old('harga_pengepul') }}"
                                placeholder="e.g. 3000"
                                min="0"
                                step="0.01"
                                required
                            >

                        </div>

                        @error('harga_pengepul')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>


                <!-- RIWAYAT HARGA -->
                <div class="history-option">

                    <label class="checkbox-label">

                        <input
                            type="checkbox"
                            name="simpan_riwayat_harga"
                            value="1"
                        >

                        <span class="custom-checkbox">
                            ✓
                        </span>

                        <span>
                            Simpan riwayat harga
                        </span>

                    </label>

                </div>


                <!-- FOOTER -->
                <div class="form-footer">

                    <a
                        href="{{ route('jenis-sampah.index') }}"
                        class="discard-button">

                        DISCARD

                    </a>


                    <button
                        type="submit"
                        class="create-button">

                        CREATE JENIS SAMPAH

                    </button>

                </div>

            </form>

        </div>

    </div>

</x-app-layout>