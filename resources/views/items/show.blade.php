@extends('layouts.app', ['title' => 'Coba list barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">{{$item->item_name}}</h1>
  <small>{{$item->desc}}</small>
</main>
@endsection
