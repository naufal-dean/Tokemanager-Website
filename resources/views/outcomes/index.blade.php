@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">List Pengeluaran</h1>

  @include('inc.dropdownkeuangan')

  @if (count($outcomes) > 0)
    @foreach ($outcomes as $outcome)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/outcomes/' . $outcome->id)}}">Transaksi {{$outcome->id}}</a></h3>
        <p>Total Transaksi: Rp{{$outcome->transaction}}</p>
        <small>Waktu Transaksi: {{$outcome->created_at}}</small>
      </div>
    @endforeach
    {{$outcomes->links()}}
  @else
    <div class="card card-body bg-light">
      <p>No outcomes found</p>
    </div>
  @endif
</main>
@endsection
