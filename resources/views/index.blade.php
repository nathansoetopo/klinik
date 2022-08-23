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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" height="158"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h4>Passien Terbaru</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr style="background-color: #66CDAA;">
                                    <th>No RM</th>
                                    <th>Nama</th>
                                    <th>Pekerjaan</th>
                                    <th>Pembayaran</th>
                                </tr>
                                <tr>
                                    <td><a href="#">INV-87239</a></td>
                                    <td class="font-weight-600">Kusnadi</td>
                                    <td class="font-weight-600">TNI</td>
                                    <td>
                                        <div class="badge badge-danger">Umum</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">INV-87240</a></td>
                                    <td class="font-weight-600">Fredy</td>
                                    <td class="font-weight-600">Polisi</td>
                                    <td>
                                        <div class="badge badge-success">BPJS</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h4>Jadwal Dokter</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="container mb-3" style="width: 40%; float: right;">
                            <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="border-top-left-radius:30px; border-bottom-left-radius:30px; background-color: #66CDAA;"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                                <select class="form-control" style="border-top-right-radius:30px; border-bottom-right-radius:30px; background-color: #66CDAA;">
                                    <option class="bg-transparent">Pagi</option>
                                    <option class="bg-transparent">Siang</option>
                                    <option class="bg-transparent">Sore</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr>
                                    <td style="width: 30%; text-align:center"><img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1"
                                    style="width:50px"></td>
                                    <td class="font-weight-600 pt-3" style="text-align: left">Dr. Diki Mustoffa Jadab <br> <p>Dokter Anak</p></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%; text-align:center"><img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1"
                                    style="width:50px"></td>
                                    <td class="font-weight-600 pt-3" style="text-align: left">Dr. Samsudin Jadab <br> <p>Dokter Mental</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
