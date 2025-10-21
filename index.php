<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KASKU</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="login-card">
        <form onsubmit="login(event)">
            <img src="img/kas.jpg" alt="Logo KASKU">
            <h4 class="fw-bold text-dark">Selamat Datang di KASKU</h4>
            <p class="text-muted mb-4">Silakan masuk untuk melanjutkan</p>

            <div id="alert-container"></div>

            <div class="mb-3 position-relative">
                <i class="bi bi-person form-icon"></i>
                <input type="text" id="username" class="form-control" placeholder="Username" required>
            </div>

            <div class="mb-3 position-relative">
                <i class="bi bi-lock form-icon"></i>
                <input type="password" id="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">MASUK</button>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function login(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const alertContainer = document.getElementById('alert-container');

            if (username === 'ketua' && password === '1234') {
                const successAlert = `
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> Anda berhasil login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
                alertContainer.innerHTML = successAlert;

                setTimeout(() => {
                    window.location.replace("ketua/dashboard_ketua.php");
                }, 1000);
            } else if (username === 'warga' && password === '12345') {
                const successAlert = `
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Anda berhasil login sebagai User.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
                alertContainer.innerHTML = successAlert;

                setTimeout(() => {
                    window.location.replace("warga/dashboard_warga.php");
                }, 1000);

            } else {
                const errorAlert = `
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong> Username atau password salah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>`;
                alertContainer.innerHTML = errorAlert;
            }
        }
    </script>
</body>

</html>