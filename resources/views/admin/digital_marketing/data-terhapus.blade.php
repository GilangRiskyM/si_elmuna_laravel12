@extends('layout.admin')
@include('fungsi.fungsi_tgl_indo')
@section('title', 'Elmuna - Data Digital Marketing')
@section('content')
    <center>
        <h1>Data Peserta Kursus Digital Marketing Yang Dihapus</h1>
    </center>
    <div class="my-3">
        <a href="{{ url('/data_digital_marketing') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="align-middle">
                    <th>No</th>
                    <th>NIK</th>
                    <th>NISN</th>
                    <th>Nama Peserta</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Kode Pos</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Nama Ibu</th>
                    <th>Nama Ayah</th>
                    <th>No. WA</th>
                    <th>Email</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Tanggal Mulai Kursus</th>
                    <th>Tanggal Selesai Kursus</th>
                    <th>Paket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($data) > 0)
                    @foreach ($data as $datum)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $datum->nik }}</td>
                            <td>{{ $datum->nama }}</td>
                            <td>{{ $datum->nisn }}</td>
                            <td>{{ $datum->nama }}</td>
                            <td>{{ $datum->tempat_lahir }}</td>
                            <td>{{ $datum->tanggal_lahir }}</td>
                            <td>{{ $datum->jk }}</td>
                            <td>{{ $datum->alamat }}</td>
                            <td>{{ $datum->kecamatan }}</td>
                            <td>{{ $datum->kabupaten }}</td>
                            <td>{{ $datum->kode_pos }}</td>
                            <td>{{ $datum->agama }}</td>
                            <td>{{ $datum->status }}</td>
                            <td>{{ $datum->nama_ibu }}</td>
                            <td>{{ $datum->nama_ayah }}</td>
                            <td>{{ $datum->telepon }}</td>
                            <td>{{ $datum->email }}</td>
                            <td>{{ tgl_indonesia3($datum->created_at) }}</td>
                            <td>
                                @if ($datum->tgl_mulai == !null)
                                    {{ tgl_indonesia3($datum->tgl_mulai) }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @if ($datum->tgl_selesai == !null)
                                    {{ tgl_indonesia3($datum->tgl_selesai) }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @php
                                    $paketan = json_decode($datum->paket);
                                @endphp
                                @foreach ($paketan as $paket)
                                    {{ $paket }},
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ url('/restore-digital_marketing/' . $datum->id) }}"
                                    class="btn btn-success">Restore</a>
                                <a href="{{ url('/hapus_permanen_digital_marketing/' . $datum->id) }}"
                                    class="btn btn-danger my-2">Hapus
                                    Permanen</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="22">
                            <center>
                                <h3>Data Kosong</h3>
                            </center>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
