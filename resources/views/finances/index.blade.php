@extends('layouts.app', ['title' => 'Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Keuangan</h1>
  @if (count($finances) > 0)
    @foreach ($finances as $finance)
      <p>{{$finance->total}}</p>
    @endforeach
  @else
    <p>No Data</p>
  @endif
</main>
@endsection
