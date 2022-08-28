@extends('parent.master')
@section('content')
<div class="main-content">
<div class="row">
    <div class="col-3">
    <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-sm">
              <tbody class="" style="align-content: center">
                <tr>
                  <td class="d-flex justify-content-center">Nama Pasien</td>
                </tr>
                <tr>
                  <td style="padding-bottom:20px" class="d-flex justify-content-center"><b>Jacob</b></td>
                </tr>
            <tr>
                <td class="d-flex justify-content-center">No Reg</td>
              </tr>
              <tr>
                <td  style="padding-bottom:20px"  class="d-flex justify-content-center"><b>41316</b></td>
              </tr>
              <tr>
                <td class="d-flex justify-content-center">Jenis Kelamin</td>
              </tr>
              <tr>
                <td  style="padding-bottom:20px"  class="d-flex justify-content-center"><b>41316</b></td>
              </tr>
              <tr>
                <td class="d-flex justify-content-center">Alamat Lengkap</td>
              </tr>
              <tr>
                <td  style="padding-bottom:20px" class="d-flex justify-content-center"><b>Desa Rejowinangun</b></td>
              </tr>
              <tr>
                <td class="d-flex justify-content-center">Tempat Tanggal Lahir</td>
              </tr>
              <tr>
                <td  style="padding-bottom:20px"  class="d-flex justify-content-center"><b>Blitar</b></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm">
                  <tbody class="" style="align-content: center">
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <title>Bootstrap Example</title>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                    </head>
                    <body>

                    <div class="">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home1">Riwayat Medis</a></li>
                        <li><a data-toggle="tab" href="#menu1">S O A P</a></li>
                        <li><a data-toggle="tab" href="#menu2">Resep</a></li>
                        <li><a data-toggle="tab" href="#menu3">CResep</a></li>
                        <li><a data-toggle="tab" href="#menu4">LAB</a></li>
                        <li><a data-toggle="tab" href="#menu5">RAD</a></li>
                        <li><a data-toggle="tab" href="#menu6">Kontrol</a></li>
                      </ul>

                      <div class="tab-content">
                        <div id="home1" class="tab-pane fade in active" style="background-color: white">
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
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
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
                            <a href="#" class="btn btn" style="background-color: #2B5BFF; color:white">Primary</a>
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
                                  <a href="#" class="btn btn-primary" style="background-color: #2B5BFF; color:white">Simpan</a>
                                  <a href="#" class="btn btn-secondary" style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
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
                                  <a href="#" class="btn btn-primary" style="background-color: #2B5BFF; color:white">Simpan</a>
                                  <a href="#" class="btn btn-secondary" style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
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
                            <a href="#" class="btn btn-primary" style="background-color: #2B5BFF; color:white">Simpan</a>
                            <a href="#" class="btn btn-secondary" style="background-color: white; color:#2B5BFF; border-color:#2B5BFF">Batal</a>
                          </div>
                          </center>
                        </div>
                      </div>
                    </div>

                    </body>
                    </html>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
</div>


</div>
@endsection
