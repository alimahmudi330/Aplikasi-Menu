<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS tambahan untuk mengatur tampilan form */
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
        }

        /* Menyembunyikan input type="file yang biasanya tidak dapat diubah tampilannya */
        input[type="file"] {
            display: none;
        }

        .custom-file-label::after {
            content: "Pilih Gambar";
        }

        .form-title {
            text-align: center;
        }

        .form-button {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h1 class="form-title">Edit Menu</h1>
            <form method="POST" action="{{ route('menu.update', $menu->id_menu) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_menu" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama_menu" id="nama_menu" value="{{ $menu->nama_menu }}" required>
                </div>
                <div class="form-group">
                    <label for="gambar" class="form-label">Upload Gambar:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        <label class="custom-file-label" for="gambar">Pilih gambar</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="diskripsi" class="form-label">Diskripsi:</label>
                    <input type="text" class="form-control" name="diskripsi" id="diskripsi" value="{{ $menu->diskripsi }}" required>
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-label">Kategori:</label>
                    <input type="text" class="form-control" name="kategori" id="kategori" value="{{ $menu->kategori }}" required>
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status:</label>
                    <input type="text" class="form-control" name="status" id="status" value="{{ $menu->status }}" required>
                </div>
                <div class="form-group">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="text" class="form-control" name="harga" id="harga" value="{{ $menu->harga }}" required>
                </div>
                <button type="submit" class="btn btn-primary form-button">Simpan Perubahan</button>
            </form>
        </div>
    </div>

</body>

</html>