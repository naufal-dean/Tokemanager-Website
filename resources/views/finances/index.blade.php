@extends('layouts.app', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Saldo Keuangan</h1>

  @include('inc.dropdownkeuangan')
  {{-- <p>{{$finance->total}}</p> --}}
  @if ($finance)
    <div class="card card-body bg-light">
      <h3>{{$finance->total}}</h3>
    </div>
  @else
    <div class="card card-body bg-light">
      <p>No data found</p>
    </div>
  @endif
</main>
@endsection
