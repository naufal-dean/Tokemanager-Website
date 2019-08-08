@extends('layouts.app', ['title' => 'Coba list barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Barang</h1>
  @if (count($items) > 0)
    @foreach ($items as $item)
      <div class="card card-body bg-light">
        <h3>{{$item->item_name}}</h3>
        <small>{{$item->desc}}</small>
      </div>
    @endforeach
  @else
    <p>No items found</p>
  @endif
</main>
@endsection
