<table class="table table-compact table-stripped" id="data-barang">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Produk ID</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Ditarik</th>
            <th>User ID</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->kode_barang }}</td>
                <td>{{ $p->produk_id }}</td>
                <td>{{ $p->nama_barang }}</td>
                <td>{{ $p->satuan }}</td>
                <td>{{ $p->harga_jual }}</td>
                <td>{{ $p->stok }}</td>
                <td>{{ $p->ditarik }}</td>
                <td>{{ $p->user_id }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formBarangModal" data-mode="edit"
                        data-id="{{ $p->id }}" data-nama_barang="{{ $p->nama_barang }}"
                        data-kode_barang="{{ $p->kode_barang }}" data-produk_id="{{ $p->produk_id }}"
                        data-satuan="{{ $p->satuan }}" data-harga_jual="{{ $p->harga_jual }}"
                        data-stok="{{ $p->stok }}" data-ditarik="{{ $p->ditarik }}"
                        data-user_id="{{ $p->user_id }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="barang/{{ $p->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_barang="{{ $p->nama_barang }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
