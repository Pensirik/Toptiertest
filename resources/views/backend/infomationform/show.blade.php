@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Show Infomationform</h5>
    <div class="card-body">
    <div class="form-group">
                <label for="fnameth" class="col-form-label">Name (Th) :  {{ $infomationform->first_name_th }} {{ $infomationform->last_name_th }}</label>
     </div>
     
        <div class="form-group">
         
                <label for="fnameth" class="col-form-label"> <strong> Name (Th) : </strong> {{ $infomationform->first_name_th }} {{ $infomationform->last_name_th }}</label>
         </div>
         <div class="form-group">
                <label for="fnameth" class="col-form-label"><strong> Name (En) : </strong>  {{ $infomationform->first_name_en }} {{ $infomationform->last_name_en }}</label>
          </div>
          <div class="form-group">
                <label for="fnameth" class="col-form-label"><strong> Phone :</strong>   {{ $infomationform->phone }} </label>
          </div>
          <div class="form-group">
                <label for="fnameth" class="col-form-label"><strong> Email : </strong>  {{ $infomationform->email }}</label>
          </div>
          <div class="form-group">
                <label for="fnameth" class="col-form-label"><strong> Citizen id : </strong>   {{ $infomationform->citizenid }} </label>
          </div>
         
          <div class="form-group">
                <label for="fnameth" class="col-form-label"> <strong> Gender : </strong>  {{ $infomationform->gender }} </label>
          </div>
          <div class="form-group">
                <label for="fnameth" class="col-form-label"><strong> Address: </strong>  {{ $infomationform->address }} </label>
          </div>
          <div class="form-group">
                <label for="fnameth" class="col-form-label"> <strong> Income/Month: </strong>  {{ $infomationform->income }} </label>
          </div>
          <div class="form-group">
                <label for="fnameth" class="col-form-label"> <strong> Tex: </strong>  {{ $infomationform->tex }} </label>
          </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
</script>
@endpush