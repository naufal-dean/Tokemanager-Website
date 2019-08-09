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
7. Setelah set-up selesai, jalankan tokemanager di localhost

## Running the tests??

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Dibuat dengan

* [Laravel](https://laravel.com/) - The web framework used
* PHP
* HTML


## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Alexandra Angeline** - [alexandrangeline](https://github.com/alexandrangeline)
* **Syarifuddin Fakhri A. H.**- []()
* **Difa Habiba Rahman** - [difahrahman](https://github.com/difahrahman)
* **Ignatius David Partogi** - []()
* **Felicia Gillian Tekad Tuerah** - [gilliantuerah](https://github.com/gilliantuerah)
* **Naufal Dean Anugrah** - [naufal-dean](https://github.com/naufal-dean)
* **Daffa Pratama Putra** - [daffa1pratama](https://github.com/daffa1pratama)
* **Muhamad Hudan Widzamil** - [hudanwidzamil](https://github.com/hudanwidzamil)
* **Adrian Timotheus Salim** - []()
* **Hafshy Yazid Albisthami** - []()
* **Ricky Fernando** - [rickymen](https://github.com/rickymen)
* **Jones Napoleon A.** - [jonesnapoleon](https://github.com/jonesnapoleon)
* **Vincent Tanjaya** -
* **Rehan Adi Satrya** - [rehanadi30](https://github.com/rehanadi30)
* **Widad Istiqomah** - [widadistt](https://github.com/widadistt)
* **Hizbulloh Ash-Shidiqy** - [hizbashidiq](https://github.com/hizbashidiq)

Lihat juga list [kontributor](https://github.com/naufal-dean/Tugas-SPARTA-2-VS-10/contributors) yang berpartisipasi dalam proyek ini.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

