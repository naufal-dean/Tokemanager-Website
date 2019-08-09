@extends('layouts.template', ['title' => 'TOKEMA'])

@section('content')
<main role="main" class="container">
  <div class="overflow-auto">
    <h1>FITUR-FITUR TOKEMANAGER</h1>
    <h2>1. Penjualan</h2>
      <p>Tab <strong>Penjualan</strong> berfungsi untuk mencatat transaksi yang sedang dilakukan.</p>
    <h2>2. Keuangan</h3>
      <h3 style="font-size:20px"> a. Statistik</h3>
      <p>Tab <strong>Statistik Keuangan</strong> berfungsi melihat statistik keuangan.</p>
      <h3 style="font-size:20px"> b. Timeline</h3>
      <p>Tab <strong>Timeline Keuangan</strong> berfungsi melihat timeline penjualan tiap harinya.</p>
    <h2>3. Barang</h2>
    <h3 style="font-size:20px"> a. Statistik Barang</h3>
    <p>Tab <strong>Statistik Barang</strong> berfungsi melihat statistik barang yang terjual.</p>
    <h3 style="font-size:20px"> a. Database Barang</h3>
    <p>Tab <strong>Database Barang</strong> berfungsi melihat barang-barang yang tersedia.</p>
  </div>
</main>
@endsection

{{-- Affiliated: appPagesController, sidebar, pagesaboutTokema, web--}}