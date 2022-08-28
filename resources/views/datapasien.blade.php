@extends('parent.master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2 card-dashboard pb-3">
                    <div class="card-stats">
                        <div class="card-stats-title">Total Pasien</div>
                        <div class="card-stats-items pl-4">
                            <h2>1.234</h2>
                        </div>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Data Perhari</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2 card-dashboard pb-3">
                    <div class="card-stats">
                        <div class="card-stats-title">Status Perawatan</div>
                        <div class="card-stats-items pl-4">
                            <h2>1.234</h2>
                        </div>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Data Pertahun</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2 card-dashboard pb-3">
                    <div class="card-stats">
                        <div class="card-stats-title">Status Kunjungan</div>
                        <div class="card-stats-items pl-4">
                            <h2>1.234</h2>
                        </div>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Data Pertahun</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>
                    <button id="modal-8" style="height: 3em; background-color:#2B5BFF; color:white" class="btn btn-light">Tambah Pasien</button>
                  </h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        {{-- <th>
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                          </div>
                        </th> --}}
                        <th>No Reg</th>
                        <th>Nama Pasien</th>
                        <th>Pembayaran</th>
                        <th>No RM</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        {{-- <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td> --}}
                        <td>00613</td>
                        <td>Budi Setiaji</td>
                        <td>LUNAS</td>
                        <td>2018-01-20</td>
                        <td><div class="badge badge-success">Completed</div></td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>
                      <tr>
                        {{-- <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td> --}}
                        <td>00613</td>
                        <td>Budi Setiaji</td>
                        <td>LUNAS</td>
                        <td>2018-01-20</td>
                        <td><div class="badge badge-success">Completed</div></td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
        <!--Modal Form Tambah-->
        <form class="modal-part" id="modal-tambahpasien-part">
            <div class="form-group">
              <label>Nama Titik</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-pencil-alt"></i>
                  </div>
                </div>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
              </div>
            </div>
            <!-- <div id="googleMap" style="width:100%;height:380px;"></div> -->
            <div id="myMap"></div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-location-arrow"></i>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Koordinat" name="Koordinat">
            </div>
          </div>
        </div>
        </div>
        <div class="form-group mb-0">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
            <label class="custom-control-label" for="remember-me">Data yang dimasukan sudah benar?</label>
          </div>
        </div>
        </form>
@endsection
