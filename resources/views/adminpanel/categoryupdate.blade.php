@extends('adminlayout.adminmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <br><br><br><br><br><br><br>
            <div class="card p-3">
                
            <form action="{{route('category.update') }}"
             method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
              <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
              </div>
              <div class="form-group">
                <label for="name">User_id:</label>
                <input type="text" class="form-control" name="user_id" value="{{$category->user_id}}">
              </div>
              
              <div class="form-group">
                <label for="name">Image:</label>
                <img width="80px;" src="{{URL::asset('admin/assets/images/category')}}/{{$category->image}}" alt="">

                <input type="file" class="form-control" name="image" >
              </div>
              <div class="form-group">
                <label for="slug">slug:</label>
                <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
              </div>
              <div class="form-group">
                <label for="slug">Description:</label>
                <input type="text" class="form-control" name="description" value="{{$category->description}}">
              </div>
              <div class="form-group">
                <label for="slug">Tag:</label>
                <input type="text" class="form-control" name="tag" value="{{$category->tag}}">
              </div>
              <center>	<button type="submit" class="btn btn-info">update category</button>
              </center>
            </form>
        </div>
        </div>
    </div>


    

</div>
@endsection