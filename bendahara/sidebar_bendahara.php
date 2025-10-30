<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="header">
    <img src="../img/kasku.jpg" alt="Kasku Text" height="40">
    <div class="d-flex align-items-center">
        <span class="me-2">Welcome, Bendahara</span>
        <i class="bi bi-person-circle fs-4"></i>
    </div>
</div>a

<div class="sidebar">
    <img src="../img/kas.jpg" alt="Logo KASKU">
    <h4>KASKU</h4>
    <a href="dashboard_bendahara.php" class="<?= $current_page == 'dashboard_bendahara.php' ? 'active' : '' ?>"><i
            class="bi bi-house"></i> Dashboard</a>

    <a href="tagihan_bendahara.php" class="<?= $current_page == 'tagihan_bendahara.php' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Tagihan
    </a>

    <a href="pembayaran_warga.php" class="<?= $current_page == 'pembayaran_warga' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Pembayaran Warga
    </a>

    <a href="pengajuan.php" class="<?= $current_page == 'pengajuan.php' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Pengajuan
    </a>

    <!-- Tombol Logout -->
    <a href="../index.php" class="logout-btn">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>
</div>