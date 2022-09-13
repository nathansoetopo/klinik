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
                                Data Invoice
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
                        <div class="card-body p-6">
                            <form action="{{ url('/kasir/create-payment') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="input">Invoice Code</label>
                                    <input type="text" class="form-control" name="inv_code" id=""
                                        value="{{ $invoice->inv_code }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="input">Nama Pasien</label>
                                    <input type="text" class="form-control" id=""
                                        value="{{ $invoice->pasien->users->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="input">Total Payment</label>
                                    <input type="text" class="form-control" id=""
                                        value="{{ $invoice->payment_total }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="input">Payment Status</label>
                                    <input type="text" class="form-control" id=""
                                        value="{{ $invoice->payment_status }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="input">Cashback</label>
                                    <input type="text" class="form-control" id="" name="cashback"
                                        value="{{ $cashback }}" readonly>
                                </div>
                                <button type="submit" class="btn btn-info">Cetak Invoice</button>
                            </form>
                        </div>
                    </div>
                    <a href="{{ url('/kasir') }}" class="btn btn-success">Back to Dashboard</a>
                </div>
            </div>
        </section>
    </div>
@endsection
