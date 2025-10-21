<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASKU Dashboard</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include 'sidebar_ketua.php'; ?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card-info">
                    <h5>Saldo Kas Terkini</h5>
                    <h4>Rp 5.500.000</h4>
                    <i class="bi bi-wallet2 text-info fs-3"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-info">
                    <h5>Total Pengeluaran Bulan Ini</h5>
                    <h4>Rp 540.000</h4>
                    <p class="small text-muted mb-1">Untuk perbaikan jalan</p>
                    <i class="bi bi-receipt text-primary fs-3"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-info">
                    <h5>Total Pemasukan Bulan Ini</h5>
                    <h4>Rp 1.500.000</h4>
                    <i class="bi bi-graph-up text-success fs-3"></i>
                </div>
            </div>
        </div>

        <div class="row chart-container">
            <div class="col-md-7">
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-5">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart
        const ctxBar = document.getElementById('barChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: '2024',
                    data: [5, 7, 9, 12, 14, 11, 10, 13, 12, 18, 15, 14],
                    backgroundColor: '#80D0C7'
                },
                {
                    label: '2025',
                    data: [4, 6, 10, 9, 15, 13, 11, 12, 14, 19, 13, 12],
                    backgroundColor: '#00aaff'
                }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Pie Chart
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Sudah membayar', 'Belum membayar'],
                datasets: [{
                    data: [71.4, 28.6],
                    backgroundColor: ['#00c6ff', '#b2f0e9']
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>

</html>