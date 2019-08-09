@extends('layouts.template', ['title' => 'Penjualan'])

@section('content')
<main role="main" class="container">
  <h1 class="mt-5">Transaksi</h1>

  {{-- Form Start --}}
  <div class="form-group">
    <form name="add_name" id="add_name" method="POST" action="{{url('/incomes')}}">
      @csrf
      <div class="table-responsive">
        <table class="table table-striped" id="dynamic_field">
          <tr>
             <td>Kode</td>
             <td>Nama Item</td>
             <td>Harga Satuan</td>
             <td>Jumlah Barang</td>
             <td>Subtotal</td>
             <td></td>
             <td></td>
           </tr>
          <tr>
            <td><input type="text" name="item_id[]" placeholder="Kode" class="form-control name_list" /></td>
            <td><input type="text" name="item_name[]" placeholder="Nama" class="form-control name_list" /></td>
            <td><input type="text" name="price[]" placeholder="Harga" class="form-control name_list" /></td>
            <td><input type="text" name="qty[]" placeholder="Jumlah" class="form-control name_list" /></td>
            <td><input type="text" name="transaction[]" placeholder="Subtotal" class="form-control name_list" /></td>
            <td><button class="d-none submit-form"></button></td>
          </tr>
        </table>
        <p class="p-1 sublink"><a href="#" class="btn" id="add">&oplus;   Tambah Barang</a></p>
        <div>
          <input type="button" name="submit" id="submit" class="btn btn-success float-right ml-3" value="&#x2714;  Submit" />
          <a href="{{url('/penjualan')}}" class="btn btn-danger float-right text-white">&#x2716;  Cancel</a>
        </div>
      </div>
    </form>
  </div>
  {{-- Form End --}}
</main>
@endsection
