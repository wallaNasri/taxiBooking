@extends('layouts.dashboard')


@section('title','Add Veichle')
@section('page-title','Add Veichle')


@section('page-wrapper')


@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form action="{{route('veichles.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">Image:</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror ">
        @error('image')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label>Color:</label>
        <input name="color" value="{{ old('color') }}" type="text" class="form-control @error('color') is-invalid @enderror">
        @error('color')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>

    <div class="form-group mb-3">
        <label>Price Per km:</label>
        <input name="price" value="{{ old('price') }}" type="number" class="form-control @error('price') is-invalid @enderror">
        @error('price')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Brand:</label>
        <select name="brand_id" id="brand_id" onchange="getBrandModels()" class="form-control @error('brand_id') is-invalid @enderror">
            <option value="">Select Brand</option>
            @foreach ($brands as $brand)

            <option value="{{$brand->id}}" @if($brand->id == old('brand_id')) selected @endif> {{$brand->name}}</option>

            @endforeach

        </select>
        @error('brand_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

   
    <div class="form-group mb-3">
        <label for="">Car model:</label>
        <select name="model_id" id="model_id" class="form-control @error('model_id') is-invalid @enderror">
            <option value="">Select Car model</option>

        </select>
        @error('model_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label>Car number:</label>
        <input name="car_number" value="{{ old('car_number') }}" type="text" class="form-control @error('car_number') is-invalid @enderror">
        @error('car_number')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div>


    <div class="form-group mb-3">
        <label>License number:</label>
        <input name="license_number" value="{{ old('license_number') }}" type="text" class="form-control @error('license_number') is-invalid @enderror">
        @error('license_number')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div> 

    <div class="form-group mb-3">
        <label>License End  Ddate:</label>
        <input name="license_end_date" value="{{ old('license_end_date') }}" type="text" class="form-control @error('license_end_date') is-invalid @enderror">
        <span class="form-text text-muted">YYYY-MM-DD</span>
        @error('license_end_date')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div> 

    <div class="form-group mb-3">
        <label>Vin Number:</label>
        <input name="vin_number" value="{{ old('vin_number') }}" type="text" class="form-control @error('vin_number') is-invalid @enderror">
        @error('vin_number')
        <p class="invalid-feedback">{{$message}}</p>   
              @enderror
    </div> 


    <div class="form-group mb-3">
        <label>Owner ID card:</label>
        <input name="owner_id_card" value="{{ old('owner_id_card') }}" type="text" class="form-control @error('owner_id_card') is-invalid @enderror">
        @error('owner_id_card')
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

function getBrandModels(){
    var selectedBrandId =document.getElementById('brand_id').value;
    var carmodelSelect=document.getElementById('model_id');
    carmodelSelect.length=0;
    @foreach ($brands as $brand)
    if(selectedBrandId=='{{$brand->id}}'){
        @foreach ($brand->carmodels as $carmodel)
        var option=document.createElement('option');
        option.text='{{$carmodel->name}}';
        option.value='{{$carmodel->id}}';
        carmodelSelect.add(option);
        @endforeach       
    }
    @endforeach
}


    </script> 
    @endsection
