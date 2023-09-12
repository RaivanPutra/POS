@extends('templates.main')

@push('style')
@endpush

@section('content')
Produk
@endsection

@section('container')
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">@yield('content')</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>


      @endif

      @if($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formProdukModal">
        Tambah Kontak
      </button>
      <!--Modal -->
      @include('produk.form')
      <!-- /.card-body -->

      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    @include('produk.data')
</section>
@endsection

@push('script')
<script>
  $('.alert-success').fadeTo(5000, 500).slideUp(500, function() {
    $('.alert-success').slideUp(500)
  })

  $('.alert-danger').fadeTo(10000, 500).slideUp(500, function() {
    $('.alert-danger').slideUp(500)
  })


  $('.delete-data').on('click', function(e) {
    e.preventDefault()
    const data = $(this).closest('tr').find('td:eq(1)').text()
    Swal.fire({
      title: `apakah data <span style="color:red">${data}</span> akan dihapus?`,
      text: "Data tidak bisa dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus data ini!'
    }).then((result) => {
      if (result.isConfirmed)
        $(e.target).closest('form').submit()
      else swal.close()
    })
  })

  $('#formProdukModal').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget)
    console.log(btn.data('mode'))
    const mode = btn.data('mode')
    const nama_produk = btn.data('nama_produk')
    const id = btn.data('id')
    const modal = $(this)
    if (mode == 'edit') {
      modal.find('.modal-title').text('Edit Data Produk')
      modal.find('#nama_produk').val(nama_produk)
      modal.find('.modal-body form').attr('action', '{{ url("produk") }}/' + id)
      modal.find('#method').html('@method("PATCH")')
    } else {
      modal.find('.modal-title').text('Input Data Produk')
      modal.find('#nama_produk').val('')
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action', '{{ url("produk") }}')
    }
  })
</script>


@endpush