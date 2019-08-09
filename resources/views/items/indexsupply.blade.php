@extends('layouts.template', ['title' => 'Database Barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Suplai Barang</h1>
  @if (count($items) > 0)
    @foreach ($items as $item)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/suplai-barang/' . $item->id)}}">{{$item->item_name}}</a></h3>
      </div>
    @endforeach
    {{$items->links()}}
  @else
    <p>No items found</p>
  @endif
</main>
@endsection
