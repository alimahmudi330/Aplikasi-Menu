<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Customize additional styles here */
        body {
            padding: 20px;
        }

        .container {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <a href="menu/create" class="btn btn-primary mb-3">Tambah Menu</a>

    <div class="container">
        <table class="table table-striped table-hover table-bordered text-center mb-4"> <!-- Tambahkan kelas table-bordered untuk mempertebal garis tabel -->
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Diskripsi</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $menu)
                <tr>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>
                        @if($menu->gambar)
                        <img src="{{ asset(Storage::url($menu->gambar)) }}" alt="" width="60" height="60" class="img-thumbnail">
                        @else
                        <p>tidak ada gambar</p>
                        @endif
                    </td>
                    <td>{{ $menu->diskripsi }}</td>
                    <td>{{ $menu->kategori }}</td>
                    <td>{{ $menu->status }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td>
                        <a href="{{ route('menu.edit', $menu->id_menu) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('menu.destroy', $menu->id_menu) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>