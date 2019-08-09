@extends('layouts.template', ['title' => 'Timeline Keuangan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Riwayat Saldo</h1>

  @include('inc.dropdownkeuangan')
  @if (count($finances) > 0)
    @foreach ($finances as $finance)
      <div class="card card-body bg-light">
        <h3><a href="{{url('/finances/' . $finance->id)}}">Waktu: {{$finance->created_at}}</a></h3>
        <h4>Rp{{$finance->total}}</h4>
      </div>
    @endforeach
    {{$finances->links()}}
  @else
    <div class="card card-body bg-light">
      <p>No data found</p>
    </div>
  @endif

  <a href="{{url('/finances')}}" class="btn btn-info float-left text-white mt-3">
    Saat Ini
  </a>
</main>
@endsection
