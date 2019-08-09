@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">List Pengeluaran</h1>

  @include('inc.dropdownkeuangan')

  @if (count($outcomes) > 0)
    @foreach ($outcomes as $outcome)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/outcomes/' . $outcome->id)}}">{{$outcome->transaction}}</a></h3>
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
