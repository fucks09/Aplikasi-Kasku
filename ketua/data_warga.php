<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/data_warga.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include 'sidebar_ketua.php' ?>

    <div class="container mt-5">
        <div class="table-container">
            <h4 class="mb-3">Data Warga</h4>
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="🔍 Cari Warga...">

            <table class="table align-middle text-center">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="wargaTable">
                    <!-- Data diisi lewat JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Edit Status -->
    <div class="modal fade" id="modalEditStatus" tabindex="-1" aria-labelledby="modalEditStatusLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title mx-auto" id="modalEditStatusLabel">Edit Status Warga</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <div class="info-box" id="modalNama">-</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select id="statusSelect" class="form-select text-center">
                            <option value="Warga">Warga</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Ketua RT">Ketua RT</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-success" id="saveStatusBtn">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const wargaData = [
            "Kemas", "Ammar Zoni", "Khayra Imut", "Faiz", "Hendria Bjorka",
            "Rizky", "Ja Morant", "LeBron James", "Sylus", "Chen Xin Nian"
        ];

        const wargaStatus = {};
        const wargaTable = document.getElementById("wargaTable");
        const searchInput = document.getElementById("searchInput");

        const modalNama = document.getElementById("modalNama");
        const statusSelect = document.getElementById("statusSelect");
        const saveStatusBtn = document.getElementById("saveStatusBtn");
        let currentEdit = null;

        function renderTable(data) {
            wargaTable.innerHTML = "";
            if (data.length === 0) {
                wargaTable.innerHTML = `<tr><td colspan="3" class="text-muted fst-italic">Tidak ada warga ditemukan</td></tr>`;
                return;
            }

            data.forEach(nama => {
                const status = wargaStatus[nama] || "Warga";
                wargaTable.innerHTML += `
                    <tr>
                        <td>${nama}</td>
                        <td>${status}</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="editWarga('${nama}')">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                        </td>
                    </tr>
                `;
            });
        }

        function editWarga(nama) {
            currentEdit = nama;
            modalNama.textContent = nama;
            statusSelect.value = wargaStatus[nama] || "Warga";
            const modal = new bootstrap.Modal(document.getElementById("modalEditStatus"));
            modal.show();
        }

        saveStatusBtn.addEventListener("click", () => {
            const newStatus = statusSelect.value;
            if (currentEdit) wargaStatus[currentEdit] = newStatus;
            renderTable(wargaData);
            bootstrap.Modal.getInstance(document.getElementById("modalEditStatus")).hide();
        });

        searchInput.addEventListener("input", e => {
            const query = e.target.value.toLowerCase();
            const filtered = wargaData.filter(nama => nama.toLowerCase().includes(query));
            renderTable(filtered);
        });

        document.addEventListener("DOMContentLoaded", () => {
            renderTable(wargaData);
        });
    </script>
</body>

</html>