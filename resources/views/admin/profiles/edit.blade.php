@extends('font.layout')
@section('content')
<h3 class="col-md-4 col-sm-6">Settings...</h3>

<div id="myaccount">
    
    <div class="container">
    <x-alert/>

<form class=" " action="{{route('profiles.update', $profile->user_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group  col-sm-6 mb-3">
        <label for="">Full Name:</label>
        <input type="text" name="full_name" value="{{$profile->full_name}}" class="form-control @error('full_name') is-invalid @enderror">
        @error('full_name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group  col-sm-6 mb-3">
        <label>Mobile:</label>
        <input name="mobile" value="{{ $profile->mobile }}" type="text" class="form-control @error('mobile') is-invalid @enderror">
        @error('mobile')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>
                        


    <div class="form-group  col-sm-6 mb-3">
        <label for="">City:</label>
        <select name="city_id" id="city_id" onchange="getCityStates()" class="form-control ">
            <option value="">{{$profile->area->city->name}}</option>
            @foreach ($cities as $city)

            <option value="{{$city->id}}" > {{$city->name}}</option>

            @endforeach

        </select>
        
    </div>

   
    <div class="form-group col-sm-6 mb-3">
        <label for="">Area:</label>
        <select name="area_id" id="area_id" class="form-control @error('area_id') is-invalid @enderror">
            <option value="{{$profile->area_id}}">{{$profile->area->name}}</option>

        </select>
        @error('area_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

        
    <div class="form-group  mb-3">
        <label>Address:</label>
        <input name="adresss" value="{{ $profile->adresss }}" type="text" class="form-control @error('adresss') is-invalid @enderror">
        @error('adresss')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div> 
  

    <div class="form-group mb-3">
        <label for="">Account Status:</label>
        <div>
            <label> <input type="radio" name="account_status" value=" active" @if($profile->account_status =='active') checked @endif> Active</label>
            <label> <input type="radio" name="account_status" value="inactive"  @if($profile->account_status=='inactive') checked @endif> Inactive</label>
            <label> <input type="radio" name="account_status" value="blocked"  @if($profile->account_status=='blocked') checked @endif> Blocked</label>

        </div>
        @error('account_status')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Avatar:</label>
        <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror ">
        <div class="mb-2">
            <img src="{{ $profile->avatar_url}}" height="40" alt="">
            </div>
        @error('avatar')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Update</button>
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
