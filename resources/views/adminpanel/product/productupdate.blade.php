@extends('adminlayout.adminmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <br><br><br><br><br><br><br>
            <div class="card p-3">
                
            <form action="{{route('product.update') }}"
             method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}"/>
              <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
              </div>
              <div class="form-group">
                <label for="name">price:</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
              </div>
              <div class="form-group">
                <label for="name">Stock:</label>
                <input type="text" class="form-control" name="stock" value="{{$product->stock}}">
              </div>
              <div class="form-group">
                <label for="slug">Available:</label>
                <input type="text" class="form-control" name="available" value="{{$product->available}}">
              </div>
            
              <center>	<button type="submit" class="btn btn-info">update category</button>
              </center>
            </form>
        </div>
        </div>
    </div>


    

</div>
@endsection