<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Customize additional styles here */
        body {
            padding: 20px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            margin-top: 20px;
            /* Adjust the top margin as needed */
        }

        .mb-3 {
            margin-bottom: 20px;
            /* Adjust the bottom margin as needed */
        }

        /* Additional style to set dimensions for the images */
        .img-thumbnail {
            width: 80px;
            /* Set width to 80px */
            height: 50px;
            /* Set height to 80px */
            object-fit: cover;
            /* Maintain aspect ratio and cover container */
        }
    </style>
</head>

<body>

    <header>
        <h1>Daftar Menu Mie Goceng</h1>
    </header>

    <div class="container">
        <a href="menu/create" class="btn btn-primary mb-3">Tambah Menu</a>

        <table class="table table-striped table-hover table-bordered text-center mb-4">
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
                <!-- Your existing data loop -->
                <!-- Replace with your actual loop data -->
                @foreach($menu as $menu)
                <tr>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>
                        @if($menu->gambar)
                        <img src="{{ asset(Storage::url($menu->gambar)) }}" alt="" class="img-thumbnail">
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


    <footer>
        <p>---Mie Goceng Selalu Dihati---</p>
    </footer>

</body>

</html>