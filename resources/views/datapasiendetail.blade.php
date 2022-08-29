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
                        <div class="table-responsive">
                            <table class="table table-sm">
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
                                        <textarea name="pemeriksaan" id="pemeriksaan" placeholder="Masukkan Pemeriksaan"
                                            class="form-control" id="" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="gcs">GCS</label>
                                        <textarea name="gcs" id="gcs" placeholder="Masukkan GCS" class="form-control"
                                            id="gcs" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4 col-lg-4 col-12">
                                            <div class="form-group">
                                                <label for="mmhg">Tensi</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="mmhg">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-secondary rounded text-white">
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
                                                        <div class="input-group-text bg-secondary rounded text-white">
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
                                                        <div class="input-group-text bg-secondary rounded text-white">
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
                                                        <div class="input-group-text bg-secondary rounded text-white">°C
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
                                                        <div class="input-group-text bg-secondary rounded text-white">Cm
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
                                                        <div class="input-group-text bg-secondary rounded text-white">Kg
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
                                                        <div class="input-group-text bg-secondary rounded text-white">%
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
                                                        <div class="input-group-text bg-secondary rounded text-white">Ke
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
                                        <textarea name="pemeriksaan" id="pemeriksaan" placeholder="Masukkan Pemeriksaan"
                                            class="form-control" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tindakan">Tindakan Keperawatan</label>
                                        <select class="form-control js-example-basic-multiple" name="tindakan[]" id="tindakan" multiple="multiple">
                                            <option value="AL">Alabama</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="WY">Wyoming</option>
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
                                        <textarea name="catatan" id="gcs" placeholder="Masukkan Catatan Dokter" class="form-control" style="height: 100px;"></textarea>
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
                                        <textarea name="catatan" id="evaluasi" placeholder="Masukkan Evaluasi" class="form-control" style="height: 100px;"></textarea>
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
                                            <center><button class="btn w-100 btn-lg rounded text-white" style="background-color: #2B5BFF;">Simpan</button></center>
                                        </div>
                                        <div class="col-6 p-4">
                                            <center><button class="btn w-100 btn-outline-danger btn-lg rounded">Batal</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade" style="background-color: white">
                                <div class="card">
                                    <div class="card-body">
                                        <label>Obat</label>
                                        <div class="form-group">
                                            <textarea class="form-control col-12"></textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                                <label for="inputCity">Nama obat</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputState">Jumlah</label>
                                                <select class="custom-select" style="height: 42px">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                                <label for="inputEmail4">Aturan pakai</label>
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputPassword4">Tanggal</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="buttons">
                                        <a href="#" class="btn btn"
                                            style="background-color: #2B5BFF; color:white">Primary</a>
                                    </div>
                                </center>
                            </div>
                            <div id="menu3" class="tab-pane fade" style="background-color: white">
                                <h4>Cresep</h4>

                            </div>
                            <div id="menu4" class="tab-pane fade" style="background-color: white">
                                <label>Diagnosa Klinis</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <label>Informasi Tambahan</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail4">Nama Pemerikasaan</label>
                                    <select class="custom-select" style="height: 42px">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <center>
                                    <div class="buttons">
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2B5BFF; color:white">Simpan</a>
                                        <a href="#" class="btn btn-secondary"
                                            style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                                    </div>
                                </center>

                            </div>
                            <div id="menu5" class="tab-pane fade" style="background-color: white">
                                <label>Diagnosa Klinis</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <label>Informasi Tambahan</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail4">Nama Pemerikasaan</label>
                                    <select class="custom-select" style="height: 42px">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <center>
                                    <div class="buttons">
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2B5BFF; color:white">Simpan</a>
                                        <a href="#" class="btn btn-secondary"
                                            style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                                    </div>
                                </center>
                            </div>
                            <div id="menu6" class="tab-pane fade" style="background-color: white">
                                <label>Diagnosa</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <label>Tindakan/Terapi</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <label>Alasan Kontrol</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <label>Rencana Tindak Lanjut</label>
                                <div class="form-group">
                                    <textarea class="form-control col-12"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputPassword4">Jadwal Kontrol</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="inputEmail4">Jenis Pembayaran Kontrol</label>
                                        <select class="custom-select" style="height: 42px">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <center>
                                    <div class="buttons">
                                        <a href="#" class="btn btn-primary"
                                            style="background-color: #2B5BFF; color:white">Simpan</a>
                                        <a href="#" class="btn btn-secondary"
                                            style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                                    </div>
                                </center>
                            </div>
                        </div>
                        {{-- <div class="table-responsive">
                            <table class="table table-sm">
                                <tbody class="" style="align-content: center">
                                    <!DOCTYPE html>
                                    <html lang="en">

                                    <head>
                                        <title>Bootstrap Example</title>
                                        <meta charset="utf-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <link rel="stylesheet"
                                            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
                                        </script>
                                        <script
                                            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
                                        </script>
                                    </head>

                                    <body>

                                        <div class="">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#home1">Riwayat Medis</a>
                                                </li>
                                                <li><a data-toggle="tab" href="#menu1">S O A P</a></li>
                                                <li><a data-toggle="tab" href="#menu2">Resep</a></li>
                                                <li><a data-toggle="tab" href="#menu3">CResep</a></li>
                                                <li><a data-toggle="tab" href="#menu4">LAB</a></li>
                                                <li><a data-toggle="tab" href="#menu5">RAD</a></li>
                                                <li><a data-toggle="tab" href="#menu6">Kontrol</a></li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="home1" class="tab-pane fade in active"
                                                    style="background-color: white">
                                                    <h3>Riwayat Medis</h3>

                                                </div>
                                                <div id="menu1" class="tab-pane fade" style="background-color: white">
                                                    <h3>S O A P</h3>

                                                </div>
                                                <div id="menu2" class="tab-pane fade" style="background-color: white">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label>Obat</label>
                                                            <div class="form-group">
                                                                <textarea class="form-control col-12"></textarea>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-7">
                                                                    <label for="inputCity">Nama obat</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputCity">
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="inputState">Jumlah</label>
                                                                    <select class="custom-select" style="height: 42px">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-7">
                                                                    <label for="inputEmail4">Aturan pakai</label>
                                                                    <input type="email" class="form-control"
                                                                        id="inputEmail4" placeholder="Email">
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="inputPassword4">Tanggal</label>
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">@</div>
                                                                            <input type="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <div class="buttons">
                                                            <a href="#" class="btn btn"
                                                                style="background-color: #2B5BFF; color:white">Primary</a>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div id="menu3" class="tab-pane fade" style="background-color: white">
                                                    <h4>Cresep</h4>

                                                </div>
                                                <div id="menu4" class="tab-pane fade" style="background-color: white">
                                                    <label>Diagnosa Klinis</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <label>Informasi Tambahan</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail4">Nama Pemerikasaan</label>
                                                        <select class="custom-select" style="height: 42px">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <center>
                                                        <div class="buttons">
                                                            <a href="#" class="btn btn-primary"
                                                                style="background-color: #2B5BFF; color:white">Simpan</a>
                                                            <a href="#" class="btn btn-secondary"
                                                                style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                                                        </div>
                                                    </center>

                                                </div>
                                                <div id="menu5" class="tab-pane fade" style="background-color: white">
                                                    <label>Diagnosa Klinis</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <label>Informasi Tambahan</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail4">Nama Pemerikasaan</label>
                                                        <select class="custom-select" style="height: 42px">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <center>
                                                        <div class="buttons">
                                                            <a href="#" class="btn btn-primary"
                                                                style="background-color: #2B5BFF; color:white">Simpan</a>
                                                            <a href="#" class="btn btn-secondary"
                                                                style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div id="menu6" class="tab-pane fade" style="background-color: white">
                                                    <label>Diagnosa</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <label>Tindakan/Terapi</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <label>Alasan Kontrol</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <label>Rencana Tindak Lanjut</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control col-12"></textarea>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-5">
                                                            <label for="inputPassword4">Jadwal Kontrol</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">@</div>
                                                                    <input type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-7">
                                                            <label for="inputEmail4">Jenis Pembayaran Kontrol</label>
                                                            <select class="custom-select" style="height: 42px">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <center>
                                                        <div class="buttons">
                                                            <a href="#" class="btn btn-primary"
                                                                style="background-color: #2B5BFF; color:white">Simpan</a>
                                                            <a href="#" class="btn btn-secondary"
                                                                style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>

                                    </body>

                                    </html>

                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
