@extends('layouts.template', ['title' => 'Database Barang'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Update Saldo</h1>

  {!! Form::open(['action' => 'FinancesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('total', 'Saldo Baru')}}
      {{Form::text('total', '', ['class' => 'form-control', 'placeholder' => 'Saldo'])}}
    </div>

    <div>
      {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
      <a href="{{url('/finances')}}" class="btn btn-primary float-right text-white">Back</a>
    </div>
  {!! Form::close() !!}
</main>
@endsection
