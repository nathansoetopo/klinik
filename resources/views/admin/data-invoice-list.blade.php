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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h4>
                            <button id="modal-8" style="background-color:#2B5BFF;" data-toggle="modal"
                                data-target="#addData" class="btn btn-lg text-white">Tambah
                                Pasien</button>
                        </h4> --}}
                            <h4>
                                <a href="{{ url('admin/invoice/' . $pasienID . '/create') }}"
                                    style="background-color:#2B5BFF;" class="btn btn-lg text-white">Create
                                    Invoice</a>
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
                                        <th>No</th>
                                        <th>No Invoice</th>
                                        <th>Total Payment</th>
                                        <th>Payment Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($invoices as $key => $p)
                                        <tr>
                                            <td><a href="#">{{ $key + 1 }}</a></td>
                                            <td class="font-weight-600">{{ $p->inv_code }}</td>
                                            <td class="font-weight-400">Rp. {{ number_format($p->payment_total) }}</td>
                                            <td>
                                                {{ $p->payment_status }}
                                            </td>
                                            <td>
                                                {{ $p->created_at }}
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/invoice/' . $p->inv_code . '/tagihan') }}"
                                                    class="btn btn-info">Cetak Tagihan</a>
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
                                                class="{{ $invoices->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                                <a class="page-link"
                                                    href="{{ $invoices->url($invoices->currentPage() - 1) }}"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            @for ($i = 1; $i <= $invoices->lastPage(); $i++)
                                                <li
                                                    class="{{ $invoices->currentPage() == $i ? 'page-item active' : 'page-item' }}">
                                                    <a class="page-link"
                                                        href="{{ $invoices->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li
                                                class="{{ $invoices->currentPage() == $invoices->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                                <a class="page-link"
                                                    href="{{ $invoices->url($invoices->currentPage() + 1) }}"
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
