# Pemrograman Website
> Handayogi Tambunan - 121140114
>
> Link Website: http://handayogi-121140114.infinityfreeapp.com/

## Bagian 1: Client-Side Programming
**1.1 Manipulasi DOM dengan JavaScript**
> Di halaman ini, pengguna diminta untuk mengisi formulir pendaftaran yang sederhana dan intuitif.
> Pengguna diminta untuk memasukkan informasi dasar seperti `username`, `email`, `password`, dan `confirm password` untuk memastikan keamanan akun.
> Selain itu, tersedia juga tautan cepat untuk menambahkan produk, memeriksa sesssion, dan mengelola cookie serta penyimpanan.

**1.2 Event Handling**
> Setiap label akan berwarna merah apabila terjadi kesalahan dalam pengisian form.

![image](https://github.com/user-attachments/assets/a4d19bd2-08d0-4302-acf6-0a7f911fa911)

## Bagian 2: Server-Side Programming
**2.1 Pengelolaan Data dengan PHP**
> Di halaman "Add Product", pengguna dapat menambahkan produk baru ke dalam sistem. Formulir yang sederhana meminta informasi penting seperti `kode produk`, `nama produk`, `kategori`, dan `harga`,
> memastikan semua detail yang diperlukan tersedia untuk pengelolaan yang efisien. Setelah mengisi form, pengguna hanya perlu mengklik tombol "Add Product" untuk menyimpan produk baru.
> Di bawah formulir, terdapat daftar produk yang sudah ada, lengkap dengan opsi untuk mengedit atau menghapus setiap item.

![image](https://github.com/user-attachments/assets/10325a0e-9d79-4645-8a83-f7e586a6b36a)

**2.2 Objek PHP Berbasis OOP**
> Terdapat file bernama `product.php` yang berisikan class `Product` yang digunakan untuk mengelola product dalam sebuah sistem. Class `Product` dirancang untuk memfasilitasi manajemen produk dalam
> sistem web. Dengan penggunaan metode statis untuk operasi Create, Read, Update, Delete (CRUD), kode ini mengelola data dan menjaga keamanan interaksi dengan database.

![image](https://github.com/user-attachments/assets/6dbf9734-1a71-4c51-8240-9ab1e955fc90)

## Bagian 3: Database Management
**3.1 Pembuatan Tabel Database**

![image](https://github.com/user-attachments/assets/91581cc5-f63b-4335-bf0f-83ecb753c157)

**3.2 Konfigurasi Koneksi Database**

![image](https://github.com/user-attachments/assets/ca96e96d-6765-49c5-a2b7-80fde63ef0e1)

**3.3 Manipulasi Data pada Database**

![image](https://github.com/user-attachments/assets/d75fda9f-0ae9-415d-be01-1a7743b91e19)

## Bagian 4: State Management
**4.1 State Management dengan Session**
> Kode dibawah secara keseluruhan bertujuan untuk memulasi sesi dan melacak jumlah berapa kali pengguna mengujungi sebuah website dalam sebuah link yang tersedia dari 2 halaman berbeda (`page1.php` dan `page2.php`).
> Dengan menggunakan sesi, informasi ini dapat disimpan dan dilihat atau diakses di seluruh sesi pengguna, memungkinkan developer untuk menganalisis perilaku pengguna di situs web.

![image](https://github.com/user-attachments/assets/1fa1a071-007f-4e93-9565-2b4ea17c7a58)

**4.2 Pengelolaan State dengan Cookie dan Browser Storage**
> Berikut merupakan tampilan Cookie dan Local Storage Example, yaitu fungsi untuk membuat, mendapatkan, dan menghapus cookie pada web. Terdapat juga fields untuk membuat, menyimpan, dan menghapus informasi secara lokal pada web.

![image](https://github.com/user-attachments/assets/5e6c5d53-eeee-461d-9b33-ac15abd2465d)

## Bagian 5: Hosting Aplikasi Web
**+ Langkah untuk meng-hosting aplikasi web.**
   - Daftar di [Infinity Free](https://www.infinityfree.com/)
   - Buat akun hosting baru dan pilih nama domain atau subdomain yang di inginkan.
   - Upload file aplikasi menggunakan File Manager yang disediakan InfinityFree untuk mengupload file aplikasi web ke server.
   - Setelah file di upload, akses phpMyAdmin dari InfinityFree untuk membuat database, atau mengimport database yang sudah ada.
   - Sesuaikan kembali konfigurasi koneksi untuk menghubungkan ke database yang baru menggunakan detail yang sesuai (host, username, password, dan nama database).
   - Akses aplikasi web melalui browser untuk memastikan berjalan dengan baik.
     
**+ Penyedia web yang cocok.**
   InfinityFree adalah pilihan yang cocok untuk aplikasi web saya, karena:
   - Gratis
   - Tanpa Iklan
   - Batasan bandwith yang cukup luas
   - Dukungan untuk PHP dan MySQL

**+ Memastikan keamanan aplikasi web.**
   - SSL Certificate: Pastikan menggunakan HTTPS dengan menginstal SSL untuk mengenkripsi data yang dikirim antara server dan klien.
   - Validasi Input: Lakukan validasi dan sanitasi pada semua input pengguna untuk mencegah serangan seperti SQL Injection dan XSS.
   - Pengaturan Permissions: Atur izin file dan folder dengan benar agar tidak memberikan akses yang tidak perlu ke pengguna.
   - Backup Data: Lakukan backup rutin untuk data dan file aplikasi agar dapat dipulihkan jika terjadi masalah.
   - Pembaruan Berkala: Pastikan semua perangkat lunak dan plugin yang digunakan selalu diperbarui untuk mengatasi kerentanan keamanan.

**+ Konfigurasi server untuk mendukung aplikasi web.**
   - PHP Version: Pastikan server menggunakan versi PHP yang sesuai dengan kebutuhan aplikasi Anda, disarankan untuk menggunakan versi terbaru yang stabil.
   - Database Configuration: Atur database MySQL dengan parameter yang sesuai untuk memaksimalkan kinerja, seperti pengaturan koneksi dan query.
   - Caching: Jika tersedia, aktifkan caching untuk meningkatkan kecepatan akses halaman.
   - Error Handling: Konfigurasi penanganan kesalahan untuk menampilkan pesan yang ramah pengguna dan tidak mengungkapkan informasi sensitif.
   - Monitoring: Gunakan alat monitoring untuk mengawasi kinerja dan kesehatan server, meskipun di layanan gratis mungkin terbatas.





























