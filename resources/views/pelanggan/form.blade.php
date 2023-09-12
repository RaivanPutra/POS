<div class="modal fade" id="formPelangganModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Kontak</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="pelanggan">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama" value="" name="nama">
                                <label for="exampleInputEmail1">Kode Pelanggan</label>
                                <input type="text" class="form-control" id="kode_pelanggan" value=""
                                    name="kode_pelanggan">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="" name="alamat">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" value="" name="email">
                                <label for="exampleInputEmail1">No Telpon</label>
                                <input type="number" class="form-control" id="no_tlp" value="" name="no_tlp">
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
