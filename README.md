# P4-SPK-RPL
## P4-SPK-RPL
Repository untuk menyimpan dokumentasi dan source code aplikasi kasir untuk keperluan uji
kompetensi keahilan

## SaleMate
SaleMate adalah aplikasi kasir berbasis web dengan framework Laravel versi 9, memiliki fitur utama yaitu login, monitoring produk, monitoring user, dan transaksi

## Panduan Penggunaan
### Admin
	
1.	Login dengan email "admin@gmail.com" dan password "123". Ketika berhasil login di halaman admin muncul tampilan dashboard. 
2.	Selanjutnya, klik sidebar untuk mencoba fitur manajemen user. Di fitur ini kita bisa melakukan menambah, mengedit dan menghapus data user.
3.	Untuk menambahkan manajemen user klik tombol tambah dibagian atas. Setelah itu inputkan nama lengkap, email, password, konfirmasi password, role, dan simpan.
4.	Di bagian action terdapat 2 tombol yaitu edit dan hapus. Jika Anda ingin mengedit user klik tombol yang berwarna biru, dan jika Anda ingin menghapus data usernya klik tombol yang berwarna merah.
5.	Ketika Anda ingin mengubah user klik tombol edit. Kemudian ubahlah data yang ingin Anda ubah lalu klik tombol simpan.
6.	Selanjutnya, kita klik sidebar untuk mencoba fitur manajemen produk. Di fitur ini kita bisa melakukan tambah, edit, dan hapus data produk. 
7.	Untuk menambahkan manajemen produk klik tombol tambah di bagian atas. Lalu, inputkan nama produk, kategori produk, harga produk, stok produk, dan gambar produk. Kemudian klik tombol simpan.
8.	Di bagian aksi pada gambar diatas terdapat 2 tombol yaitu edit dan hapus. Jika Anda ingin mengedit klik tombol berwarna biru dan jika Anda ingin menghapus klik tombol berwarna merah.
9.	Kemudian ubahlah jika ada data yang ingin Anda ubah. Lalu, klik tombol simpan.
10.	Selanjutnya, kita klik sidebar untuk mencoba fitur manajemen kategori. Di fitur ini kita bisa melakukan tambah, edit, dan hapus data produk. 
11.	Untuk menambahkan manajemen kategori klik tombol tambah di bagian atas. Lalu inputkan nama kategori (seperti makanan dan minuman, dll).
### Petugas
1.	Login dengan email "petugas@gmail.com" dan password "123". Di halaman petugas ini terdapat 5 fitur yaitu produk, kategori, transaksi, pelanggan, dan laporan.
2.	Selanjutnya, kita klik sidebar untuk mencoba fitur manajemen produk. Di fitur ini kita bisa melakukan tambah, edit, dan hapus data produk. 
3.	Untuk menambahkan manajemen produk klik tombol tambah di bagian atas. Inputkan nama produk, kategori produk, harga produk, stok produk, dan gambar produk. Kemudian klik tombol simpan.
4.	Di bagian aksi pada gambar diatas terdapat 2 tombol yaitu edit dan hapus. Jika Anda ingin mengedit klik tombol berwarna biru dan jika Anda ingin menghapus klik tombol berwarna merah.
5.	Klik tombol edit di bagian aksi. Kemudian ubahlah jika ada data yang ingin Anda ubah. Lalu, klik tombol simpan.
6.	Selanjutnya, kita klik sidebar untuk mencoba fitur manajemen kategori. Di fitur ini kita bisa melakukan tambah, edit, dan hapus data produk. 
7.	Untuk menambahkan manajemen kategori klik tombol tambah di bagian atas. Lalu inputkan nama kategori (seperti makanan dan minuman, dll)
8.	Selanjutnya, kita klik sidebar untuk mencoba fitur membuat transaksi. Di dalam fitur transaksi ini hanya untuk bisa untuk menambah data transaksi.
9.	Klik tambah. Select Pelanggan hanyalah opsional. Jika kita ingin memasukkan produk ke keranjang (tabel di bawah tombol tambah) kita harus memilih produk dan menginput kuantitas terlebih dahulu. 
10.	Kemudian setelah produk yang akan dibeli selesai dimasukkan ke keranjang, klik tombol bayar. 
11.	Setelah kita klik tombol bayar, maka muncul tampilan modal pembayaran. Untuk mencetak struk belanja kita inputkan tunai yang dibayarkan. Setelah itu, klik tombol bayar.
12.	Setelah selesai klik tombol bayar, maka akan men-generate pdf struk dan kembali ke halaman riwayat transaksi dan transaksi selesai.

### Laporan Penjualan
Laporan penjualan bisa dilakukan oleh admin ataupun petugas, untuk membuat laporan klik “Laporan” pada sidebar. 
Untuk mencetak laporannya, klik tombol “Cetak laporan”. Aksi tersebut akan men-generate pdf laporan transaksi.
