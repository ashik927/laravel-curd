@extends('adminlayout.adminmaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <br><br><br><br><br><br><br>
            <div class="card p-3">
                
            <form method="post" action={{route('category.store')}} enctype="multipart/form-data">
                @csrf
                {{-- route koi ? --}}
              <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value="">
              </div>
              <div class="form-group">
                <label for="name">User Id:</label>
                <input type="text" class="form-control" name="user_id" value="">
              </div>
              <div class="form-group">
                <label for="name">Image:</label>
                <input type="file" class="form-control" name="image" value="">
              </div>
              <div class="form-group">
                <label for="slug">slug:</label>
                <input type="text" class="form-control" name="slug" value="">
              </div>
              <div class="form-group">
                <label for="slug">Description:</label>
                <textarea type="text" class="form-control" name="description" value=""></textarea>
              </div>
              <div class="form-group">
                <label for="slug">Tag:</label>
                <textarea type="text" class="form-control" name="tag" value=""></textarea>
              </div>
              <center>
                  	<button type="submit" class="btn btn-info">Insert</button>
              </center>
            </form>
        </div>
        </div>
    </div>


    

</div>
@endsection