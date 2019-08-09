@extends('layouts.template', ['title' => 'Penjualan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Transaksi</h1>

  {{-- @include('inc.formheader') --}}

  {{-- Start --}}
  <div class="form-group">
   <form name="add_name" id="add_name">
    <div class="alert alert-danger print-error-msg" style="display:none">
      <ul></ul>
    </div>

    <div class="alert alert-success print-success-msg" style="display:none">
      <ul></ul>
    </div>

    <div class="table-responsive">
      <table class="table table-striped" id="dynamic_field">
        <tr>
          <td>Kode</td>
          <td>Nama Item</td>
          <td>Harga Satuan</td>
          <td>Jumlah Barang</td>
          <td>Subtotal</td>
          <td></td>
        </tr>
        <tr>
          <td><input type="text" name="name[]" placeholder="Kode" class="form-control name_list" /></td>
          <td><input type="text" name="name[]" placeholder="Nama" class="form-control name_list" /></td>
          <td><input type="text" name="name[]" placeholder="Harga" class="form-control name_list" /></td>
          <td><input type="text" name="name[]" placeholder="Jumlah" class="form-control name_list" /></td>
          <td><input type="text" name="name[]" placeholder="Subtotal" class="form-control name_list" /></td>
        </tr>
      </table>
      {{-- <input type="button" name="submit" id="submit" class="btn btn-success" value="Submit" /> --}}
    </div>
   </form>
  </div>
  {{-- End --}}

  <p class="p-1 sublink"><a href="#" class="btn" id="add">&oplus;   Tambah Barang</a></p>

  <div>
    <input type="button" name="submit" id="submit" class="btn btn-success float-right ml-3" value="&#x2714;  Submit" />
    <a href="{{url('/items')}}" class="btn btn-danger float-right text-white">&#x2716;  Cancel</a>
  </div>
</main>
@endsection
