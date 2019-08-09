@extends('layouts.template', ['title' => 'Penjualan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Transaksi</h1>

  @include('inc.formheader')
  {{-- {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST']) !!} --}}
    <div id="form-box">
      @include('inc.form')
    </div>

    <p class="p-1 sublink"><a href="#" class="btn" id="addRowBtn">&oplus;   Tambah Barang</a></p>

    <div>
      {{Form::submit('&#x2714;  Submit', ['class' => 'btn btn-success float-right ml-2'])}}
      <a href="{{url('/items')}}" class="btn btn-danger float-right text-white">&#x2716;  Cancel</a>
    </div>
  {{-- {!! Form::close() !!} --}}
</main>

{{-- <script type="text/javascript">
  var addRowBtn = document.getElementById("addRowBtn");
  var formBox = document.getElementById("form-box");

  addRowBtn.addEventListener("click", function(){
    formBox.appendChild('a');
    alert('a');
  });
  // $(.addRow).click(function(){
  //   alert('aa');
  //   addRow();
  // });
  //
  // function addRow(){
  //   alert('aa');
  //   $('#form-box').append('aaa')
  // };
</script> --}}
@endsection
