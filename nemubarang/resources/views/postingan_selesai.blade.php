<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('main-panel')
    <!-- Postingan Kehilangan -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">
            Daftar Postingan Selesai
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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $row->gambar) }}" class="img-thumbnail" width="80"
                                    style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#modalGambar{{ $row->id }}">
                            </td>

                            <td>{{ ucfirst($row->jenis_barang) }}</td>
                            <td>
                                <span class="badge {{ $row->status == 'dicari' ? 'bg-danger' : 'bg-success' }} badge-status">
                                    {{ ucfirst($row->status) }}
                                </span>
                            </td>
                            <td>{{ $row->lokasi }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->tanggal_kejadian)->format('d M Y') }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>{{ '@' . Str::slug($row->nama, '_') }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('Y-m-d') }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning">Postingan Selesai</button>
                            </td>
                        </tr>
                    @endforeach
                    @foreach($data as $row)
                        <div class="modal fade" id="modalGambar{{ $row->id }}" tabindex="-1"
                            aria-labelledby="modalLabel{{ $row->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel{{ $row->id }}">Gambar Barang</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('storage/' . $row->gambar) }}" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection