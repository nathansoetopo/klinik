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
            <form action="{{ url('admin/invoice/' . $pasien->id . '/store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data SOAP</h4>
                                {{-- <h4>
                            <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                data-target="#addData" class="btn btn-lg text-white">Tambah
                                Pasien</button>
                        </h4> --}}
                                <div class="card-header-form">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn text-white" style="background-color: #66CDAA"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID SOAP</th>
                                            <th>Keluhan</th>
                                            <th>Pemeriksaan Objective</th>
                                            <th>Pemeriksaan Assessment</th>
                                            <th>Tindakan</th>
                                            <th>Plan</th>
                                            <th>Instruksi</th>
                                            <th>Evaluasi</th>
                                            <th>Biaya</th>
                                        </tr>
                                        @foreach ($soap as $p)
                                            <tr>
                                                <td><a href="#">{{ $p->id }}</a>
                                                </td>
                                                <td class="font-weight-600">{{ $p->keluhan }}</td>
                                                <td class="font-weight-400">{{ $p->pemeriksaan_objective }}</td>
                                                <td class="font-weight-400">{{ $p->pemeriksaan_assessment }}</td>
                                                <td class="font-weight-400">{{ $p->tindakan }}</td>
                                                <td class="font-weight-400">{{ $p->plan }}</td>
                                                <td class="font-weight-400">{{ $p->instruksi }}</td>
                                                <td class="font-weight-400">{{ $p->evaluasi }}</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-secondary rounded text-white">
                                                                Rp
                                                            </div>
                                                        </div>
                                                        <input type="number" min="0" class="form-control"
                                                            id="alergi" name="biaya_soap[]">
                                                    </div>
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
                                                    class="{{ $soap->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link" href="{{ $soap->url($soap->currentPage() - 1) }}"
                                                        aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                @for ($i = 1; $i <= $soap->lastPage(); $i++)
                                                    <li
                                                        class="{{ $soap->currentPage() == $i ? 'page-item active' : 'page-item' }}">
                                                        <a class="page-link"
                                                            href="{{ $soap->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li
                                                    class="{{ $soap->currentPage() == $soap->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link" href="{{ $soap->url($soap->currentPage() + 1) }}"
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Diagnosis Lab</h4>
                                {{-- <h4>
                                    <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                        data-target="#addData" class="btn btn-lg text-white">Tambah
                                        Pasien</button>
                                </h4> --}}
                                <div class="card-header-form">

                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn text-white" style="background-color: #66CDAA"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>No</th>
                                            <th>Diagnosis Klinis</th>
                                            <th>Informasi Tambahan</th>
                                            <th>Nama Pemeriksaan</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Bayar</th>
                                        </tr>
                                        @foreach ($labs as $key => $p)
                                            <tr>
                                                <td><a href="#">{{ $key + 1 }}</a></td>
                                                <td class="font-weight-600">{{ $p->diagnosis_klinis }}</td>
                                                <td class="font-weight-400">{{ $p->info_tambahan }}</td>
                                                <td>
                                                    {{ $p->nama_pemeriksaan }}
                                                </td>
                                                <td>
                                                    {{ $p->created_at }}
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-secondary rounded text-white">
                                                                Rp
                                                            </div>
                                                        </div>
                                                        <input type="number" min="0" class="form-control"
                                                            id="alergi" name="biaya_lab[]">
                                                    </div>
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
                                                    class="{{ $labs->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $labs->url($labs->currentPage() - 1) }}"
                                                        aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                @for ($i = 1; $i <= $labs->lastPage(); $i++)
                                                    <li
                                                        class="{{ $labs->currentPage() == $i ? 'page-item active' : 'page-item' }}">
                                                        <a class="page-link"
                                                            href="{{ $labs->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li
                                                    class="{{ $labs->currentPage() == $labs->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $labs->url($labs->currentPage() + 1) }}"
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Diagnosis Rad</h4>
                                {{-- <h4>
                                <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                    data-target="#addData" class="btn btn-lg text-white">Tambah
                                    Pasien</button>
                            </h4> --}}
                                <div class="card-header-form">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn text-white" style="background-color: #66CDAA"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>No</th>
                                            <th>Diagnosis Klinis</th>
                                            <th>Informasi Tambahan</th>
                                            <th>Nama Pemeriksaan</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Bayar</th>
                                        </tr>
                                        @foreach ($labs as $key => $p)
                                            <tr>
                                                <td><a href="#">{{ $key + 1 }}</a></td>
                                                <td class="font-weight-600">{{ $p->diagnosis_klinis }}</td>
                                                <td class="font-weight-400">{{ $p->info_tambahan }}</td>
                                                <td>
                                                    {{ $p->nama_pemeriksaan }}
                                                </td>
                                                <td>
                                                    {{ $p->created_at }}
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-secondary rounded text-white">
                                                                Rp
                                                            </div>
                                                        </div>
                                                        <input type="number" min="0" class="form-control"
                                                            id="alergi" name="biaya_rad[]">
                                                    </div>
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
                                                    class="{{ $labs->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $labs->url($labs->currentPage() - 1) }}"
                                                        aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                @for ($i = 1; $i <= $labs->lastPage(); $i++)
                                                    <li
                                                        class="{{ $labs->currentPage() == $i ? 'page-item active' : 'page-item' }}">
                                                        <a class="page-link"
                                                            href="{{ $labs->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li
                                                    class="{{ $labs->currentPage() == $labs->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $labs->url($labs->currentPage() + 1) }}"
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Kontrol</h4>
                                {{-- <h4>
                                <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                    data-target="#addData" class="btn btn-lg text-white">Tambah
                                    Pasien</button>
                            </h4> --}}
                                <div class="card-header-form">

                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn text-white" style="background-color: #66CDAA"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>No</th>
                                            <th>Diagnosis</th>
                                            <th>Tindakan</th>
                                            <th>Alasan</th>
                                            <th>Rencana</th>
                                            <th>Tanggal Kontrol</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Jenis Bayar</th>
                                            <th>Bayar</th>
                                        </tr>
                                        @foreach ($kontrol as $key => $p)
                                            <tr>
                                                <td><a href="#">{{ $key + 1 }}</a></td>
                                                <td class="font-weight-600">{{ $p->diagnosis }}</td>
                                                <td class="font-weight-400">{{ $p->tindakan }}</td>
                                                <td>
                                                    {{ $p->alasan }}
                                                </td>
                                                <td>
                                                    {{ $p->rencana }}
                                                </td>
                                                <td>
                                                    {{ $p->tgl_kontrol }}
                                                </td>
                                                <td>
                                                    {{ $p->created_at }}
                                                </td>
                                                <td>
                                                    @if ($p->jenis_bayar == 'UMUM')
                                                        <div class="badge badge-success">Umum</div>
                                                    @else
                                                        <div class="badge badge-info">BPJS</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-secondary rounded text-white">
                                                                Rp
                                                            </div>
                                                        </div>
                                                        <input type="number" min="0" class="form-control"
                                                            id="alergi" name="biaya_kontrol[]">
                                                    </div>
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
                                                    class="{{ $kontrol->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $kontrol->url($kontrol->currentPage() - 1) }}"
                                                        aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                @for ($i = 1; $i <= $kontrol->lastPage(); $i++)
                                                    <li
                                                        class="{{ $kontrol->currentPage() == $i ? 'page-item active' : 'page-item' }}">
                                                        <a class="page-link"
                                                            href="{{ $kontrol->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li
                                                    class="{{ $kontrol->currentPage() == $kontrol->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $kontrol->url($kontrol->currentPage() + 1) }}"
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Resep</h4>
                                {{-- <h4>
                                <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                    data-target="#addData" class="btn btn-lg text-white">Tambah
                                    Pasien</button>
                            </h4> --}}
                                <div class="card-header-form">

                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn text-white" style="background-color: #66CDAA"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>

                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Obat</th>
                                            <th scope="col">Desc</th>
                                            <th scope="col">Jumlah Obat</th>
                                            <th scope="col">Aturan Pakai</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reseps as $resep)
                                            <tr>
                                                <td>{{ $resep->medicines->name }}</td>
                                                <td>{{ $resep->desc }}</td>
                                                <td>{{ $resep->jml_obat }}</td>
                                                <td>{{ $resep->aturan_pakai }}</td>
                                                <td>{{ $resep->tanggal }}</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-secondary rounded text-white">
                                                                Rp
                                                            </div>
                                                        </div>
                                                        <input type="number" min="0" class="form-control"
                                                            id="alergi" name="biaya_resep[]">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-center">
                                <div class="buttons">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li
                                                class="{{ $reseps->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                                <a class="page-link"
                                                    href="{{ $reseps->url($reseps->currentPage() - 1) }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            @for ($i = 1; $i <= $reseps->lastPage(); $i++)
                                                <li
                                                    class="{{ $reseps->currentPage() == $i ? 'page-item active' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $reseps->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li
                                                class="{{ $reseps->currentPage() == $reseps->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                                <a class="page-link"
                                                    href="{{ $reseps->url($reseps->currentPage() + 1) }}"
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
                <button type="submit" class="btn btn-info">Create Invoice</button>
            </form>
        </section>
    </div>
@endsection
