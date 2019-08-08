@extends('layouts.app', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">List Pendapatan</h1>

  @include('inc.dropdownkeuangan')

  @if (count($incomes) > 0)
    @foreach ($incomes as $income)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/incomes/' . $income->id)}}">{{$income->transaction}}</a></h3>
      </div>
    @endforeach
    {{$incomes->links()}}
  @else
    <div class="card card-body bg-light">
      <p>No incomes found</p>
    </div>
  @endif
</main>
@endsection
