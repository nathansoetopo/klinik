@extends('parent.master')
<style>
    .text-tab {
        width: fit-content;
    }

    .text-tab hr {
        border-radius: 5px;
        border: 2px solid #66CDAA;
        margin-left: 5%;
    }

</style>
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <table class="table">
                                <tbody class="" style="align-content: center">
                                    <tr>
                                        <td class="d-flex justify-content-center">Nama Pasien</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                            <b>Jacob</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-center">No Reg</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                            <b>41316</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-center">Jenis Kelamin</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                            <b>41316</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-center">Alamat Lengkap</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:20px" class="d-flex justify-content-center"><b>Desa
                                                Rejowinangun</b></td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex justify-content-center">Tempat Tanggal Lahir</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                            <b>Blitar</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab2" data-toggle="tab" href="#rm" role="tab"
                                    aria-controls="home" aria-selected="false">Riwayat Medis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#menu1" role="tab"
                                    aria-controls="profile" aria-selected="false">S O A P</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#menu2" role="tab"
                                    aria-controls="contact" aria-selected="false">Resep</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#menu3" role="tab"
                                    aria-controls="contact" aria-selected="false">CResep</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#menu4" role="tab"
                                    aria-controls="contact" aria-selected="false">LAB</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#menu5" role="tab"
                                    aria-controls="contact" aria-selected="false">RAD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#menu6" role="tab"
                                    aria-controls="contact" aria-selected="false">Kontrol</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <div id="rm" class="tab-pane fade" style="background-color: white">
                                <h3>Riwayat Medis</h3>
                            </div>
                            <div id="menu1" class="tab-pane fade" style="background-color: white">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="container pt-2">
                                        <div class="text-tab">
                                            <h5>Subjective</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <label for="keluhan">Keluhan</label>
                                            <textarea name="keluhan" id="keluhan" placeholder="Masukkan Keluhan"
                                                class="form-control" id="" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="text-tab mt-5">
                                            <h5>Objective</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <label for="pemeriksaan">Pemeriksaan</label>
                                            <textarea name="pemeriksaan" id="pemeriksaan"
                                                placeholder="Masukkan Pemeriksaan" class="form-control" id=""
                                                style="height: 100px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="gcs">GCS</label>
                                            <textarea name="gcs" id="gcs" placeholder="Masukkan GCS"
                                                class="form-control" id="gcs" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="mmhg">Tensi</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="mmhg">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                mmHg</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="nadi">Nadi</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="nadi">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                x/menit</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="rr">RR</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="rr">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                x/menit</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="suhu">Suhu</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="suhu">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                °C
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="tinggi">Tinggi</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="tinggi">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                Cm
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="berat">Berat</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="berat">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                Kg
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="alergi">Alergi</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="alergi">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="sp02">Sp02</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="sp02">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                %
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="imunisasi">Imunisasi</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-secondary rounded text-white">
                                                                Ke
                                                                - </div>
                                                        </div>
                                                        <input type="text" class="form-control" id="imunisasi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-tab mt-5">
                                            <h5>Assessment</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <label for="pemeriksaan">Pemeriksaan</label>
                                            <textarea name="pemeriksaan" id="pemeriksaan"
                                                placeholder="Masukkan Pemeriksaan" class="form-control"
                                                style="height: 100px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="tindakan">Tindakan Keperawatan</label>
                                            <select class="form-control js-example-basic-multiple" name="tindakan[]"
                                                id="tindakan" multiple="multiple">
                                                <option value="AL">Tindakan 1</option>
                                                <option value="ID">Tindakan 2</option>
                                                <option value="WY">Tindakan 3</option>
                                            </select>
                                        </div>
                                        <div class="text-tab mt-5">
                                            <h5>Plan</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <label for="plan">Plan</label>
                                            <textarea name="pemeriksaan" id="plan" placeholder="Masukkan Plan"
                                                class="form-control" id="" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan Dokter</label>
                                            <textarea name="catatan" id="gcs" placeholder="Masukkan Catatan Dokter"
                                                class="form-control" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="text-tab mt-5">
                                            <h5>Instruksi dan Evaluasi</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <label for="instruksi">Instruksi</label>
                                            <textarea name="pemeriksaan" id="instruksi" placeholder="Masukkan Instruksi"
                                                class="form-control" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="evaluasi">Evaluasi</label>
                                            <textarea name="catatan" id="evaluasi" placeholder="Masukkan Evaluasi"
                                                class="form-control" style="height: 100px;"></textarea>
                                        </div>
                                        <div class="text-tab mt-5">
                                            <h5>Status Pelayanan</h5>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <label for="statuspelayanan">Status Pelayanan</label>
                                            <select class="form-control" id="statuspelayanan">
                                                <option value="" selected>Pilih Pelayanan</option>
                                                <option id="Terlayani">Sudah Terlayani</option>
                                                <option id="Belum Terlayani">Belum Terlayani</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-4">
                                                <center><button class="btn w-100 btn-lg rounded text-white"
                                                        style="background-color: #2B5BFF;">Simpan</button></center>
                                            </div>
                                            <div class="col-6 p-4">
                                                <center><button
                                                        class="btn w-100 btn-outline-danger btn-lg rounded">Batal</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="menu2" class="tab-pane fade" style="background-color: white">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{url('test-post-data')}}" method="POST" id="form-obat">
                                            @csrf
                                            <div class="container">
                                                <label for="obat">Obat</label>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="obat" name="obat[0][obat]"
                                                        placeholder="Masukkan Obat" style="height:100px;"></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-7">
                                                        <label for="inputObat">Nama obat</label>
                                                        <select class="form-control" id="inputObat"
                                                            name="obat[0][select]">'>
                                                            <option value="1">Obat 1</option>
                                                            <option value="2">Obat 2</option>
                                                            <option value="3">Obat 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="inputState">Jumlah</label>
                                                        <input type="number" name="obat[0][qty]" class="form-control"
                                                            min="1" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-7">
                                                        <label for="aturan">Aturan pakai</label>
                                                        <select class="form-control" name="obat[0][aturan]" id="aturan">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="tgl">Tanggal</label>
                                                        <input type="date" name="obat[0][tanggal]" class="form-control"
                                                            id="tgl" required>
                                                    </div>
                                                </div>
                                                <center>
                                                    <div class="buttons">
                                                        <button type="button" id="addForm"
                                                            class="w-70 btn btn-lg text-white"
                                                            style="background-color: #2B5BFF">Tambah</button>
                                                    </div>
                                                </center>
                                            </div>
                                        </form>
                                        <div class="container mt-5">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Apakah anda
                                                    yakin untuk menyimpan resep ini?</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 p-3">
                                                    <button type="submit" class="btn btn-lg text-white"
                                                        form="form-obat"
                                                        style="background-color: #2B5BFF; width:100%">Simpan</button>
                                                </div>
                                                <div class="col-6 p-3">
                                                    <button type="button"
                                                        class="btn btn-lg text-danger btn-outline-danger"
                                                        form="form-obat" style="width:100%">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade" style="background-color: white">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="text-tab">
                                            <h5>Objective</h5>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Aksi</th>
                                                    <th scope="col">Detail Resep</th>
                                                    <th scope="col">Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><button type="button" id="copy1" class="btn rounded text-white"
                                                            onclick="copyClipboard('Autan, Borax, Didik',1)"
                                                            style="background-color: #2B5BFF">copy</button></td>
                                                    <td>Autan, Borax, Didik</td>
                                                    <td>12-09-2022</td>
                                                </tr>
                                                <tr>
                                                    <td><button type="button" id="copy2" class="btn rounded text-white"
                                                            onclick="copyClipboard('Autan, Borax, Didik',2)"
                                                            style="background-color: #2B5BFF">copy</button></td>
                                                    <td>Autan, Borax, Didik</td>
                                                    <td>12-09-2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="menu4" class="tab-pane fade" style="background-color: white">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="container">
                                        <label for="diagnosa">Diagnosa Klinis</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="diagnosa" placeholder="Masukkan Diagnosa"
                                                style="height: 100px"></textarea>
                                        </div>
                                        <label for="infoTambahan">Informasi Tambahan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="infoTambahan"
                                                placeholder="Masukkan Informasi Tambahan"
                                                style="height: 100px"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="namaPemeriksaan">Nama Pemeriksaan</label>
                                            <select class="js-example-basic-multiple" style="height: 42px"
                                                id="namaPemeriksaan" name="namaPemeriksaan[]" multiple>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-3">
                                                <button type="submit" class="btn btn-lg text-white"
                                                    style="background-color: #2B5BFF; width:100%">Simpan</button>
                                            </div>
                                            <div class="col-6 p-3">
                                                <button type="button" class="btn btn-lg text-danger btn-outline-danger"
                                                    form="form-obat" style="width:100%">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="menu5" class="tab-pane fade" style="background-color: white">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="container">
                                        <label for="diagnosaRad">Diagnosa Klinis</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="diagnosaRad" name="diagnosaRad"
                                                placeholder="Masukkan Diagnosa" style="height: 100px"></textarea>
                                        </div>
                                        <label for="informasiRad">Informasi Tambahan</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="informasiRad" name="informasiRad"
                                                placeholder="Masukkan Infromasi" style="height: 100px"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="namaPemeriksaanRad">Nama Pemeriksaan</label>
                                            <select class="js-example-basic-multiple" style="height: 42px"
                                                id="namaPemeriksaanRad" name="namaPemeriksaanRad[]" multiple>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-3">
                                                <button type="submit" class="btn btn-lg text-white"
                                                    style="background-color: #2B5BFF; width:100%">Simpan</button>
                                            </div>
                                            <div class="col-6 p-3">
                                                <button type="button" class="btn btn-lg text-danger btn-outline-danger"
                                                    form="form-obat" style="width:100%">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="menu6" class="tab-pane fade" style="background-color: white">
                                <div class="container">
                                    <label id="diagnosaKontrol">Diagnosa</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="diagnosaKontrol" id="diagnosaKontrol"
                                            style="height: 100px;"></textarea>
                                    </div>
                                    <label for="terapi">Tindakan/Terapi</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="tindakaTerapi" id="terapi"
                                            style="height: 100px;"></textarea>
                                    </div>
                                    <label for="alasanKontrol">Alasan Kontrol</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="alasanKontrol" name="alasanKontrol"
                                            style="height: 100px;"></textarea>
                                    </div>
                                    <label id="rtl">Rencana Tindak Lanjut</label>
                                    <div class="form-group">
                                        <textarea class="form-control col-12" id="rtl" name="rtl"
                                            style="height: 100px;"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="jadwalKontrol">Jadwal Kontrol</label>
                                            <div class="input-group mb-2">
                                                <input type="date" name="jadwalKontrol" class="form-control"
                                                    id="jadwalKontrol">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <label for="pembayaran">Jenis Pembayaran Kontrol</label>
                                            <select class="custom-select" id="pembayaran" style="height: 42px">
                                                <option selected>Open this select menu</option>
                                                <option value="Umum">Umum</option>
                                                <option value="BPJS">BPJS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 p-3">
                                            <button type="submit" class="btn btn-lg text-white"
                                                style="background-color: #2B5BFF; width:100%">Simpan</button>
                                        </div>
                                        <div class="col-6 p-3">
                                            <button type="button" class="btn btn-lg text-danger btn-outline-danger"
                                                form="form-obat" style="width:100%">Batal</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container mt-4">
                                    <div class="table-responsive" style="border: solid #8A8A8A">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Aksi</th>
                                                    <th scope="col">Tanggal Kontrol</th>
                                                    <th scope="col">Diagnosa</th>
                                                    <th scope="col">Tindakan</th>
                                                    <th scope="col">Pembayaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pt-4 pb-4">
                                                        <div class="col-12 pl-3 pr-3"><button
                                                                class="btn btn-danger w-100 btn-sm mt-1">Hapus</button>
                                                        </div>
                                                        <div class="col-12 pl-3 pr-3"><button
                                                                class="btn btn-success w-100 btn-sm mt-1">Cetak</button>
                                                        </div>
                                                        <div class="col-12 pl-3 pr-3"><button
                                                                class="btn btn-info w-100 btn-sm mt-1">Kirim</button>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2022</td>
                                                    <td>Kesakitan</td>
                                                    <td>Operasi</td>
                                                    <td>Umum</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-4 pb-4">
                                                        <div class="col-12 pl-3 pr-3"><button
                                                                class="btn btn-danger w-100 btn-sm mt-1">Hapus</button>
                                                        </div>
                                                        <div class="col-12 pl-3 pr-3"><button
                                                                class="btn btn-success w-100 btn-sm mt-1">Cetak</button>
                                                        </div>
                                                        <div class="col-12 pl-3 pr-3"><button
                                                                class="btn btn-info w-100 btn-sm mt-1">Kirim</button>
                                                        </div>
                                                    </td>
                                                    <td>12-09-2022</td>
                                                    <td>Kesakitan</td>
                                                    <td>Operasi</td>
                                                    <td>Umum</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
