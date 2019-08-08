@extends('layouts.app', ['title' => 'Database Barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Edit Barang</h1>

  {!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('item_name', 'Nama Item')}}
      {{Form::text('item_name', $item->item_name, ['class' => 'form-control', 'placeholder' => 'Nama'])}}
    </div>
    <div class="form-group">
      {{Form::label('desc', 'Deskripsi')}}
      {{Form::text('desc', $item->desc, ['class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
    </div>
    <div class="form-group">
      {{Form::label('price', 'Harga')}}
      {{Form::text('price', $item->price, ['class' => 'form-control', 'placeholder' => 'Harga'])}}
    </div>
    <div class="form-group">
      {{Form::label('stock', 'Jumlah')}}
      {{Form::text('stock', $item->stock, ['class' => 'form-control', 'placeholder' => 'Jumlah'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}

    <div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      <a href="{{url('/items/' . $item->id)}}" class="btn btn-primary float-right text-white">Back</a>
    </div>
  {!! Form::close() !!}
</main>
@endsection
