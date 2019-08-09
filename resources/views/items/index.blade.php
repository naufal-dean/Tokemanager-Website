@extends('layouts.template', ['title' => 'Database Barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Barang</h1>
  <p class="p-1 sublink"><a href="{{url('/items/create')}}">&oplus;   Tambah Barang</a></p>
  @if (count($items) > 0)
    @foreach ($items as $item)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/items/' . $item->id)}}">{{$item->item_name}}</a></h3>
      </div>
    @endforeach
    {{$items->links()}}
  @else
    <p>No items found</p>
  @endif
</main>
@endsection
