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
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container text-center">
            <!-- Menggunakan kelas text-center untuk membuat elemen berada di tengah -->
            <h1 class="mb-4">Tambah Menu</h1>
            <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_menu" class="form-label"> Nama Menu:</label>
                    <input type="text" class="form-control" name="nama_menu" id="nama_menu" required>
                </div>
                <div class="form-group">
                    <label for="gambar" class="form-label">Gambar :</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        <label class="custom-file-label" for="gambar">Pilih gambar</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="diskripsi" class="form-label">Diskripsi Product:</label>
                    <input type="text" class="form-control" name="diskripsi" id="diskripsi" required>
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-label">Kategori Product:</label>
                    <input type="text" class="form-control" name="kategori" id="kategori" required>
                </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status:</label>
                    <input type="text" class="form-control" name="status" id="status" required>
                </div>
                <div class="form-group">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="text" class="form-control" name="harga" id="harga" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Menu</button>
            </form>
        </div>
    </div>

</body>

</html>