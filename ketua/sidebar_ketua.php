<?php
$current_page = basename($_SERVER['PHP_SELF']);

switch ($current_page) {
    case 'dashboard_ketua.php':
        $page_title = 'Dashboard';
        break;
    case 'tagihan_ketua.php':
        $page_title = 'Tagihan';
        break;
    case 'pengajuan.php':
        $page_title = 'Pengajuan';
        break;
    case 'data_warga.php':
        $page_title = 'Data Warga';
        break;
    default:
        $page_title = 'KASKU';
        break;
}
?>

<div class="header">
    <img src="../img/kasku.jpg" alt="Kasku Text" height="40">
    <div class="d-flex justify-content-start align-items-center">
        <h2 class="page-title"><?= $page_title ?></h2>
    </div>
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
    <a href="tagihan_ketua.php" class="<?= $current_page == 'tagihan_ketua.php' ? 'active' : '' ?>"><i
            class="bi bi-journal-text"></i> Tagihan</a>
    <a href="pengajuan.php" class="<?= $current_page == 'pengajuan.php' ? 'active' : '' ?>"><i
            class="bi bi-journal-text"></i> Pengajuan</a>
    <a href="data_warga.php" class="<?= $current_page == 'data_warga.php' ? 'active' : '' ?>"><i
            class="bi bi-journal-text"></i> Data Warga</a>

    <a href="../index.php" class="logout-btn">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>
</div>