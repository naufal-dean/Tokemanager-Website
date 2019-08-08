@extends('layouts.app', ['title' => 'Database Barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Detail Barang</h1>

  <div class="card card-body bg-light">
    <h1 class="mb-4">{{$item->item_name}}</h1>

    <dl class="row">
      <dt class="col-sm-3">Deskripsi</dt>
      <dd class="col-sm-9">{{$item->desc}}</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-3">Harga</dt>
      <dd class="col-sm-9">{{$item->price}}</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-3">Stok</dt>
      <dd class="col-sm-9">{{$item->stock}}</dd>
    </dl>
  </div>

  <div class="content-box-separator"></div>

  <a href="{{url('/items')}}" class="btn btn-primary float-right text-white">Back</a>
</main>
@endsection
