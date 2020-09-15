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
                   <table class="display table table-striped" id="example">
                     <thead>
                       <tr class="table-primary">
                         <th>Name</th>
                         <th>image</th>
                         <th>description</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach ($category as $cat)
                       <tr>
                         <td>{{ $cat -> name}}</td>
                         <td>{{ substr($cat -> description, 0,15)}}</td>
                         <td class="font-pt font-18"><img width="40px;" src="{{URL::asset('admin/assets/images/category')}}/{{$cat->image}}" alt=""></td>
                         <td>
                            <form action="{{route('category.edit',['id'=> $cat->id] )}}" method="GET">
                            
                            <input type="hidden" value="{{$cat->id}}" name="id">
                            <input type="submit" value="Edit" name="edit" class="btn btn-success">
              
                            </form>
                             
                             <form action="{{route('category.delete')}}" method="POST">
                              @csrf
                              <input type="hidden" value="{{$cat->id}}" name="id">
                              <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                              </form>
                            
                             <a href=" {{route('category.single', ['id' => $cat->id] )}}"class="btn btn-info">View </a>
                         </td>
                       </tr>
                       @endforeach
                     </tbody>
                     <tfoot>
                       <tr>
                         <th>Name</th>
                         <th>Position</th>
                         <th>Office</th>
                         <th>Age</th>
                         <th>Start date</th>
                         <th>Salary</th>
                       </tr>
                     </tfoot>
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