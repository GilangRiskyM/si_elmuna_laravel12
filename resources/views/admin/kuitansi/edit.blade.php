@extends('layout.admin')
@section('title', 'Edit Kuitansi')
@push('css')
    <style>
        form {
            font-family: "Times New Roman";
            margin: 0;
            padding: 0;
        }

        .garis {
            border-bottom: 2px solid black;
            border-top: 2px solid black;
        }

        .garis-bawah {
            border-bottom: 2px solid black;
        }

        .garis-strip {
            border-top: 1px dashed black;
        }
    </style>
@endpush
@section('content')
    <center>
        <h3>Form Edit Data Kuitansi</h3>
    </center>
    <hr>
    <form action="{{ url('/edit-kuitansi/' . $data->id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-10 garis">
                <center>
                    <font size="5"><b>B U K T I &nbsp; P E M B A Y A R A N</b></font>
                </center>
            </div>
            <div class="col-2 garis">
                <center>
                    <font size="3"><b>01</b></font>
                </center>
            </div>
            <div class="col-9">
                <div class="garis-bawah">
                    <center>
                        <font size="4"><b>LKP/LPK ELMUNA</b></font>
                        <br>
                        <font size="3">
                            <b> JL. SOKA PETANAHAN NO. 10 KM. 6 KEC. KLIRONG KAB. KEBUMEN </b>
                        </font>
                        <br>
                        <font size="3">
                            <b>NO HP/WA 082134389173, 085325636373</b>
                        </font>
                    </center>
                </div>
                <br>
                <table>
                    <tr>
                        <td>Nama &nbsp;</td>
                        <td>:</td>
                        <td>
                            <input class="form-control" type="text" name="nama" id="" required
                                value="{{ $data->nama }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Guna Membayar &nbsp;</td>
                        <td>:</td>
                        <td>
                            <input class="form-control" type="text" name="guna_byr1" id="" required
                                value="{{ $data->guna_byr1 }}">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>
                            <input class="form-control" type="text" name="guna_byr2" id=""
                                value="{{ $data->guna_byr2 }}">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="form-control" type="text" name="guna_byr3" id=""
                                value="{{ $data->guna_byr3 }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Diterima (Rp)&nbsp;</td>
                        <td>:</td>
                        <td>
                            <input class="form-control" type="number" name="jumlah" id="" required
                                value="{{ $data->jumlah }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Pembayaran &nbsp;</td>
                        <td>:</td>
                        <td>
                            <select name="pembayaran" id="" class="form-select select2"
                                data-placeholder="Pilih Pembayaran">
                                <option value="ANGSUR" {{ $data->pembayaran == 'ANGSUR' ? 'selected' : null }}>ANGSUR
                                </option>
                                <option value="LUNAS" {{ $data->pembayaran == 'LUNAS' ? 'selected' : null }}>LUNAS</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="col-3">
                <table>
                    <tr>
                        <td>NO.KWT</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>XXXX-{{ now()->isoFormat('Y') }}</td>
                    </tr>
                    <tr>
                        <td>TANGGAL</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>{{ now()->isoFormat('DD/MM/Y') }}</td>
                    </tr>
                    <tr>
                        <td>HARI</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>{{ now()->isoFormat('dddd') }}</td>
                    </tr>
                    <tr>
                        <td>JAM</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>{{ now()->isoFormat('HH:mm') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-9">
                <font size="2">
                    <i><b>Catatan :</b></i>
                    <br>
                    <i>Biaya yang sudah dibayarkan tidak dapat diambil kembali</i>
                    <br>
                    <i>
                        Kuitansi ini diolah oleh komputer dan sah, apabila ada Nama, Cap,
                        dan
                    </i>
                    <br>
                    <i>Tanda tangan penerima</i>
                </font>
            </div>
            <div class="col-3">
                <center>
                    <font size="4"> PENERIMA </font>
                    <br>
                    <br>
                    <br>
                    <font size="">
                        <input class="form-control" type="text" name="penerima" id="" required
                            value="{{ $data->penerima }}">
                    </font>
                </center>
            </div>
        </div>
        <br>
        <div class="col-12">
            <center>
                <font size="3">
                    *** Terimakasih ***
                </font>
                <br>
                <table>
                    <tr>
                        <td>Ket</td>
                        <td>
                            <select class="form-select select2" name="cara_bayar" id=""
                                data-placeholder="Pilih Cara Bayar">
                                <option value="ADMIN" {{ $data->cara_bayar == 'ADMIN' ? 'selected' : null }}>ADMIN
                                </option>
                                <option value="TRANSFER" {{ $data->cara_bayar == 'TRANSFER' ? 'selected' : null }}>TRANSFER
                                </option>
                            </select>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <hr>
        <div class="my-2">
            <center>
                <a href="{{ url('/kuitansi') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Kirim</button>
            </center>
        </div>
    </form>
@endsection
