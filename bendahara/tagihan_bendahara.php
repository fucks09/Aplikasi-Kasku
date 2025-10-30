<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/tagihan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include 'sidebar_bendahara.php'; ?>

    <div class="container mt-5">
        <div class="table-container">
            <h4 class="mb-3">Tagihan</h4>
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
                        <td>01-01-2025</td>
                        <td>Keamanan</td>
                        <td>Rp 20.000</td>
                        <td><button class="status-btn belum" data-bs-toggle="modal"
                                data-bs-target="#modalPembayaran">Belum Bayar</button></td>
                    </tr>
                    <tr>
                        <td>01-02-2025</td>
                        <td>Kebersihan</td>
                        <td>Rp 7.000</td>
                        <td><button class="status-btn sudah" data-bs-toggle="modal"
                                data-bs-target="#modalDetailPembayaran">Sudah Bayar</button></td>
                    </tr>
                    <tr>
                        <td>01-08-2025</td>
                        <td>17 Agustus</td>
                        <td>Rp 10.000</td>
                        <td><button class="status-btn proses" data-bs-toggle="modal"
                                data-bs-target="#modalDetailPembayaran">Proses</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Pembayaran -->
    <div class="modal fade" id="modalPembayaran" tabindex="-1" aria-labelledby="modalPembayaranLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title mx-auto" id="modalPembayaranLabel">Pembayaran Keamanan</h5>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <label for="rekening" class="form-label">Nomor Rekening</label>
                        <div class="info-box">1504071527</div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                        <div>
                            <label class="form-label">Foto Pembayaran</label>
                            <div class="upload-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/685/685655.png"
                                    alt="Insert Picture"><br>
                                <small>Insert Picture</small>
                            </div>
                        </div>
                        <img src="../img/qr.png"
                            width="200" alt="QR Code">
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Pembayaran -->
    <div class="modal fade" id="modalDetailPembayaran" tabindex="-1" aria-labelledby="modalDetailLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title mx-auto" id="modalDetailLabel">Detail Pembayaran</h5>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <div class="info-box">Eko Pragos</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembayaran</label>
                            <div class="info-box">12-25-2025</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Pembayaran</label>
                            <div class="upload-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/685/685655.png" alt="Insert Picture">
                                <small>Insert Picture</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>