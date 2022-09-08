<div class="modal fade" tabindex="-1" role="dialog" id="addData">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Obat</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/medicines') }}" method="POST" id="addObat">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Nama
                            Obat</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Masukkan Nama Obat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Deskripsi</label>
                        <div class="col-sm-9">
                            <input type="text" name="desc" class="form-control" id="desc"
                                placeholder="Masukkan Deskripsi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Tipe Obat</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenis" name="type">
                                @foreach ($types as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label-lg" style="font-size: 15px">Kategori Obat</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenis" name="category">
                                @foreach ($categories as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container pb-4">
                <center>
                    <button type="submit" form="addObat" class="btn btn-lg text-white" style="background-color: #2B5BFF">SIMPAN</button>
                </center>
            </div>
        </div>
    </div>
</div>