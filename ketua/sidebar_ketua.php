<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="header">
    <img src="../img/kasku.jpg" alt="Kasku Text" height="40">
    <div class="d-flex align-items-center">
        <span class="me-2">Welcome, Ketua</span>
        <i class="bi bi-person-circle fs-4"></i>
    </div>
</div>

<div class="sidebar">
    <img src="../img/kas.jpg" alt="Logo KASKU">
    <h4>KASKU</h4>
    <a href="dashboard_ketua.php" class="<?= $current_page == 'dashboard_ketua.php' ? 'active' : '' ?>"><i
            class="bi bi-house"></i> Dashboard</a>

    <a href="tagihan_ketua.php" class="<?= $current_page == 'tagihan_ketua.php' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Tagihan</a>

    <a href="pengajuan.php" class="<?= $current_page == 'pengajuan.php' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Pengajuan</a>

    <a href="data_warga.php" class="<?= $current_page == 'data_warga.php' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Data Warga</a>
    </a>
</div>