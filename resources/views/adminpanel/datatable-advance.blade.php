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
                   <h5>Order direction sequence control </h5><span>
                     At times you may wish to change the default ordering direction sequence for columns (some or all of them) to be 'descending' rather than DataTables' default
                     ascending. This can be done through the use of the <code class="option" title="DataTables initialisation option">columns.orderSequence:option</code> initialisation parameter. This parameter also allows you to limit the ordering to a single
                           direction, or you could add complex behaviour to the ordering interaction.</span>
                 </div>
                 <div class="card-body table-responsive">
                   <table class="display" id="example">
                     <thead>
                       <tr>
                         <th>Name</th>
                         <th>Position</th>
                         <th>Office</th>
                         <th>Age</th>
                         <th>Start date</th>
                         <th>Salary</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>Tiger Nixon</td>
                         <td>System Architect</td>
                         <td>Edinburgh</td>
                         <td>61</td>
                         <td>2011/04/25</td>
                         <td>$320,800</td>
                       </tr>
                       
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