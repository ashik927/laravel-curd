@extends('adminlayout.adminmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <br><br><br><br><br><br><br>
            <div class="card p-3">
                
            
              <div class="form-group">
                <label for="name">name:</label>
                <h1>{{$category->name}}</h1>
              </div>
              <div class="form-group">
                <label for="slug">slug:</label>
                <p>{{$category->title}}</p>
              </div>
         
        </div>
        </div>
    </div>


    

</div>
@endsection