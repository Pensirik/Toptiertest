@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Logs</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
    
      @if(count($logs)>0)
        <table class="table table-bordered" id="info-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Table</th>
              <th>Action</th>
              <th>IP</th>
              <th>Detail</th>
              <th>Date</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Table</th>
              <th>Action</th>
              <th>IP</th>
              <th>Detail</th>
              <th>Date</th>
            </tr>
          </tfoot>
          <tbody>
        <?php $i=1; ?>
           @foreach($logs as $log)   
          
               <tr>
               <td>{{ $i }}</td>
               <td>{{ $log->table }}</td>
               <td>{{ $log->action }}</td>
               <td>{{ $log->ip }}</td>
               <td>{{ $log->detail }}</td>
               <td>{{ $log->updated_at->format('d/m/Y H:i:s') }}</td>
               </tr>  
               <?php $i++; ?>
           @endforeach
         
         </tbody>
        </table>
        
        <span style="float:right"></span>
        @else
          <h6 class="text-center">No Log found!!! </h6>
        @endif
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
    
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>
      
      $('#info-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[]
                }
            ]
        } ); 
  </script>

@endpush