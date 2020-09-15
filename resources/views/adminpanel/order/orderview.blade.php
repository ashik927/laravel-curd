@extends('adminlayout.adminmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <br><br><br><br><br><br><br>
            <div class="card p-3">
                
            
              <div class="form-group">
                <label for="name">Status:</label>
                <h3>{{$order->status}}</h3>
              </div>
              <div class="form-group">
                <label for="slug">description:</label>
                <p>{{$order->description}}</p>
              </div>
         
        </div>
        </div>
    </div>


    

</div>
@endsection