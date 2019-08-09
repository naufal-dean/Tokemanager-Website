@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Saldo Keuangan</h1>

  @include('inc.dropdownkeuangan')
  @if ($finance)
    <div class="card card-body bg-light">
      <h3>Rp{{$finance->total}}</h3>
    </div>
  @else
    <div class="card card-body bg-light">
      <p>No data found</p>
    </div>
  @endif

  <div>
    <a href="{{url('/finances/create')}}" class="btn btn-primary float-right text-white mt-3">
      Update
    </a>
    <a href="{{url('/finances/history')}}" class="btn btn-info float-left text-white mt-3">
      Riwayat
    </a>
  </div>
</main>
@endsection
