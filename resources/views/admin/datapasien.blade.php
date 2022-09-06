@extends('parent.master')
@section('content')
<div class="main-content">
    <section class="section">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $error }}
            </div>
        </div>
        @endforeach
        @endif
        @if (session('status'))
        <div class="alert alert-info alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('status') }}
            </div>
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('error') }}
            </div>
        </div>
        @endif
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
                                data-target="#addData" class="btn btn-lg text-white">Tambah
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
                                    <th>TTL</th>
                                    <th>Pembayaran</th>
                                    <th>No RM</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($pasien as $p)
                                <tr>
                                    <td><a href="{{url('admin/datapasiendetail')}}">{{ $p->no_reg }}</a></td>
                                    <td class="font-weight-600">{{ $p->users->name }}</td>
                                    <td class="font-weight-400">{{ $p->ttl }}</td>
                                    <td>
                                        @if($p->jenis_pembayaran == 'UMUM')
                                        <div class="badge badge-success">Umum</div>
                                        @else
                                        <div class="badge badge-info">BPJS</div>
                                        @endif
                                    </td>
                                    <td>{{ $p->no_rm }}</td>
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
                                        <a href="{{url('admin/datapasiendetail')}}" class="btn btn-info">Detail</a>
                                        <a href="#" data-toggle="modal"
                                            data-target="#updateData{{ $p->id }}">
                                            <button type="button" class="btn btn-warning">Update</button>
                                        </a>
                                        <a href="#" data-toggle="modal"
                                            data-target="#deleteData{{ $p->id }}">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </a>
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
@include('admin.modal.create-pasien')
@include('admin.modal.update-pasien')
@include('admin.modal.delete-pasien')
@endsection
