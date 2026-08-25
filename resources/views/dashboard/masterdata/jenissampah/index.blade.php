<x-app-layout>

    <div class="page-container">

        <!-- TOOLBAR -->
        <div class="page-toolbar">

            <div class="toolbar-left">

                <div class="search-box">
                    <span class="search-icon">⌕</span>

                    <input type="text" id="searchInput" placeholder="Search jenis sampah...">
                </div>

                <button type="button" class="filter-button">
                    <span>▽</span>
                    <span>Filters</span>
                    <span class="filter-arrow">⌄</span>
                </button>

            </div>


            <div class="toolbar-right">

                <button type="button" class="action-button excel">
                    <span>▣</span>
                    <span>Excel</span>
                </button>

                <button type="button" class="action-button pdf">
                    <span>▤</span>
                    <span>PDF</span>
                </button>

                <button type="button" class="action-button print">
                    <span>▣</span>
                    <span>Print</span>
                </button>

                <a href="{{ route('jenis-sampah.create') }}" class="add-button">
                    <span>＋</span>
                    <span>Tambah</span>
                </a>

            </div>

        </div>


        <!-- TABLE CARD -->
        <div class="data-card">

            <div class="table-wrapper">

                <table class="data-table">

                    <thead>
                        <tr>

                            <th class="checkbox-column">
                                <input type="checkbox" id="checkAll">
                            </th>

                            <th class="no-column">
                                NO
                            </th>

                            <th>
                                NAMA
                                <span class="sort-icon">↕</span>
                            </th>

                            <th>
                                SATUAN
                            </th>

                            <th>
                                HARGA
                                <span class="sort-icon">↕</span>
                            </th>

                            <th>
                                HARGA PENGEPUL
                            </th>

                            <th>
                                KETERANGAN
                            </th>

                            <th class="action-column">
                                AKSI
                            </th>

                        </tr>
                    </thead>


                    <tbody id="tableBody">

                        @forelse($jenisSampah ?? [] as $index => $item)
                            <tr>

                                <td>
                                    <input type="checkbox" class="row-check" value="{{ $item->id }}">
                                </td>

                                <td>
                                    {{ $index + 1 }}
                                </td>

                                <td class="name-column">
                                    {{ $item->nama }}
                                </td>

                                <td>
                                    {{ $item->satuan }}
                                </td>

                                <td>
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </td>

                                <td>
                                    Rp {{ number_format($item->harga_pengepul, 0, ',', '.') }}
                                </td>

                                <td>
                                    {{ $item->keterangan ?? '-' }}
                                </td>

                                <td class="action-column">

                                    <div class="action-buttons">

                                        <a href="{{ route('jenis-sampah.edit', $item->id) }}" class="row-action edit">

                                            Edit

                                        </a>

                                        <button type="button" class="row-action delete"
                                            onclick="openDeleteModal(
                '{{ $item->id }}',
                '{{ addslashes($item->nama) }}'
            )">
                                            Delete
                                        </button>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr class="empty-row">

                                <td colspan="8">
                                    Belum ada data jenis sampah
                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- TABLE FOOTER -->
            <div class="table-footer">

                <div class="table-info">

                    <span>
                        Found
                        <strong>{{ isset($jenisSampah) ? $jenisSampah->count() : 0 }}</strong>
                        jenis sampah
                    </span>

                    <span class="show-label">
                        SHOW:
                    </span>

                    <select class="show-select">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>

                </div>


                <div class="pagination">

                    <button class="page-button">
                        ‹
                    </button>

                    <button class="page-button active">
                        1
                    </button>

                    <button class="page-button">
                        ›
                    </button>

                </div>

            </div>

        </div>

    </div>


    <script>
        // =========================
        // SEARCH
        // =========================

        const searchInput = document.getElementById('searchInput');

        if (searchInput) {

            searchInput.addEventListener('keyup', function() {

                const keyword = this.value.toLowerCase();

                const rows = document.querySelectorAll(
                    '#tableBody tr'
                );

                rows.forEach(function(row) {

                    const text = row.innerText.toLowerCase();

                    if (text.includes(keyword)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }

                });

            });

        }


        // =========================
        // CHECK ALL
        // =========================

        const checkAll = document.getElementById('checkAll');

        if (checkAll) {

            checkAll.addEventListener('change', function() {

                document
                    .querySelectorAll('.row-check')
                    .forEach(function(checkbox) {

                        checkbox.checked = checkAll.checked;

                    });

            });

        }
    </script>

    <script>
        // =========================
        // DELETE MODAL
        // =========================

        function openDeleteModal(id, name) {

            const modal = document.getElementById('deleteModal');
            const itemName = document.getElementById('deleteItemName');
            const deleteForm = document.getElementById('deleteForm');

            // Isi nama barang
            itemName.textContent = name;

            // Set URL delete
            deleteForm.action =
                "{{ url('/master-data/jenis-sampah') }}/" + id;

            // Tampilkan modal
            modal.classList.add('show');

            // Lock scroll halaman
            document.body.style.overflow = 'hidden';
        }


        function closeDeleteModal() {

            const modal = document.getElementById('deleteModal');

            modal.classList.remove('show');

            // Kembalikan scroll
            document.body.style.overflow = '';
        }


        // ESC untuk tutup modal
        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {
                closeDeleteModal();
            }

        });
    </script>

    <!-- DELETE MODAL -->

    <div id="deleteModal" class="delete-modal">

        <div class="delete-modal-overlay" onclick="closeDeleteModal()">
        </div>

        <div class="delete-modal-card">

            <div class="delete-modal-icon">
                🗑
            </div>

            <h3>
                Hapus Jenis Sampah?
            </h3>

            <p>
                Apakah Anda yakin ingin menghapus
                <strong id="deleteItemName"></strong>?
            </p>

            <span class="delete-warning">
                Data yang dihapus tidak dapat dikembalikan.
            </span>


            <form id="deleteForm" method="POST">

                @csrf
                @method('DELETE')

                <div class="delete-modal-actions">

                    <button type="button" class="modal-cancel" onclick="closeDeleteModal()">
                        Batal
                    </button>

                    <button type="submit" class="modal-delete">
                        Hapus
                    </button>

                </div>

            </form>

        </div>

    </div>

</x-app-layout>
