<table class="table table-compact table-stripped" id="data-produk">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Stock</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->harga }}</td>
            <td>
                <button class="btn" data-toggle="modal" data-target="#formProdukModal" data-mode="edit" data-id="{{ $p->id }}" data-nama_produk="{{ $p->nama_produk }}" data-stock="{{ $p->stock }}" data-harga="{{ $p->harga }}">
                    <i class="fas fa-edit"></i>
                </button>
                <form method="post" action="produk/{{ $p->id }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn delete-data" data-nama_produk="{{ $p->nama_produk }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>