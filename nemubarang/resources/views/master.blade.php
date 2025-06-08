<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin - Barang Hilang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      background-color: var(--bs-body-bg);
      color: var(--bs-body-color);
    }

    .card-stat {
      transition: transform 0.2s ease;
    }

    .card-stat:hover {
      transform: translateY(-3px);
    }

    .sidebar {
      width: 240px;
      background-color: #0d6efd;
      min-height: 100vh;
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #0b5ed7;
      border-radius: 6px;
    }

    .table thead {
      background-color: var(--bs-tertiary-bg);
    }

    .badge-status {
      font-size: 0.85rem;
    }

    #toggleModeBtn {
      z-index: 999;
    }
  </style>
</head>

<body>


  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-none d-md-block p-3">
      <h4 class="text-white fw-bold mb-4">Admin</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a class="nav-link active" href="/dashboard"><i class="bi bi-bar-chart"></i> Dashboard</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="/dashboard/kehilangan"><i class="bi bi-search"></i> Barang Hilang</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="/dashboard/ditemukan"><i class="bi bi-box-seam"></i> Barang Ditemukan</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" href="/dashboard/postingan"><i class="bi bi-pencil-square"></i> Postingan</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="/dashboard/postingan-selesai"><i class="bi bi-check-circle"></i> Postingan
            Selesai</a>
        </li>
        <li>
          <button class="btn btn-primary" id="toggleModeBtn">
            <i class="bi bi-moon-fill"></i> Mode Gelap
          </button>
        </li>

      </ul>
    </div>

    <!-- Konten -->
    <div class="flex-grow-1 p-4">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded mb-4 px-3">
        <span class="navbar-brand fw-semibold text-primary">Dashboard Admin</span>

      </nav>

      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

      @if(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

      <!-- Ringkasan Statistik -->
      <div class="row g-3 mb-4">
        <div class="col-md-3">
          <div class="card card-stat text-white bg-danger shadow-sm">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <h6 class="mb-1">Barang Dicari</h6>
                  <h4>125</h4>
                </div>
                <i class="bi bi-search fs-2"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stat text-white bg-success shadow-sm">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <h6 class="mb-1">Barang Ditemukan</h6>
                  <h4>89</h4>
                </div>
                <i class="bi bi-check-circle fs-2"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stat text-white bg-primary shadow-sm">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <h6 class="mb-1">Sudah Bertemu Pemilik</h6>
                  <h4>42</h4>
                </div>
                <i class="bi bi-people fs-2"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stat text-white bg-secondary shadow-sm">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <h6 class="mb-1">Jumlah Kunjungan</h6>
                  <h4>5.320</h4>
                </div>
                <i class="bi bi-eye fs-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('main-panel')

    </div> <!-- End Konten -->
  </div> <!-- End d-flex -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script Toggle Mode Terang/Gelap -->
  <script>
    const toggleBtn = document.getElementById('toggleModeBtn');
    const htmlEl = document.documentElement;

    toggleBtn.addEventListener('click', () => {
      const currentTheme = htmlEl.getAttribute('data-bs-theme');
      const newTheme = currentTheme === 'light' ? 'dark' : 'light';
      htmlEl.setAttribute('data-bs-theme', newTheme);
      toggleBtn.innerHTML = newTheme === 'dark'
        ? '<i class="bi bi-sun-fill"></i> Mode Terang'
        : '<i class="bi bi-moon-fill"></i> Mode Gelap';
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function konfirmasiSetujui(id) {
      Swal.fire({
        title: 'Setujui Postingan?',
        text: "Data akan diterbitkan ke halaman utama.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya, Setujui',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = `/dashboard/laporan/setujui/${id}`;
        }
      });
    }

    function konfirmasiTolak(id) {
      Swal.fire({
        title: 'Tolak Postingan?',
        text: "Data akan ditandai sebagai ditolak.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Tolak',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = `/dashboard/laporan/tolak/${id}`;
        }
      });
    }

    function konfirmasiSelesai(id) {
      Swal.fire({
        title: 'Postingan Selesai?',
        text: "Data akan ditandai sebagai Selesai.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Selesai',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = `/dashboard/laporan/selesai/${id}`;
        }
      });
    }
  </script>


</body>

</html>