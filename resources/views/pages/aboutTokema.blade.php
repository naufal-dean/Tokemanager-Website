@extends('layouts.template', ['title' => 'TOKEMA'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5 mb-5">Tentang TOKEMANAGER</h1>

  <div class="overflow-auto jumbotron">
    <h2>1. Penjualan</h2>
      <div class="ml-4">
        <p class="mb-0">Tab <strong>Penjualan</strong> berfungsi untuk mencatat transaksi yang sedang dilakukan.</p>
        <small>Catatan: Perlu diimplementasikan fitur autofill, sehingga tidak perlu mengisi harga secara manual untuk mencegah kesalahan.</small>
      </div>

    <h2 class="mt-3">2. Keuangan</h3>
      <div class="ml-4">
        <h3 style="font-size:20px"> a. Statistik</h3>
        <div class="ml-3">
          <p class="mb-0">Tab <strong>Statistik Keuangan</strong> berfungsi melihat statistik keuangan.</p>
          <small>Catatan: Belum diimplementasikan.</small>
        </div>

        <h3 style="font-size:20px"> b. Timeline</h3>
        <div class="ml-3">
          <p>Tab <strong>Timeline Keuangan</strong> berfungsi melihat timeline penjualan tiap harinya.</p>
        </div>
      </div>

    <h2>3. Barang</h2>
      <div class="ml-4">
        <h3 style="font-size:20px"> a. Statistik Barang</h3>
        <div class="ml-3">
          <p class="mb-0">Tab <strong>Statistik Barang</strong> berfungsi melihat statistik barang yang terjual.</p>
          <small>Catatan: Belum diimplementasikan.</small>
        </div>

        <h3 style="font-size:20px"> a. Database Barang</h3>
        <div class="ml-3">
          <p>Tab <strong>Database Barang</strong> berfungsi melihat barang-barang yang tersedia.</p>
        </div>
      </div>
  </div>
</main>
@endsection

{{-- Affiliated: appPagesController, sidebar, pagesaboutTokema, web--}}
