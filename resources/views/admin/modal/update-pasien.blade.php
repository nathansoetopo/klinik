@foreach ($pasien as $p)
<div class="modal fade" tabindex="-1" role="dialog" id="updateData{{ $p->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Update Pasien</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/data-pasien/'.$p->id.'/update') }}" method="POST" id="updatePasien">
                    @csrf
                    {{-- <div class="form-group row">
                        <label for="noreg" class="col-sm-3 col-form-label-lg"
                            style="font-size: 15px">No.Registrasi</label>
                        <div class="col-sm-9">
                            <input type="text" name="noreg" class="form-control" id="noreg"
                                placeholder="Masukkan Nomor Registrasi">
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Nama
                            Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Masukkan Nama Lengkap Pasien" value="{{ $p->users->name }}">
                        </div>
                    </div>
                    @php
                        $arr = explode(',',$p->ttl);
                    @endphp
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
                                placeholder="Masukkan Tempat Lahir" value="{{ $arr[0] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" name="pekerjaan" class="form-control" id="name"
                                placeholder="Masukkan Pekerjaan Pasien" value="{{ $p->pekerjaan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Alamat
                            Lengkap</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"
                                placeholder="Masukkan Alamat">{{ $p->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Jenis
                            Pembayaran</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenis" name="jenis_pembayaran">
                                <option selected>Pilih Jenis Pembayaran</option>
                                <option value="UMUM">Umum</option>
                                <option value="BPJS">BPJS</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="rm" class="col-sm-3 col-form-label-lg" style="font-size: 15px">No.Rekam
                            Medis</label>
                        <div class="col-sm-9">
                            <input type="number" name="rm" class="form-control" id="rm"
                                placeholder="Masukkan Nomor Rekam Medis">
                        </div>
                    </div> --}}
                </form>
            </div>
            <div class="container pb-4">
                <center>
                    <button type="submit" form="updatePasien" class="btn btn-lg text-white" style="background-color: #2B5BFF">SIMPAN</button>
                </center>
            </div>
        </div>
    </div>
</div>
@endforeach