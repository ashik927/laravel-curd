@extends('adminlayout.adminmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <br><br><br><br><br><br><br>
            <div class="card p-3">
                
            
              <div class="form-group">
                <label for="name">name:</label>
                <h3>{{$product->name}}</h3>
              </div>
              <div class="form-group">
                <label for="slug">Price:</label>
                <p>{{$product->price}}</p>
              </div>
              <div class="form-group">
                <label for="slug">stock:</label>
                <p>{{$product->stock}}</p>
              </div>
              <div class="form-group">
                <label for="slug">available:</label>
                <p>{{$product->available}}</p>
              </div>
         
        </div>
        </div>
    </div>


    

</div>
@endsection