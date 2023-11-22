<!-- resources/views/customer/menu.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Tambahkan link ke CSS atau Bootstrap jika diperlukan -->
    <title>Menu Restoran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Tambahkan styles khusus di sini jika diperlukan */
        body {
            padding: 20px;
            background-color: #f8f9fa;
            /* Warna latar belakang untuk tampilan yang lebih baik */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
            /* Warna judul yang sesuai dengan warna Bootstrap */
        }

        .menu-item {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            /* Warna latar belakang untuk setiap item menu */
            border-radius: 8px;
            /* Sudut bulat untuk tampilan yang lebih halus */
            text-align: center;
            /* Teks diatur ke tengah */
        }

        .menu-item img {
            width: 130px;
            /* Lebar gambar 70px */
            height: 100px;
            /* Ketinggian gambar 70px */
            object-fit: cover;
            /* Pastikan gambar tetap proporsional dan terpotong jika perlu */
            margin-bottom: 10px;
            border-radius: 6px;
            /* Sudut bulat untuk gambar */
            background-color: #e9ecef;
            /* Warna latar belakang untuk gambar */
            display: block;
            /* Agar gambar menjadi pusat dalam kotak */
            margin: 0 auto;
            /* Agar gambar menjadi pusat dalam kotak */
        }

        hr {
            border: 1px solid #ddd;
            /* Warna garis pemisah */
            margin: 15px 0;
            /* Jarak antara garis dan elemen di sekitarnya */
        }

        form {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            /* Warna tombol sesuai dengan warna Bootstrap */
            border-color: #007bff;
            /* Warna border tombol sesuai dengan warna tombol */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Warna tombol hover sesuai dengan warna Bootstrap */
            border-color: #0056b3;
            /* Warna border tombol hover sesuai dengan warna tombol hover */
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Menu Restoran</h1>

        <div class="row">
            @foreach($menu as $item)
            <div class="col-md-4">
                <div class="menu-item">
                    <img src="{{ asset(Storage::url($item->gambar)) }}" alt="{{ $item->nama_menu }}" class="img-fluid">
                    <hr>
                    <h3>{{ $item->nama_menu }}</h3>
                    <p>{{ $item->diskripsi }}</p>
                    <p>Kategori: {{ $item->kategori }}</p>
                    <p>Status: {{ $item->status }}</p>
                    <p>Harga: {{ $item->harga }}</p>
                    <form action="{{ route('customer.cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="menu_id" value="{{ $item->id_menu }}">
                        <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</body>

</html>