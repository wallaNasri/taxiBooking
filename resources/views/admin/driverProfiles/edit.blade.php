@extends('layouts.dashboard')


@section('title','Update Profile of driver')
@section('page-title','Update Profile of driver')


@section('page-wrapper')


<form action="{{route('drivers.update', $profile->user_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group mb-3">
        <label for="">ID Number:</label>
        <input type="text" name="id_number" value="{{$profile->id_number}}" class="form-control @error('id_number') is-invalid @enderror">
        @error('id_number')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Full Name:</label>
        <input type="text" name="full_name" value="{{$profile->full_name}}" class="form-control @error('full_name') is-invalid @enderror">
        @error('full_name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label>Mobile:</label>
        <input name="mobile" value="{{ $profile->mobile }}" type="text" class="form-control @error('mobile') is-invalid @enderror">
        @error('mobile')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>
                        


    <div class="form-group mb-3">
        <label for="">City:</label>
        <select name="city_id" id="city_id" onchange="getCityStates()" class="form-control ">
            <option value="">{{$profile->area->city->name}}</option>
            @foreach ($cities as $city)

            <option value="{{$city->id}}" > {{$city->name}}</option>

            @endforeach

        </select>
        
    </div>

   
    <div class="form-group mb-3">
        <label for="">Area:</label>
        <select name="area_id" id="area_id" class="form-control @error('area_id') is-invalid @enderror">
            <option value="{{$profile->area_id}}">{{$profile->area->name}}</option>

        </select>
        @error('area_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

        
    <div class="form-group mb-3">
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


    <div class="form-group mb-3">
        <label for="">Veichle:</label>
        <select name="veichle_id" id="veichle_id"  class="form-control @error('veichle_id') is-invalid @enderror">
            <option value="">Select Veichle</option>
            @foreach ($veichles as $veichle)

            <option value="{{$veichle->id}}" @if($veichle->id == $profile->veichle_id) selected @endif>{{$veichle->carmodel->brand->name}}/{{$veichle->carmodel->name}}</option>

            @endforeach

        </select>
        @error('veichle_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Action Status:</label>
        <div>
            <label> <input type="radio" name="action_status" value=" valid" @if($profile->action_status=='valid') checked @endif> Valid</label>
            <label> <input type="radio" name="action_status" value="invalid"  @if($profile->action_status=='invalid') checked @endif> Invalid</label>

        </div>
        @error('action_status')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>


    <div class="form-group mb-3">
        <label for="">Payment Type:</label>
        <div>
            <label> <input type="radio" name="payment_type" value=" wallet" @if($profile->payment_type=='wallet') checked @endif> Wallet</label>
            <label> <input type="radio" name="payment_type" value="target"  @if($profile->payment_type=='target') checked @endif> Target</label>

        </div>
        @error('payment_type')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Driving License Number:</label>
        <input type="text" name="driving_license_number" value="{{$profile->driving_license_number}}" class="form-control @error('driving_license_number') is-invalid @enderror">
        @error('driving_license_number')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label>Driving License Expiry Date:</label>
        <input name="driving_license_expiry_date" value="{{$profile->driving_license_expiry_date}}" type="text" class="form-control @error('driving_license_expiry_date') is-invalid @enderror">
        <span class="form-text text-muted">YYYY-MM-DD</span>
        @error('driving_license_expiry_date')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>


    <div>
        <button type="submit" class="btn btn-primary">Update</button>
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
