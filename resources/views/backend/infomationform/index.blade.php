@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Infomation Form Lists</h6>
      <a href="{{ route('infomationform.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
    
      @if(count($infomationforms)>0)
        <table class="table table-bordered" id="info-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>
                  Name (TH)</br>
                  Name (En)
               </th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Citizen Id</th>
              <th>Income </br> Baht</th>
              <th>Tex </br> Baht</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>No.</th>
              <th>
                  Name (TH)</br>
                  Name (En)
              </th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Citizen Id</th>
              <th>Income</th>
              <th>Tex</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $i = 1 ?>
           @foreach($infomationforms as $infomationform)   
          
               <tr>
                   <td>{{ $i }}</td>
                   <td>
                       {{$infomationform->first_name_th}} {{$infomationform->last_name_th}}</br>
                       {{$infomationform->first_name_en}} {{$infomationform->last_name_en}}</td>
                    <td>{{$infomationform->gender}}</td>
                    <td>{{$infomationform->email}}</td>
                    <td>{{$infomationform->phone}}</td>
                    <td>{{$infomationform->citizenid}}</td>
                    <td>{{$infomationform->income}}</td>
                    <td>{{$infomationform->tex}}</td>
                            
                   <td>
                    <a href="{{ route('infomationform.show',[$infomationform->id])}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('infomationform.edit',[$infomationform->id])}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                   <form method="POST" action="{{route('infomationform.destroy',[$infomationform->id])}}">
                     @csrf 
                     @method('delete')
                         <button class="btn btn-danger btn-sm dltBtn" data-id={{$infomationform->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                       </form>
                   </td>
               </tr>  
               <?php $i ++; ?>
           @endforeach
         </tbody>
        </table>
        <span style="float:right"></span>
        @else
          <h6 class="text-center">No Infomation Form found!!! </h6>
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

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
      .zoom {
        transition: transform .2s; /* Animation */
      }

      .zoom:hover {
        transform: scale(5);
      }
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
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
          })
      })
  </script>
@endpush