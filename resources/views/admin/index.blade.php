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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        {{-- <canvas id="myChart"></canvas> --}}
                        <canvas id="pie" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        {{-- <canvas id="myChart"></canvas> --}}
                        <canvas id="bar" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h4>Pasien Terbaru</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr style="background-color: #66CDAA;">
                                    <th>No REG</th>
                                    <th>Nama</th>
                                    <th>Pekerjaan</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                                @foreach ($pasien as $p)
                                <tr>
                                    <td><a href="#">{{ $p->no_reg }}</a></td>
                                    <td class="font-weight-600">{{ $p->users->name }}</td>
                                    <td class="font-weight-600">{{ $p->pekerjaan }}</td>
                                    <td>
                                        @if($p->jenis_pembayaran == 'UMUM')
                                        <div class="badge badge-success">Umum</div>
                                        @else
                                        <div class="badge badge-info">BPJS</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($p->status_pelayanan == 'DONE')
                                        <div class="badge badge-success">Done</div>
                                        @elseif($p->status_pelayanan == 'PROGRESS')
                                        <div class="badge badge-warning">Progress</div>
                                        @elseif($p->status_pelayanan == 'CANCELLED')
                                        <div class="badge badge-danger">Cancelled</div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="buttons">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li
                                            class="{{ ($pasien->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                                            <a class="page-link"
                                                href="{{ $pasien->url($pasien->currentPage()-1) }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $pasien->lastPage(); $i++)
                                        <li
                                            class="{{ ($pasien->currentPage() == $i) ? 'page-item active' : 'page-item' }}">
                                            <a class="page-link" href="{{ $pasien->url($i) }}">{{ $i }}</a></li>
                                        @endfor
                                        <li
                                            class="{{ ($pasien->currentPage() == $pasien->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                                            <a class="page-link"
                                                href="{{ $pasien->url($pasien->currentPage()+1) }}"
                                                aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
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
                        <div class="container mb-3" style="width: 70%; float: right;">
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
                                @foreach ($dokter as $d)
                                <tr>
                                    <td style="width: 30%; text-align:center"><img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1"
                                    style="width:50px"></td>
                                    <td class="font-weight-600 pt-3" style="text-align: left">{{ $d->users->name }} <br> <p>{{ $d->spesialis }}</p></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="buttons">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li
                                            class="{{ ($dokter->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                                            <a class="page-link"
                                                href="{{ $dokter->url($dokter->currentPage()-1) }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $dokter->lastPage(); $i++)
                                        <li
                                            class="{{ ($dokter->currentPage() == $i) ? 'page-item active' : 'page-item' }}">
                                            <a class="page-link" href="{{ $dokter->url($i) }}">{{ $i }}</a></li>
                                        @endfor
                                        <li
                                            class="{{ ($dokter->currentPage() == $dokter->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                                            <a class="page-link"
                                                href="{{ $dokter->url($dokter->currentPage()+1) }}"
                                                aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
