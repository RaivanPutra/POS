@extends('templates.main')

@push('style')
@endpush

@section('content')
    Barang
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

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBarangModal">
                    Tambah Barang
                </button>
                <!--Modal -->
                @include('barang.form')
                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            @include('barang.data')
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

        $('#formBarangModal').on('show.bs.modal', function(e) {
            const btn = $(e.relatedTarget)
            console.log(btn.data('mode'))
            const mode = btn.data('mode')
            const nama_barang = btn.data('nama_barang')
            const kode_barang = btn.data('kode_barang')
            const satuan = btn.data('satuan')
            const harga_jual = btn.data('harga_jual')
            const stok = btn.data('stok')
            const ditarik = btn.data('ditarik')
            const produk_id = btn.data('produk_id')
            const user_id = btn.data('user_id')
            const id = btn.data('id')
            const modal = $(this)
            if (mode == 'edit') {
                modal.find('.modal-title').text('Edit Data Barang')
                modal.find('#nama_barang').val(nama_barang)
                modal.find('#kode_barang').val(kode_barang)
                modal.find('#satuan').val(satuan)
                modal.find('#harga_jual').val(harga_jual)
                modal.find('#stok').val(stok)
                modal.find('#ditarik').val(ditarik)
                modal.find('#produk_id').val(produk_id)
                modal.find('#user_id').val(user_id)
                modal.find('.modal-body form').attr('action', '{{ url('barang') }}/' + id)
                modal.find('#method').html('@method('PATCH')')
            } else {
                modal.find('.modal-title').text('Input Data barang')
                modal.find('#nama_barang').val('')
                modal.find('#kode_barang').val('')
                modal.find('#satuan').val('')
                modal.find('#harga_jual').val('')
                modal.find('#stok').val('')
                modal.find('#produk_id').val('')
                modal.find('#ditarik').val('')
                modal.find('#user_id').val('')
                modal.find('#method').html('')
                modal.find('.modal-body form').attr('action', '{{ url('barang') }}')
            }
        })
    </script>
@endpush
