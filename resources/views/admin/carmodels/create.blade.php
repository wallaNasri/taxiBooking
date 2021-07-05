@extends('layouts.dashboard')


@section('title','Add Car Model')
@section('page-title','Add Car Model')


@section('page-wrapper')

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form action="{{route('carmodels.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

   
    <div class="form-group mb-3">
        <label for="">Brand:</label>
        <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
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
        <label for="">Year:</label>
        <input type="number" name="year" value="{{ old('year')}}" class="form-control @error('year') is-invalid @enderror">
        @error('year')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Seats:</label>
        <input type="number" name="seats" value="{{ old('seats')}}" class="form-control @error('seats') is-invalid @enderror">
        @error('seats')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>


  

    <div class="form-group mb-3">
        <label for="">Fuel Type:</label>
        <div>
            <label> <input type="radio" name="fuel_type" value=" Diesel" @if(old('fuel_type')=='Diesel') checked @endif> Diesel</label>
            <label> <input type="radio" name="fuel_type" value="Petrol"  @if(old('fuel_type')=='Petrol') checked @endif> Petrol</label>
            <label> <input type="radio" name="fuel_type" value=" Solar" @if(old('fuel_type')=='Solar') checked @endif> Solar</label>
            <label> <input type="radio" name="fuel_type" value=" Electricity" @if(old('fuel_type')=='Electricity') checked @endif> Electricity</label>
        </div>
        @error('fuel_type')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Motor Type:</label>
        <div>
            <label> <input type="radio" name="motor_type" value=" 2Wheel" @if(old('motor_type')=='2Wheel') checked @endif> 2Wheel</label>
            <label> <input type="radio" name="motor_type" value="4Wheel"  @if(old('motor_type')=='4Wheel') checked @endif> 4Wheel</label>
        </div>
        @error('motor_type')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>


</form>

@endsection
