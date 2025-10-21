<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/pengajuan.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include 'sidebar_ketua.php' ?>
    <!-- Table -->
    <div class="container mt-5">
        <div class="table-container">
            <h4 class="mb-3">Pengajuan</h4>
            <table class="table align-middle text-center">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01-08-2025</td>
                        <td>Iuran 17 agustus</td>
                        <td>RP 10.000</td>
                        <td><button class="status-btn btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalDetail">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal Detail -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title w-100 text-center fw-bold fs-4" id="modalDetailLabel">Detail</h5>
                </div>

                <div class="modal-body text-center">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Keterangan</label>
                        <div class="info-box-blue mx-auto">17 Agustus</div>
                    </div>

                    <div class="text-start mt-4">
                        <label class="form-label fw-semibold">List Barang</label>
                        <div class="list-box">
                            <ul class="mb-0">
                                <li>Bendera Merah putih yang hilang</li>
                                <li>Hadiah untuk 17 san</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0 justify-content-center gap-3">
                    <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Tolak</button>
                    <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">Setuju</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>