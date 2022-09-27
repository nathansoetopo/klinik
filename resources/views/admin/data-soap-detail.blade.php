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
                                        aria-controls="profile" aria-selected="false">S O A P</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div id="rm" class="tab-pane fade" style="background-color: white">
                                    <h3>Riwayat Medis</h3>
                                </div>
                                <div id="menu1" class="tab-pane fade" style="background-color: white">
                                    <form action="{{ url('admin/soap/' . $soap->id . '/update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="container pt-2">
                                            <div class="text-tab">
                                                <h5>Subjective</h5>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label for="keluhan">Keluhan</label>
                                                <textarea name="keluhan" id="keluhan" placeholder="Masukkan Keluhan" class="form-control" id=""
                                                    style="height: 100px;">{{ $soap->keluhan }}</textarea>
                                            </div>
                                            <div class="text-tab mt-5">
                                                <h5>Objective</h5>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label for="pemeriksaan">Pemeriksaan</label>
                                                <textarea name="pemeriksaan_objective" id="pemeriksaan" placeholder="Masukkan Pemeriksaan" class="form-control"
                                                    id="" style="height: 100px;">{{ $soap->pemeriksaan_objective }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="gcs">GCS</label>
                                                {{-- <textarea name="gcs" id="gcs" placeholder="Masukkan GCS"
                                                class="form-control" id="gcs" style="height: 100px;"></textarea> --}}
                                                <select name="gcs" id="gcs" class="form-control">
                                                    @for ($i = 1; $i <= 15; $i++)
                                                        <option value="{{ $i }}">GCS Level {{ $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="mmhg">Tensi</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="mmhg"
                                                                name="tensi" value="{{ $soap->tensi }}"
                                                                placeholder="110/80">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    mmHg</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="nadi">Nadi</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="nadi"
                                                                name="nadi" value="{{ $soap->nadi }}">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    x/menit</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="rr">RR</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="rr"
                                                                name="rr" value="{{ $soap->rr }}">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    x/menit</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="suhu">Suhu</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="suhu"
                                                                name="suhu" value="{{ $soap->suhu }}">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    °C
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="tinggi">Tinggi</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="tinggi"
                                                                name="tinggi" value="{{ $soap->tinggi }}">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    Cm
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="berat">Berat</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="berat"
                                                                name="berat" value="{{ $soap->berat }}">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    Kg
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="alergi">Alergi</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="alergi"
                                                                name="alergi" value="{{ $soap->alergi }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="sp02">Sp02</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="sp02"
                                                                name="spo2" value="{{ $soap->spo2 }}">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    %
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label for="imunisasi">Imunisasi</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-secondary rounded text-white">
                                                                    Ke
                                                                    - </div>
                                                            </div>
                                                            <input type="text" class="form-control" id="imunisasi"
                                                                name="imunisasi" value="{{ $soap->imunisasi }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-tab mt-5">
                                                <h5>Assessment</h5>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label for="pemeriksaan">Pemeriksaan</label>
                                                <textarea name="pemeriksaan_assessment" id="pemeriksaan" placeholder="Masukkan Pemeriksaan" class="form-control"
                                                    style="height: 100px;">{{ $soap->pemeriksaan_assessment }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="tindakan">Tindakan Keperawatan</label>
                                                <select class="form-control js-example-basic-multiple" name="tindakan"
                                                    id="tindakan">
                                                    {{-- <option value="AL">Tindakan 1</option>
                                                <option value="ID">Tindakan 2</option>
                                                <option value="WY">Tindakan 3</option> --}}
                                                    @foreach ($tindakan as $item)
                                                        <option value="{{ $item }}"
                                                            {{ $item === $soap->tindakan ? 'selected' : '' }}>
                                                            {{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-tab mt-5">
                                                <h5>Plan</h5>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label for="plan">Plan</label>
                                                <textarea name="plan" id="plan" placeholder="Masukkan Plan" class="form-control" id=""
                                                    style="height: 100px;">{{ $soap->plan }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="catatan">Catatan Dokter</label>
                                                <textarea name="catatan" id="gcs" placeholder="Masukkan Catatan Dokter" class="form-control"
                                                    style="height: 100px;">{{ $soap->catatan }}</textarea>
                                            </div>
                                            <div class="text-tab mt-5">
                                                <h5>Instruksi dan Evaluasi</h5>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label for="instruksi">Instruksi</label>
                                                <textarea name="instruksi" id="instruksi" placeholder="Masukkan Instruksi" class="form-control"
                                                    style="height: 100px;">{{ $soap->instruksi }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="evaluasi">Evaluasi</label>
                                                <textarea name="evaluasi" id="evaluasi" placeholder="Masukkan Evaluasi" class="form-control"
                                                    style="height: 100px;">{{ $soap->evaluasi }}</textarea>
                                            </div>
                                            <div class="text-tab mt-5">
                                                <h5>Status Pelayanan</h5>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <label for="statuspelayanan">Status Pelayanan</label>
                                                <select class="form-control" id="statuspelayanan" name="status">
                                                    {{-- <option value="" selected>Pilih Pelayanan</option> --}}
                                                    @foreach ($status as $item)
                                                        <option id="Sudah Terlayani" value="{{ $item }}"
                                                            {{ $item === $soap->status ? 'selected' : '' }}>
                                                            {{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 p-4">
                                                    <center><button type="submit"
                                                            class="btn w-100 btn-lg rounded text-white"
                                                            style="background-color: #2B5BFF;">Simpan</button></center>
                                                </div>
                                                <div class="col-6 p-4">
                                                    <center><input type="reset"
                                                            class="btn w-100 btn-outline-danger btn-lg rounded"
                                                            onclick="resetFunction()" value="Batal">
                                                    </center>
                                                </div>
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
