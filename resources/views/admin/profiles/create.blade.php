@extends('layouts.dashboard')


@section('title','Add Profile')
@section('page-title','Add Profile')


@section('page-wrapper')

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form action="{{route('profiles.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

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
        <label for="">Account Status:</label>
        <div>
            <label> <input type="radio" name="account_status" value=" active" @if(old('account_status')=='active') checked @endif> Active</label>
            <label> <input type="radio" name="account_status" value="inactive"  @if(old('account_status')=='inactive') checked @endif> Inactive</label>
            <label> <input type="radio" name="account_status" value="blocked"  @if(old('account_status')=='blocked') checked @endif> Blocked</label>

        </div>
        @error('account_status')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Avatar:</label>
        <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror ">
        @error('avatar')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>


</form>


@endsection
@section('scripts')


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
