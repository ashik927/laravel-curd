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
                         
                         <th>user_id</th>
                         <th>product_id</th>
                         <th>name</th>
                         <th>active</th>
                         <th>star</th>
                         <th>comment</th>
                         
                       </tr>
                     </thead>
                     <tbody>
                      {{-- @foreach ($category as $cat)
                       <tr>
                         <td>{{ $cat -> name}}</td>
                         <td>{{ $cat -> title}}</td>
                       </tr>
                       @endforeach --}}
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