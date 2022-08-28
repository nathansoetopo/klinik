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
                            <h2>{{$today->count()}}</h2>
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
                            <h2>{{$year->count()}}</h2>
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
                            <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                data-target="#exampleModal" class="btn btn-lg text-white">Tambah
                                Pasien</button>
                        </h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn text-white" style="background-color: #66CDAA"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No Reg</th>
                                    <th>Nama Pasien</th>
                                    <th>Pembayaran</th>
                                    <th>No RM</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($pasien as $p)
                                <tr>
                                    <td><a href="#">{{ $p->no_reg }}</a></td>
                                    <td class="font-weight-600">{{ $p->users->name }}</td>
                                    <td>
                                        @if($p->jenis_pembayaran == 'UMUM')
                                        <div class="badge badge-success">Umum</div>
                                        @else
                                        <div class="badge badge-info">BPJS</div>
                                        @endif
                                    </td>
                                    <td>Bingung</td>
                                    <td>
                                        @if($p->status_pelayanan == 'DONE')
                                        <div class="badge badge-success">Done</div>
                                        @elseif($p->status_pelayanan == 'PROGRESS')
                                        <div class="badge badge-warning">Progress</div>
                                        @elseif($p->status_pelayanan == 'CANCELLED')
                                        <div class="badge badge-danger">Cancelled</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-secondary">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Pasien</h3>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="addPasien">
                    @csrf
                    <div class="form-group row">
                        <label for="noreg" class="col-sm-3 col-form-label-lg"
                            style="font-size: 15px">No.Registrasi</label>
                        <div class="col-sm-9">
                            <input type="text" name="noreg" class="form-control" id="noreg"
                                placeholder="Masukkan Nomor Registrasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Nama
                            Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Masukkan Nama Lengkap Pasien">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Tanggal
                            Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                placeholder="Masukkan Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempatlahir" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Tempat
                            Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tempat_lahir" class="form-control" id="tempatlahir"
                                placeholder="Masukkan Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Alamat
                            Lengkap</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"
                                placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Jenis
                            Pembayaran</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenis">
                                <option selected>Pilih Jenis Pembayaran</option>
                                <option value="UMUM">Umum</option>
                                <option value="BPJS">BPJS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rm" class="col-sm-3 col-form-label-lg" style="font-size: 15px">No.Rekam
                            Medis</label>
                        <div class="col-sm-9">
                            <input type="number" name="rm" class="form-control" id="rm"
                                placeholder="Masukkan Nomor Rekam Medis">
                        </div>
                    </div>
                </form>
            </div>
            <div class="container pb-4">
                <center>
                    <button type="submit" form="addPasien" class="btn btn-lg text-white" style="background-color: #2B5BFF">SIMPAN</button>
                </center>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
