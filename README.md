# Pertanyaan

Ini adalah aplikasi sederhana untuk membuat pertanyaan dan menampilkan daftar pertanyaan.

## Fitur

- Membuat pertanyaan baru dengan judul, isi, opsi jawaban, dan jawaban benar.
- Melakukan perubahan pertanyaan berdasarkan pertanyaan yang diseleksi.
- Menampilkan daftar pertanyaan yang telah dibuat.

## Instalasi

1. Pastikan Anda memiliki PHP dan Laravel yang terinstal di mesin Anda.
2. Clone repositori ini ke direktori lokal Anda.
3. Buka terminal dan arahkan ke direktori proyek.
4. Jalankan perintah `composer install` untuk menginstal dependensi PHP.
5. Salin file `.env.example` ke `.env` dan sesuaikan pengaturan database.
6. Jalankan perintah `php artisan key:generate` untuk menghasilkan kunci aplikasi.
7. Jalankan perintah `php artisan migrate` untuk menjalankan migrasi database.
8. Jalankan perintah `php artisan serve` untuk menjalankan server lokal.

## Penggunaan

1. Buka aplikasi di browser dengan mengunjungi `http://localhost:8000` (sesuaikan dengan port yang digunakan).
2. Pada halaman utama, Anda dapat membuat pertanyaan baru dengan mengisi formulir yang tersedia.
3. Setelah mengisi semua detail pertanyaan, klik tombol "Buat Pertanyaan" untuk menyimpannya.
4. Pertanyaan baru akan ditambahkan ke daftar pertanyaan di bawah formulir.
5. Anda dapat melihat judul, isi, opsi jawaban, dan jawaban benar dari setiap pertanyaan.

## Kontribusi

Kontribusi terbuka untuk perbaikan atau peningkatan fitur sangat diterima. Jika Anda ingin berkontribusi, silakan buat _pull request_ dengan perubahan yang diusulkan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).