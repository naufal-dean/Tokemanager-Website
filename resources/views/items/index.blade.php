@extends('layouts.app', ['title' => 'Database Barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Barang</h1>
  <p class="p-1 sublink"><a href="{{url('/items/create')}}">&oplus;   Tambah Barang</a></p>
  @if (count($items) >0)
  <table width="90%", align="center">
      <tr>
        <th>Kode</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga Satuan</th>
        <th>Jumlah Barang</th>
      </tr>

    @foreach ($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td><a href="{{url('/items/' . $item->id)}}">{{$item->item_name}}</a></td>
          <td>{{$item->desc}}</td>
          <td>{{$item->price}}</td>
          <td>{{$item->stock}}</td>
        </tr>
    @endforeach
  </table>

  @else
   <p>No items found</p>
  @endif
</main>
@endsection

