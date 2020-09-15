@extends('adminlayout.adminmaster')
@section('content')
<div class="page-wrapper compact-wrapper" id="pageWrapper">
     <!-- Page Header Start-->
     
     <!-- Page Header Ends                              -->
     <!-- Page Body Start-->
     <div class="page-body-wrapper sidebar-icon">
       <!-- Page Sidebar Start-->
       
       <!-- Page Sidebar Ends-->
       <div class="page-body">
        
         <!-- Container-fluid starts-->
         <div class="container-fluid">
           <div class="row">
             
             <!-- DOM / jQuery  Ends-->
             <!-- DataTables events  Starts-->
            
             <!-- DataTables events  Ends-->
             <!-- Column rendering  Starts-->
             
             <!-- Custom toolbar elements Ends-->
             <!-- Order direction sequence control Starts-->
             <div class="col-sm-12">
               <div class="card">
                 <div class="card-header">
                   {{-- If nedd to write --}}
                 <div class="card-body table-responsive">
                   <table class="display" id="example">
                     <thead>
                       <tr>
                         <th>code</th>
                         <th>user_id</th>
                         <th>view</th>
                         <th>rating</th>
                         <th>name</th>
                         <th>slug</th>
                         <th>image</th>
                         <th>price</th>
                         <th>stock</th>
                         <th>description</th>
                         <th>attributes</th>
                         <th>discount</th>
                         <th>shipping_cost</th>
                         <th>active</th>
                         <th>available</th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach ($product as $pro)
                       <tr>
                         <td>{{ $pro -> name}}</td>
                         <td>{{ $pro -> price}}</td>
                         <td>{{ $pro -> stock}}</td>
                         <td>{{ $pro -> available}}</td>
                        <td>
                          <a href=" {{route('product.single', ['id' => $pro->id] )}}"class="btn btn-info">View </a>
                          <form action="{{route('product.delete')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$pro->id}}" name="id">
                            <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                          </form>
                          <form action="{{route('product.edit',['id'=> $pro->id] )}}" method="GET">
                            <br>
                            <input type="hidden" value="{{$pro->id}}" name="id">
                            <input type="submit" value="Edit" name="edit" class="btn btn-success">
              
                            </form>
                        </td>
                       </tr>
                       @endforeach
                     </tbody>
                     
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- Container-fluid Ends-->
       </div>
       <!-- footer start-->
    
     </div>
   </div>
 {{-- copy paste pluhin --}}

@endsection