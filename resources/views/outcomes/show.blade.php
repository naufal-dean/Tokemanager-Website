@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Detail Transaksi</h1>

  <h2>Transaksi {{$outcome->id}}</h2>
  <small>Waktu Transaksi: {{$outcome->created_at}}</small>

  <div class="card card-body bg-light">
    <dl class="row">
      <dt class="col-sm-3">Nama Item</dt>
      <dd class="col-sm-9">{{$outcome->item->item_name}}</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-3">Harga Satuan</dt>
      <dd class="col-sm-9">Rp{{$outcome->item->price}}</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-3">Jumlah</dt>
      <dd class="col-sm-9">{{$outcome->qty}}</dd>
    </dl>
  </div>

  <h4 class="mt-4 mb-4">Total: Rp{{$outcome->transaction}}</h4>

  <div>
    {!!Form::open(['action' => ['OutcomesController@destroy', $outcome->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Hapus', ['class' => 'btn btn-danger mr-2'])}}
    {!!Form::close()!!}

    {{-- <a href="{{url('/items/' . $item->id . '/edit')}}" class="btn btn-primary float-left text-white">Edit</a> --}}
    <a href="{{url('/outcomes')}}" class="btn btn-primary float-right text-white">Back</a>
  </div>

  <div class="content-box-separator"></div>
</main>
@endsection
