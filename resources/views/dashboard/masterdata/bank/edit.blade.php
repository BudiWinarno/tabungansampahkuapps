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
                        Edit Master Bank
                    </h1>

                    <p>
                        Update master bank information
                    </p>

                </div>

            </div>


            <!-- FORM -->
            <form action="{{ route('master-bank.update', $masterBank->id) }}" method="POST" class="create-form">

                @csrf
                @method('PUT')


                <!-- BANK CODE -->
                <div class="form-group">

                    <label for="kode">
                        BANK CODE
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            ♜
                        </span>

                        <input type="text" id="kode" name="kode" value="{{ old('kode', $masterBank->kode) }}"
                            placeholder="e.g. BCA" maxlength="20" required>

                    </div>

                    @error('kode')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- BANK NAME -->
                <div class="form-group">

                    <label for="nama">
                        BANK NAME
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            T
                        </span>

                        <input type="text" id="nama" name="nama" value="{{ old('nama', $masterBank->nama) }}"
                            placeholder="e.g. Bank Central Asia" required>

                    </div>

                    @error('nama')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- DESCRIPTION -->
                <div class="form-group">

                    <label for="deskripsi">
                        DESCRIPTION
                    </label>

                    <div class="input-wrapper textarea-wrapper">

                        <span class="input-icon textarea-icon">
                            ≡
                        </span>

                        <textarea id="deskripsi" name="deskripsi" placeholder="Bank description..." rows="4">{{ old('deskripsi', $masterBank->deskripsi) }}</textarea>

                    </div>

                    @error('deskripsi')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- FOOTER -->
                <div class="form-footer">

                    <a href="{{ route('master-bank.index') }}" class="discard-button">
                        DISCARD
                    </a>


                    <button type="submit" class="create-button">
                        UPDATE MASTER BANK
                    </button>

                </div>

            </form>

        </div>

    </div>

</x-app-layout>
