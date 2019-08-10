![logo](https://raw.githubusercontent.com/naufal-dean/Tugas-SPARTA-2-VS-10/master/public/images/logo.png)
# Tokemanager

Tokemanager adalah sebuah software pengelolaan toko berbasis web. Tokemanager dirancang untuk memudahkan pemilik toko dalam menjalankan usahanya. Dengan Tokomanager, tidak perlu lagi menghabiskan waktu untuk menghitung stok secara manual dan bisa meningkatkan kualitas laba yang diperoleh. Tokemanager memiliki beberapa fitur yang akan membantu anda dalam pengunaanya mulai dari fitur penjualan, data stok barang, dan timeline keuangan.

## Getting Started

Ikuti instruksi berikut untuk menjalankan, mengunduh, atau menjalankan testing project Tokemanager ini.

### Prasyarat

Sebelum mulai menggunakan Tokemanager, pastikan pada komputer Anda telah terpasang:

1. [xampp](https://www.apachefriends.org/index.html),
2. [node.js](https://nodejs.org/en/), dan
3. [composer](https://getcomposer.org/download/).

Klik masing-masing tautan di atas dan ikuti instruksi untuk pemasangan yang sesuai dengan sistem operasi di komputer Anda.

### Mengunduh dan Set-Up Tokemanager

Sebelumnya, pastikan bahwa pada xampp control panel Anda, module Apache dan MySQL sudah berjalan (start).
1. Unduh file zip Tokemanager atau clone melalui git menggunakan command berikut. Simpan file ke dalam direktori xampp\htdocs.

```
...\xampp\htdocs> git clone https://github.com/naufal-dean/Tugas-SPARTA-2-VS-10.git
```

2. Buka terminal/command prompt dan mulai (cd) pada project root directory. Contoh seperti di bawah ini, jika folder project bernama Tugas-SPARTA-2-VS-10.

```
...\xampp\htdocs>cd Tugas-SPARTA-2-VS-10
```

3. Jalankan composer install, npm install, dan php artisan key:generate sebagai berikut.

```
...\xampp\htdocs\Tugas-SPARTA-2-VS-10>composer install
...\xampp\htdocs\Tugas-SPARTA-2-VS-10>npm install
...\xampp\htdocs\Tugas-SPARTA-2-VS-10>php artisan key:generate
```

4. Buka local mysql admin panel melalui browser dengan mengetik "localhost/phpmyadmin/"
5. Buat tabel database baru bernama "tokemanager"
6. Dengan terminal/command prompt sebelumnya, lakukan migrate dengan mengetik php artisan migrate.

```
...\xampp\htdocs\Tugas-SPARTA-2-VS-10>php artisan migrate
```
7. Setelah set-up selesai, jalankan tokemanager di "localhost/(namaFolder)/public/penjualan" melalui browser.

```
Contoh: localhost/Tugas-SPARTA-2-VS-10/public/penjualan
```

## Pengujian Tokemanager
Tidak ada pengujian otomatis untuk software ini. Fitur-fitur Tokemanager dapat diuji terlebih dahulu secara manual melalui tampilan Tokemanager dalam web. Pengujian dapat dilakukan dengan keadaan database dalam "localhost/phpmyadmin/" kosong.

Mula-mula, isi database menggunakan fitur tambah barang pada tab database barang dalam software. Setelah barang dapat ditambah, fitur lainnya dapat digunakan dengan database tersebut. Setelah pengujian, Anda dapat menggunakan database yang lebih besar untuk toko.

## Deployment

Saat ini, Tokemanager dikhususkan untuk kebutuhan pihak Tokema di ITB, yang bergerak dalam usaha jual-beli barang keperluan mahasiswa.

## Dibuat dengan

* [Laravel](https://laravel.com/) - The web framework used
* PHP
* HTML
* mySQL

## Contributing

Pengembangan proyek Tokemanager secara langsung dalam code sementara masih bersifat tertutup. Saran dan kritik pengembangan dapat disampaikan melalui kontributor pada [project](https://github.com/naufal-dean/Tugas-SPARTA-2-VS-10/).

## Versioning

Versi project yang telah dirilis dapat dilihat [di sini](https://github.com/naufal-dean/Tugas-SPARTA-2-VS-10/tags). 

## Authors

* **Alexandra Angeline** - [alexandrangeline](https://github.com/alexandrangeline)
* **Syarifuddin Fakhri A. H.**
* **Difa Habiba Rahman** - [difahrahman](https://github.com/difahrahman)
* **Ignatius David Partogi**
* **Felicia Gillian Tekad Tuerah** - [gilliantuerah](https://github.com/gilliantuerah)
* **Naufal Dean Anugrah** - [naufal-dean](https://github.com/naufal-dean)
* **Daffa Pratama Putra** - [daffa1pratama](https://github.com/daffa1pratama)
* **Muhamad Hudan Widzamil** - [hudanwidzamil](https://github.com/hudanwidzamil)
* **Adrian Timotheus Salim**
* **Hafshy Yazid Albisthami**
* **Ricky Fernando** - [rickymen](https://github.com/rickymen)
* **Jones Napoleon A.** - [jonesnapoleon](https://github.com/jonesnapoleon)
* **Vincent Tanjaya**
* **Rehan Adi Satrya** - [rehanadi30](https://github.com/rehanadi30)
* **Widad Istiqomah** - [widadistt](https://github.com/widadistt)
* **Hizbulloh Ash-Shidiqy** - [hizbashidiq](https://github.com/hizbashidiq)

Lihat juga list [kontributor](https://github.com/naufal-dean/Tugas-SPARTA-2-VS-10/contributors) yang berpartisipasi dalam proyek ini.

## License

Untuk detail lebih lanjut, dapat dilihat di [License.md](license.md).

## Acknowledgments

* Terima kasih pada pihak Tokema dari Kokesma ITB atas kerjasama dalam pembuatan software ini.

