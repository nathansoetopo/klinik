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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h4>Data Pasien</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tr style="background-color: #66CDAA;">
                                    <th>No REG</th>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Pekerjaan</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                                @foreach ($pasien as $p)
                                <tr>
                                    <td><a href="#">{{ $p->no_reg }}</a></td>
                                    <td class="font-weight-600">{{ $p->users->name }}</td>
                                    <td class="font-weight-600">{{ $p->ttl }}</td>
                                    <td class="font-weight-600">{{ $p->alamat }}</td>
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
        </div>
    </section>
</div>
@endsection
