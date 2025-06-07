<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nemu – Laporkan & Temukan Barang Hilang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .post-card img {
            object-fit: cover;
            height: 250px;
        }

        .post-card:hover {
            transform: scale(1.02);
            transition: 0.3s ease-in-out;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1549921296-3a5dcf4fe4f6?auto=format&fit=crop&w=1600&q=80') center center/cover no-repeat;
            color: white;
            padding: 100px 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        footer {
            background: #222;
            color: #aaa;
            padding: 30px 0;
        }

        footer a {
            color: #aaa;
            text-decoration: none;
        }

        footer a:hover {
            color: #fff;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://cdn.rri.co.id/berita/Ende/o/1740281448857-3/7igiooev8a9slcv.jpeg') center center/cover no-repeat;
            padding: 100px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Nemu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav me-3">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Barang Dicari</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Barang Ditemukan</a></li>
                </ul>
                <button class="btn btn-outline-light me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Masuk</button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
            </div>
        </div>
    </nav>

    <!-- Hero / Jumbotron -->
    <!-- Hero / Jumbotron -->
    <section class="hero text-white text-center">
        <div class="container py-5">
            <h1 class="display-4 fw-bold">Laporkan & Temukan Barang Hilang Anda</h1>
            <p class="lead mb-4">Platform terpercaya untuk membantu masyarakat melacak dan mengembalikan barang hilang
                secara mudah dan cepat.</p>
            <a href="#postingan" class="btn btn-lg btn-warning">Lihat Postingan</a>
        </div>
    </section>

    <!-- Section: Keunggulan -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Mengapa Memilih Nemu?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 shadow-sm h-100 bg-white rounded">
                        <h5 class="fw-bold">Terpercaya & Aman</h5>
                        <p>Kami memverifikasi setiap laporan untuk memastikan keaslian dan mencegah penipuan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow-sm h-100 bg-white rounded">
                        <h5 class="fw-bold">Gratis & Mudah</h5>
                        <p>Semua layanan dapat digunakan secara gratis tanpa biaya. Cukup daftar dan unggah laporan
                            Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow-sm h-100 bg-white rounded">
                        <h5 class="fw-bold">Komunitas Peduli</h5>
                        <p>Dukung sesama pengguna untuk saling menemukan dan mengembalikan barang berharga yang hilang.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Jenis Barang -->
    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Jenis Barang yang Boleh Diunggah</h2>
            <p class="mb-4">Berikut beberapa jenis barang yang diperbolehkan untuk dilaporkan di platform kami:</p>
            <div class="row g-3 justify-content-center">
                <div class="col-md-3">
                    <div class="border rounded p-3">Dompet & Identitas</div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">Handphone & Gadget</div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">Kunci Kendaraan</div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">Tas & Barang Pribadi</div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">Surat Berharga</div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded p-3">Barang Elektronik</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Kepercayaan & Statistik -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Kepercayaan yang Terbangun</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm rounded">
                        <h3 class="fw-bold text-success">+12.000</h3>
                        <p class="mb-0">Laporan Barang Hilang</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm rounded">
                        <h3 class="fw-bold text-primary">+6.500</h3>
                        <p class="mb-0">Barang Ditemukan Kembali</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm rounded">
                        <h3 class="fw-bold text-warning">98%</h3>
                        <p class="mb-0">Tingkat Kepuasan Pengguna</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Filter Section -->
    <div class="container text-center my-5">
        <h2 class="mb-4">Kategori Postingan</h2>
        <div class="btn-group" role="group" aria-label="Kategori">
            <button type="button" class="btn btn-outline-primary">Semua</button>
            <button type="button" class="btn btn-outline-danger">Barang Hilang</button>
            <button type="button" class="btn btn-outline-success">Barang Ditemukan</button>
        </div>
    </div>

    <!-- Postingan -->
    <div id="postingan" class="container my-5">
        <div class="row g4">
            @foreach($laporans as $laporan)
                <div class="col-md-4">
                    <div class="card post-card shadow-sm h-100">
                        <img src="{{ asset('storage/' . $laporan->gambar) }}" class="card-img-top" alt="Gambar Barang">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ ucfirst($laporan->jenis_barang) }} -
                                <span class="badge bg-danger">Barang {{ ucfirst($laporan->status) }}</span>
                            </h5>
                            <ul class="list-unstyled small mb-2">
                                <li><strong>Jenis:</strong> {{ $laporan->jenis_barang }}</li>
                                <li><strong>Lokasi:</strong> {{ $laporan->lokasi }}</li>
                                <li><strong>Tanggal:</strong>
                                    {{ \Carbon\Carbon::parse($laporan->tanggal_kejadian)->format('d F Y') }}</li>
                            </ul>
                            <p class="card-text">
                                {{ $laporan->keterangan }}
                            </p>
                        </div>
                        <div class="card-footer text-muted small">
                            Diposting oleh: <strong>{{ $laporan->nama }}</strong> •
                            {{ \Carbon\Carbon::parse($laporan->created_at)->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


    <section class="text-center my-5" id="formLaporan">
        <h2>Laporkan Barang Hilang / Ditemukan</h2>
        <p>Isi formulir pengajuan dan unggah gambar barang yang hilang atau ditemukan.</p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formLaporanModal">
            Ajukan Laporan Sekarang
        </button>
    </section>




    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2025 <strong>Nemu</strong> – Semua hak dilindungi.</p>
            <p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalTentangKami">Tentang Kami</a>
                •
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalPrivasi">Kebijakan Privasi</a>
                •
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalHubungi">Hubungi Kami</a>
            </p>

        </div>
    </footer>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Masuk ke Akun Anda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email / Username</label>
                            <input type="text" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Daftar Akun Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="registerUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="registerUsername" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="registerEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="registerPassword" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.getElementById('successModal'));
                myModal.show();
            });
        </script>
    @endif


    <script>
        function previewImageFunc(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function () {
                const imgElement = document.getElementById('previewImage');
                imgElement.src = reader.result;
            };
            if (input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<div class="modal fade" id="modalTentangKami" tabindex="-1" aria-labelledby="modalTentangKamiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTentangKamiLabel">Tentang Kami</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nemu</strong> adalah platform berbasis komunitas yang dirancang untuk membantu
                    masyarakat
                    melaporkan, menemukan, dan mengembalikan barang-barang yang hilang. Kami percaya bahwa dengan kerja
                    sama dan
                    kepercayaan, barang yang hilang dapat kembali ke pemiliknya dengan lebih mudah.</p>
                <p>Kami berkomitmen untuk menyediakan layanan yang mudah digunakan, aman, dan tanpa biaya untuk seluruh
                    masyarakat Indonesia.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPrivasi" tabindex="-1" aria-labelledby="modalPrivasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPrivasiLabel">Kebijakan Privasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <p>Kami menghargai privasi Anda. Informasi yang Anda unggah ke situs ini hanya akan digunakan untuk
                    keperluan
                    pelaporan dan pencocokan barang hilang. Kami tidak akan membagikan data Anda ke pihak ketiga tanpa
                    izin Anda.</p>
                <ul>
                    <li>Data seperti nama, kontak, dan deskripsi barang hanya ditampilkan sesuai kebutuhan.</li>
                    <li>Pengguna bertanggung jawab atas kebenaran informasi yang diberikan.</li>
                    <li>Setiap pelanggaran atau penipuan akan ditindak sesuai hukum yang berlaku.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalHubungi" tabindex="-1" aria-labelledby="modalHubungiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHubungiLabel">Hubungi Kami</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <p>Jika Anda memiliki pertanyaan, saran, atau ingin melaporkan masalah, silakan hubungi kami melalui:
                </p>
                <ul class="list-unstyled">
                    <li><strong>Email:</strong> support@Nemu</li>
                    <li><strong>WhatsApp:</strong> +62 812-3456-7890</li>
                    <li><strong>Instagram:</strong> <a href="https://instagram.com/baranghilangid"
                            target="_blank">@baranghilangid</a></li>
                </ul>
                <form>
                    <div class="mb-3">
                        <label for="namaUser" class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" id="namaUser" placeholder="Nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="pesanUser" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesanUser" rows="3"
                            placeholder="Tulis pesan Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formLaporanModal" tabindex="-1" aria-labelledby="formLaporanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="formLaporanModalLabel"><strong>Form Laporan Barang Hilang /
                        Ditemukan</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Kolom Gambar Preview -->
                    <div class="col-md-5">
                        <div class="card shadow-sm">
                            <div class="card-header bg-secondary text-white">
                                <strong>Preview Gambar</strong>
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center"
                                style="min-height: 300px;">
                                <img id="previewImage" src="https://via.placeholder.com/300x200?text=Belum+Ada+Gambar"
                                    class="img-fluid rounded" alt="Preview Gambar">
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Form -->
                    <div class="col-md-7">
                        <div class="card shadow-sm">
                            <div class="card-body">

                                <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="uploadGambar" class="form-label">Upload Gambar Barang</label>
                                        <input type="file" class="form-control" name="uploadGambar" id="uploadGambar"
                                            accept="image/*" onchange="previewImageFunc(event)">
                                    </div>

                                    <div class="mb-3">
                                        <label for="namaUser" class="form-label">Nama Anda</label>
                                        <input type="text" class="form-control" name="namaUser" id="namaUser"
                                            placeholder="Nama Lengkap">
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailUser" class="form-label">Email Anda</label>
                                        <input type="email" class="form-control" name="emailUser" id="emailUser"
                                            placeholder="nama@email.com">
                                    </div>

                                    <div class="mb-3">
                                        <label for="waUser" class="form-label">Nomor WhatsApp</label>
                                        <input type="tel" class="form-control" name="waUser" id="waUser"
                                            placeholder="08xxxxxxxxxx">
                                    </div>

                                    <div class="mb-3">
                                        <label for="jenisBarang" class="form-label">Jenis Barang</label>
                                        <select class="form-select" name="jenisBarang" id="jenisBarang">
                                            <option selected disabled>-- Pilih Jenis Barang --</option>
                                            <option value="dompet">Dompet</option>
                                            <option value="hp">Handphone</option>
                                            <option value="kunci">Kunci</option>
                                            <option value="tas">Tas / Ransel</option>
                                            <option value="dokumen">Dokumen</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="lokasi" class="form-label">Lokasi Hilang / Ditemukan</label>
                                        <input type="text" class="form-control" name="lokasi" id="lokasi"
                                            placeholder="Contoh: Mall Kelapa Gading, Jakarta">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal Kejadian</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                                    </div>

                                    <div class="mb-3">
                                        <label for="keterangan" class="form-label">Keterangan Barang</label>
                                        <textarea class="form-control" name="keterangan" id="keterangan" rows="4"
                                            placeholder="Contoh: Dompet hitam berisi KTP dan ATM tertinggal di halte bus..."></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="statusBarang" class="form-label">Status Barang</label>
                                        <select class="form-select" name="statusBarang" id="statusBarang">
                                            <option selected disabled>-- Pilih Status --</option>
                                            <option value="ditemukan">Barang Ditemukan</option>
                                            <option value="dicari">Barang Dicari</option>
                                        </select>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success">Ajukan Laporan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- End Right Column -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Berhasil -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="successModalLabel">Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>



</html>