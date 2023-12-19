## Gambar
![Screenshot (1252)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/2d984c4a-815c-4f3a-9c86-cea8d4e2dc5f)
![Screenshot (1253)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/66037479-0cb3-4e05-a74f-3924d54555f7)
![Screenshot (1254)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/11348258-cfe2-48cc-9a6a-38dd67fe05e8)
![Screenshot (1255)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/702158af-dc87-43f2-bd06-f07cf20dc962)
![Screenshot (1256)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/31085d2f-f993-4879-9295-12f4fcbbe8dc)
![Screenshot (1257)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/49b2c675-b989-4d14-8f9b-b41803bc6686)
![Screenshot (1258)](https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan/assets/72405614/49745b42-ac69-4094-9d05-38cce05a57d8)

## Prasyarat
Sebelum menggunakan projek ini, diperlukanya:
- composer
- php
- git

## Install
1. Unduh/Clone proyek ini
- git clone https://github.com/alimahmudi330/Aplikasi-Menu-Rumah-Makan.git
2. Lalu pindah ke direktori Aplikasi-Menu-Rumah-Makan
- cd Aplikasi-Menu-Rumah-Makan
3. Install komponen yang diperlukan menggunakan composer
- composer install
4. Copy file .env.example menjadi .env
- cp .env.example .env
5. Lalu generate APP_KEY
- php artisan key:generate
6. Lalu lakukan migrasi database dan query (isi database)
- php artisan migrate:fresh --seed
7. Setelah berhasil, jalankan aplikasi
- php artisan serve
8. Lalu buka browser 127.0.0.1:8000 untuk menggunakan aplikasi
