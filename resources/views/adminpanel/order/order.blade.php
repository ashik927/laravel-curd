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
                         <th>customer_id</th>
                         <th>order_code</th>
                         <th>total_cost</th>
                         <th>sub_total_cost</th>
                         <th>total_product</th>
                         <th>total_quantity</th>
                         <th>emergency_phone</th>
                         <th>status</th>
                         <th>payment</th>
                         <th>payment_cost</th>
                         <th>process</th>
                         <th>customer_note</th>
                         <th>shipping_cost</th>
                         <th>completed_at</th>
                         <th>transection_id</th>
                         <th>seen</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                      @foreach ($order as $or)
                       <tr>
                         <td>{{ $or -> status}}</td>
                         <td>{{ $or -> description}}</td>
                         <td>
                          <a href=" {{route('order.single', ['id' => $or->id] )}}"class="btn btn-info">View </a>

                           <form action="{{route('order.delete')}}" method="POST">
                              @csrf
                              <input type="hidden" value="{{$or->id}}" name="id">
                              <input type="submit" value="Delete" name="delete" class="btn btn-danger">
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