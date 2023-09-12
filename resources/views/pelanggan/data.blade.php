<table class="table table-compact table-stripped" id="data-pelanggan">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Kode Pelanggan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telpon</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelanggan as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->kode_pelanggan }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_tlp }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formPelangganModal" data-mode="edit"
                        data-id="{{ $p->id }}" data-nama="{{ $p->nama }}"
                        data-kode_pelanggan="{{ $p->kode_pelanggan }}" data-alamat="{{ $p->alamat }}"
                        data-email="{{ $p->email }}" data-no_tlp="{{ $p->no_tlp }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="pelanggan/{{ $p->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama="{{ $p->nama }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
