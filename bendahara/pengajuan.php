<?php
// Jika perlu session, aktifkan di sini
// session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan - KASKU</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css  " rel="stylesheet">
    <style>
        /* Reset dasar */
        html, body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
            position: relative;
            z-index: 999;
        }

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: white !important;
            border-bottom: 1px solid #dee2e6;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1000;
            width: calc(100vw - 250px);
            margin: 0;
            padding-left: 30px !important;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin: 0;
        }

        .user-greeting {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }

        /* === MODIFIKASI: Menyamakan ukuran "Welcome, Bendahara" dengan gambar kanan === */
        .user-greeting span {
            font-size: 0.875rem !important;
            font-weight: 400 !important;
            color: #6c757d !important;
        }

        .content-wrapper {
            margin-top: 70px;
            padding: 20px;
            padding-left: 0 !important;
        }

        /* Form Pengajuan Container */
        .form-pengajuan-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            padding: 20px;
            border: 2px solid #6c5ce7;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            background: linear-gradient(90deg, #6c5ce7, #00c6ff);
            color: white;
            border-radius: 8px 8px 0 0;
            margin-bottom: 15px;
        }

        .btn-tambah-pengajuan {
            background: white;
            color: #6c5ce7;
            border: none;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .btn-tambah-pengajuan:hover {
            background: #f8f9fa;
        }

        .search-icon {
            font-size: 1.2rem;
            cursor: pointer;
            color: white;
        }

        .table-container {
            background: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background: #e9ecef;
            font-weight: bold;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .status-proses {
            background: #cce5ff;
            color: #0d6efd;
        }

        .btn-status {
            background: #0d6efd;
            color: white;
            border: none;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            cursor: pointer;
        }

        .btn-status:hover {
            background: #0b5ed7;
        }

        /* === MODIFIKASI: Gaya untuk elemen "Pengajuan" di sidebar agar seragam === */
        /* Ini adalah gaya tambahan untuk memastikan teks "Pengajuan" memiliki ukuran dan gaya yang sama seperti "Pembayaran Warga" */
        .sidebar ul li a span {
            font-size: 0.95rem; /* Atur ukuran font agar konsisten */
        }
    </style>
</head>

<body>
    <!-- Include Sidebar -->
    <?php include 'sidebar_bendahara.php'; ?>

    <!-- Top Header Bar -->
    <div class="top-header">
        <h2 class="page-title">Pengajuan</h2>
        <div class="user-greeting">
            <span>Welcome, Bendahara</span>
            <i class="bi bi-person-circle fs-4"></i>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="form-pengajuan-container">
                <div class="form-header">
                    <div class="d-flex align-items-center gap-2">
                        <button class="btn-tambah-pengajuan" id="btnTambahPengajuan">
                            <i class="bi bi-plus-circle"></i> Tambah Pengajuan Baru
                        </button>
                    </div>
                    <div class="search-icon" id="searchIcon">
                        <i class="bi bi-search"></i>
                    </div>
                </div>

                <!-- Search Input (hidden by default) -->
                <div id="searchInputContainer" class="mb-3" style="display: none;">
                    <input type="text" class="form-control" placeholder="Cari nama..." id="searchInput">
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="pengajuan-table-body">
                            <tr>
                                <td>1</td>
                                <td>Rizky</td>
                                <td>01-08-2025</td>
                                <td>Iuran 17 agustus</td>
                                <td>RP 10.000</td>
                                <td><button class="btn-status" data-id="1">Proses</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>khayra</td>
                                <td>01-08-2025</td>
                                <td>Iuran 17 agustus</td>
                                <td>RP 10.000</td>
                                <td><button class="btn-status" data-id="2">Proses</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Andi</td>
                                <td>02-08-2025</td>
                                <td>Donasi Masjid</td>
                                <td>RP 25.000</td>
                                <td><button class="btn-status" data-id="3">Proses</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pengajuan Baru -->
    <div class="modal fade" id="tambahPengajuanModal" tabindex="-1" aria-labelledby="tambahPengajuanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPengajuanModalLabel">Tambah Pengajuan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahPengajuan">
                        <div class="mb-3">
                            <label for="namaPengaju" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="namaPengaju" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPengajuan" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggalPengajuan" required>
                        </div>
                        <div class="mb-3">
                            <label for="keteranganPengajuan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keteranganPengajuan" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahPengajuan" class="form-label">Jumlah (Rp)</label>
                            <input type="number" class="form-control" id="jumlahPengajuan" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btnSimpanPengajuan">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Pengajuan -->
    <div class="modal fade" id="detailPengajuanModal" tabindex="-1" aria-labelledby="detailPengajuanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailPengajuanModalLabel">Detail Pengajuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="detailNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="detailNama" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="detailTanggal" class="form-label">Tanggal Pengajuan</label>
                        <input type="text" class="form-control" id="detailTanggal" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="detailKeterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="detailKeterangan" rows="3" readonly></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="detailJumlah" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="detailJumlah" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="detailStatus" class="form-label">Status</label>
                        <input type="text" class="form-control" id="detailStatus" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        // === TOMBOL "TAMBAH PENGAJUAN BARU" ===
        document.getElementById('btnTambahPengajuan').addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('tambahPengajuanModal'));
            modal.show();
        });

        // === SIMPAN PENGAJUAN ===
        document.getElementById('btnSimpanPengajuan').addEventListener('click', function() {
            const nama = document.getElementById('namaPengaju').value.trim();
            const tanggal = document.getElementById('tanggalPengajuan').value;
            const keterangan = document.getElementById('keteranganPengajuan').value.trim();
            const jumlah = document.getElementById('jumlahPengajuan').value;

            if (!nama || !tanggal || !keterangan || !jumlah) {
                alert("Semua field harus diisi!");
                return;
            }

            // Simulasi tambah data ke tabel
            const tableBody = document.getElementById('pengajuan-table-body');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${tableBody.children.length + 1}</td>
                <td>${nama}</td>
                <td>${tanggal}</td>
                <td>${keterangan}</td>
                <td>RP ${parseInt(jumlah).toLocaleString()}</td>
                <td><button class="btn-status" data-id="${tableBody.children.length + 1}">Proses</button></td>
            `;
            tableBody.appendChild(newRow);

            // Tutup modal
            bootstrap.Modal.getInstance(document.getElementById('tambahPengajuanModal')).hide();

            // Reset form
            document.getElementById('formTambahPengajuan').reset();

            alert(`Pengajuan baru untuk ${nama} berhasil ditambahkan!`);
        });

        // === TOMBOL SEARCH ICON ===
        document.getElementById('searchIcon').addEventListener('click', function() {
            const container = document.getElementById('searchInputContainer');
            container.style.display = container.style.display === 'none' ? 'block' : 'none';
            if (container.style.display === 'block') {
                document.getElementById('searchInput').focus();
            }
        });

        // === FUNGSI SEARCH BERDASARKAN NAMA ===
        document.getElementById('searchInput').addEventListener('input', function() {
            const keyword = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll('#pengajuan-table-body tr');

            rows.forEach(row => {
                const namaCell = row.cells[1]; // Kolom nama
                const nama = namaCell.textContent.toLowerCase();

                if (nama.includes(keyword)) {
                    row.style.display = ''; // Tampilkan
                } else {
                    row.style.display = 'none'; // Sembunyikan
                }
            });
        });

        // === EVENT DELEGATION: KLIK STATUS "PROSES" ===
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('btn-status')) {
                const button = e.target;
                const pengajuanId = button.getAttribute('data-id');

                // Ambil data dari baris tabel
                const row = button.closest('tr');
                const nama = row.cells[1].textContent.trim();
                const tanggal = row.cells[2].textContent.trim();
                const keterangan = row.cells[3].textContent.trim();
                const jumlah = row.cells[4].textContent.trim();

                // Isi modal detail
                document.getElementById('detailNama').value = nama;
                document.getElementById('detailTanggal').value = tanggal;
                document.getElementById('detailKeterangan').value = keterangan;
                document.getElementById('detailJumlah').value = jumlah;
                document.getElementById('detailStatus').value = "Proses";

                // Buka modal
                const detailModal = new bootstrap.Modal(document.getElementById('detailPengajuanModal'));
                detailModal.show();
            }
        });
    </script>
</body>

</html>