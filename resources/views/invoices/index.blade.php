@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">List Pendapatan</h1>

  @include('inc.dropdownkeuangan')
  @if (count($invoices) > 0)
    @foreach ($invoices as $invoice)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/invoices/' . $invoice->id)}}">Transaksi {{$invoice->id}}</a></h3>
        <p>Total Transaksi: Rp{{$invoice->total_transaction}}</p>
        <small>Waktu Transaksi: {{$invoice->created_at}}</small>
      </div>
    @endforeach
    {{$invoices->links()}}
  @else
    <div class="card card-body bg-light">
      <p>No invoices found</p>
    </div>
  @endif
</main>
@endsection
