@extends('font.layout')
@section('content')
<h3 class="col-md-4 col-sm-6">Complete your profile...</h3>

<div id="myaccount">
    
    <div class="container">

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form class=" col-md-4 col-sm-6" action="{{route('drivers.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">ID Number:</label>
        <input type="text" name="id_number" value="{{ old('id_number')}}" class="form-control @error('id_number') is-invalid @enderror">
        @error('id_number')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Full Name:</label>
        <input type="text" name="full_name" value="{{ old('full_name')}}" class="form-control @error('full_name') is-invalid @enderror">
        @error('full_name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label>Mobile:</label>
        <input name="mobile" value="{{ old('mobile') }}" type="text" class="form-control @error('mobile') is-invalid @enderror">
        @error('mobile')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>

                            


    <div class="form-group mb-3">
        <label for="">City:</label>
        <select name="city_id" id="city_id" onchange="getCityStates()" class="form-control @error('city_id') is-invalid @enderror">
            <option value="">Select City</option>
            @foreach ($cities as $city)

            <option value="{{$city->id}}" @if($city->id == old('city_id')) selected @endif> {{$city->name}}</option>

            @endforeach

        </select>
        @error('city_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

   
    <div class="form-group mb-3">
        <label for="">Area:</label>
        <select name="area_id" id="area_id" class="form-control @error('area_id') is-invalid @enderror">
            <option value="">Select Area</option>

        </select>
        @error('area_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>


    <div class="form-group mb-3">
        <label>Address:</label>
        <input name="adresss" value="{{ old('adresss') }}" type="text" class="form-control @error('adresss') is-invalid @enderror">
        @error('adresss')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div> 

   

    <div class="form-group mb-3">
        <label for="">Avatar:</label>
        <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror ">
        @error('avatar')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>



    



    <div class="form-group mb-3">
        <label for="">Driving License Number:</label>
        <input type="text" name="driving_license_number" value="{{ old('driving_license_number')}}" class="form-control @error('driving_license_number') is-invalid @enderror">
        @error('driving_license_number')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label>Driving License Expiry Date:</label>
        <input name="driving_license_expiry_date" value="{{ old('driving_license_expiry_date') }}" type="text" class="form-control @error('driving_license_expiry_date') is-invalid @enderror">
        <span class="form-text text-muted">YYYY-MM-DD</span>
        @error('driving_license_expiry_date')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>

</form>

</div>
</div>

<script src="{{asset('doccure/admin/assets/js/select2.min.js')}}"></script>
    <script>

function getCityStates(){
    var selectedCityId =document.getElementById('city_id').value;
    var areaSelect=document.getElementById('area_id');
    areaSelect.length=0;
    @foreach ($cities as $city)
    if(selectedCityId=='{{$city->id}}'){
        @foreach ($city->areas as $area)
        var option=document.createElement('option');
        option.text='{{$area->name}}';
        option.value='{{$area->id}}';
        areaSelect.add(option);
        @endforeach       
    }
    @endforeach
}


    </script>
@endsection
@section('scripts')

 
    @endsection
