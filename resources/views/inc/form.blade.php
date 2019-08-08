{!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST']) !!}
  <div class="transaction-form">
    <div class="form-group">
      {{Form::label('item_name', 'Nama Item')}}
      {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'Nama'])}}
    </div>
    <div class="form-group">
      {{Form::label('desc', 'Deskripsi')}}
      {{Form::text('desc', '', ['class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
    </div>
    <div class="form-group">
      {{Form::label('price', 'Harga')}}
      {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Harga'])}}
    </div>
    <div class="form-group">
      {{Form::label('stock', 'Jumlah')}}
      {{Form::text('stock', '', ['class' => 'form-control', 'placeholder' => 'Jumlah'])}}
    </div>
  </div>

  <div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    <a href="{{url('/items')}}" class="btn btn-primary float-right text-white">Back</a>
  </div>
{!! Form::close() !!}
