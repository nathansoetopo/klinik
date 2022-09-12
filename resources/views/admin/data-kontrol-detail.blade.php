@extends('parent.master')
<style>
    .text-tab {
        width: fit-content;
    }

    .text-tab hr {
        border-radius: 5px;
        border: 2px solid #66CDAA;
        margin-left: 5%;
    }
</style>
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
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <table class="table">
                                    <tbody class="" style="align-content: center">
                                        <tr>
                                            <td class="d-flex justify-content-center">Nama Pasien</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                                <b>{{ $pasien->users->name }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex justify-content-center">No Reg</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                                <b>{{ $pasien->no_reg }}</b>
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                        <td class="d-flex justify-content-center">Jenis Kelamin</td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                            <b>41316</b>
                                        </td>
                                    </tr> --}}
                                        <tr>
                                            <td class="d-flex justify-content-center">Alamat Lengkap</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                                <b>{{ $pasien->alamat }}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex justify-content-center">Tempat Tanggal Lahir</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px" class="d-flex justify-content-center">
                                                <b>{{ $pasien->ttl }}</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#menu1" role="tab"
                                        aria-controls="profile" aria-selected="false">Kontrol</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div id="rm" class="tab-pane fade" style="background-color: white">
                                    <h3>Riwayat Medis</h3>
                                </div>
                                <div id="menu1" class="tab-pane fade" style="background-color: white">
                                    <form action="{{ url('/admin/kontrol/' . $kontrol->id . '/update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="container">
                                            <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
                                            <label id="diagnosaKontrol">Diagnosa</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="diagnosis" id="diagnosaKontrol" style="height: 100px;">{{ $kontrol->diagnosis }}</textarea>
                                            </div>
                                            <label for="terapi">Tindakan/Terapi</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="tindakan" id="terapi" style="height: 100px;">{{ $kontrol->tindakan }}</textarea>
                                            </div>
                                            <label for="alasanKontrol">Alasan Kontrol</label>
                                            <div class="form-group">
                                                <textarea class="form-control" id="alasanKontrol" name="alasan" style="height: 100px;">{{ $kontrol->alasan }}</textarea>
                                            </div>
                                            <label id="rtl">Rencana Tindak Lanjut</label>
                                            <div class="form-group">
                                                <textarea class="form-control col-12" id="rtl" name="rencana" style="height: 100px;">{{ $kontrol->rencana }}</textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="jadwalKontrol">Jadwal Kontrol</label>
                                                    <div class="input-group mb-2">
                                                        <input type="date" name="tgl_kontrol" class="form-control"
                                                            id="jadwalKontrol" value="{{ $kontrol->tgl_kontrol }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-7">
                                                    <label for="pembayaran">Jenis Pembayaran Kontrol</label>
                                                    <select class="custom-select" id="pembayaran" style="height: 42px"
                                                        name="jenis_bayar">
                                                        @foreach ($jenis as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $item == $kontrol->jenis_bayar ? 'selected' : '' }}>
                                                                {{ $item }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 p-3">
                                                <button type="submit" class="btn btn-lg text-white"
                                                    style="background-color: #2B5BFF; width:100%">Simpan</button>
                                            </div>
                                            <div class="col-6 p-3">
                                                <button type="button" class="btn btn-lg text-danger btn-outline-danger"
                                                    form="form-obat" style="width:100%">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
