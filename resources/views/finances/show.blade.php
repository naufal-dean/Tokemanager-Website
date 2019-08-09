@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Detail Saldo</h1>

  <div class="card card-body bg-light">
    <dl class="row">
      <dt class="col-sm-3">Waktu</dt>
      <dd class="col-sm-9">{{$finance->created_at}}</dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-3">Saldo</dt>
      <dd class="col-sm-9">{{$finance->total}}</dd>
    </dl>
  </div>

  <div class="content-box-separator"></div>

  <div>
    {!!Form::open(['action' => ['FinancesController@destroy', $finance->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Hapus', ['class' => 'btn btn-danger mr-2'])}}
    {!!Form::close()!!}

    <a href="{{url('/finances/history')}}" class="btn btn-primary float-right text-white">Back</a>
  </div>
</main>
@endsection
