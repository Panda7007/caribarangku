
<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('main-panel')

      <!-- Postingan Kehilangan -->
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">
          Daftar Postingan Kehilangan Barang
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Pengirim</th>
                <th>Tanggal Posting</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="https://via.placeholder.com/80" class="img-thumbnail"></td>
                <td>Dompet</td>
                <td><span class="badge bg-danger badge-status">Dicari</span></td>
                <td>Stasiun Tanah Abang</td>
                <td>6 Juni 2025</td>
                <td>Dompet kulit warna coklat berisi KTP</td>
                <td>@rizky_angg</td>
                <td>2025-06-23</td>
                <td><button class="btn btn-sm btn-warning">Selesai</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td><img src="https://via.placeholder.com/80" class="img-thumbnail"></td>
                <td>Kunci</td>
                <td><span class="badge bg-success badge-status">Ditemukan</span></td>
                <td>Depan Kampus UI</td>
                <td>5 Juni 2025</td>
                <td>Kunci motor Honda dengan gantungan Doraemon</td>
                <td>@nina_find</td>
                <td>2025-06-23</td>
                <td><button class="btn btn-sm btn-warning">Selesai</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

@endsection