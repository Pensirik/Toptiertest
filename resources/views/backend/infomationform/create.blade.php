@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Infomationform</h5>
    <div class="card-body">
   
      <form method="post" action="{{route('infomationform.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
      

        <div class="form-group">
          <div class="row">
              <div class="col-lg-6">
                <label for="fnameth" class="col-form-label">First Name (TH) <span class="text-danger">*</span></label>
                  <input id="fnameth" type="text" name="fnameth" placeholder=""  value="{{old('fnameth')}}" class="form-control">
                  @error('fnameth')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
            <div class="col-lg-6 ">
              <label for="lnameth" class="col-form-label">Last Name (TH) <span class="text-danger">*</span></label>
                <input id="lnameth" type="text" name="lnameth" placeholder=""  value="{{old('lnameth')}}" class="form-control">
                @error('lnameth')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-lg-6">
                <label for="fnameen" class="col-form-label">First Name (EN) <span class="text-danger">*</span></label>
                  <input id="fnameen" type="text" name="fnameen" placeholder=""  value="{{old('fnameen')}}" class="form-control">
                  @error('fnameen')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
            <div class="col-lg-6 ">
              <label for="lnameen" class="col-form-label">Last Name (EN) <span class="text-danger">*</span></label>
                <input id="lnameen" type="text" name="lnameen" placeholder=""  value="{{old('lnameen')}}" class="form-control">
                @error('lnameen')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
          </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-form-label">Phone <span class="text-danger">*</span></label>
              <input id="phone" type="text" name="phone" placeholder=""  value="{{old('phone')}}" class="form-control">
              @error('phone')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </div>
        <div class="form-group">
          <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
            <input id="email" type="text" name="email" placeholder=""  value="{{old('email')}}" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="citizenid" class="col-form-label">Citizen id <span class="text-danger">*</span></label>
              <input id="citizenid" type="text" name="citizenid" placeholder=""  value="{{old('citizenid')}}" class="form-control">
              @error('citizenid')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </div>
        <div class="form-group">
              <label for="income" class="col-form-label">Income / month <span class="text-danger">*</span></label>
              <input id="income" type="number" name="income" placeholder=""  value="{{old('income')}}" class="form-control">
              @error('income')
              <span class="text-danger">{{$message}}</span>
              @enderror
        </div>

        <div class="form-group">
          <label for="gender" class="col-form-label">Gender <span class="text-danger">*</span></label>
          <select name="gender" class="form-control">
          <option value="">-----------Select-----------</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
          @error('gender')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>


        <div class="form-group">
          <label for="address" class="col-form-label">Address <span class="text-danger">*</span></label>
          <textarea class="form-control" id="address" name="address">{{old('address')}}</textarea>
          @error('address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

      
     

      
       
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
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