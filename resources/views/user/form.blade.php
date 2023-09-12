<div class="modal fade" id="formProdukModal">
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
          <form method="post" action="produk">
            @csrf
            <div id="method"></div>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" value="" name="nama_produk">
                <label for="exampleInputEmail1">Stock</label>
                <input type="number" class="form-control" id="stock" value="" name="stock">
                <label for="exampleInputEmail1">Harga</label>
                <input type="Number" class="form-control" id="harga" value="" name="harga">
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