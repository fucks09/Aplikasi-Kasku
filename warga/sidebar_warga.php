<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="header">
    <img src="../img/kasku.jpg" alt="Kasku Text" height="40">
    <div class="d-flex align-items-center">
        <span class="me-2">Welcome, Warga</span>
        <i class="bi bi-person-circle fs-4"></i>
    </div>
</div>a

<div class="sidebar">
    <img src="../img/kas.jpg" alt="Logo KASKU">
    <h4>KASKU</h4>
    <a href="dashboard_warga.php" class="<?= $current_page == 'dashboard_warga.php' ? 'active' : '' ?>"><i
            class="bi bi-house"></i> Dashboard</a>

    <a href="tagihan.php" class="<?= $current_page == 'tagihan.php' ? 'active' : '' ?>">
        <i class="bi bi-journal-text"></i> Tagihan
    </a>
</div>