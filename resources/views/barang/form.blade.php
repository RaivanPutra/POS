<div class="modal fade" id="formBarangModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="barang">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="exampleInputEmail1">Kode barang</label>
                                <input type="text" class="form-control" id="kode_barang" value=""
                                    name="kode_barang">
                                <div class="col-sm-8">
                                    <label for="exampleInputEmail1">Produk Id</label>
                                    <select class="form-select" name="produk_id" id="produk_id">
                                        <option value="">- Pilih -</option>
                                        @foreach ($produk as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_produk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="exampleInputEmail1">Nama barang</label>
                                <input type="text" class="form-control" id="nama_barang" value=""
                                    name="nama_barang">
                                <label for="exampleInputEmail1">Satuan</label>
                                <input type="text" class="form-control" id="satuan" value="" name="satuan">
                                <label for="exampleInputEmail1">Harga Jual</label>
                                <input type="text" class="form-control" id="harga_jual" value=""
                                    name="harga_jual">
                                <label for="exampleInputEmail1">Stock</label>
                                <input type="Number" class="form-control" id="stok" value="" name="stok">
                                <label for="exampleInputEmail1">Ditarik</label>
                                <input type="Number" class="form-control" id="ditarik" value="" name="ditarik">
                                <label for="exampleInputEmail1">User Id</label>
                                @foreach ($user as $u)
                                    <input type="Number" class="form-control" id="user_id"
                                        value="{{ $u->id }}" name="user_id">
                                @endforeach
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
