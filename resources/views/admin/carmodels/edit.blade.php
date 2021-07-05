@extends('layouts.dashboard')


@section('title','Update Car Model')
@section('page-title','Update Car Model')


@section('page-wrapper')

<form action="{{route('carmodels.update', $carmodel->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{$carmodel->name}}" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Brand:</label>
        <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
            <option value="">Select Brand</option>
            @foreach ($brands as $brand)

            <option value="{{$brand->id}}" @if($brand->id == $carmodel->brand_id) selected @endif> {{$brand->name}}</option>

            @endforeach

        </select>
        @error('brand_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    
    <div class="form-group mb-3">
        <label for="">Year:</label>
        <input type="number" name="year" value="{{$carmodel->year}}" class="form-control @error('year') is-invalid @enderror">
        @error('year')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Seats:</label>
        <input type="number" name="seats" value="{{$carmodel->seats}}" class="form-control @error('seats') is-invalid @enderror">
        @error('seats')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>


  

    <div class="form-group mb-3">
        <label for="">Fuel Type:</label>
        <div>
            <label> <input type="radio" name="fuel_type" value=" Diesel" @if($carmodel->fuel_type=='Diesel') checked @endif> Diesel</label>
            <label> <input type="radio" name="fuel_type" value="Petrol"  @if($carmodel->fuel_type=='Petrol') checked @endif> Petrol</label>
            <label> <input type="radio" name="fuel_type" value=" Solar" @if($carmodel->fuel_type=='Solar') checked @endif> Solar</label>
            <label> <input type="radio" name="fuel_type" value=" Electricity" @if($carmodel->fuel_type=='Electricity') checked @endif> Electricity</label>
        </div>
        @error('fuel_type')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Motor Type:</label>
        <div>
            <label> <input type="radio" name="motor_type" value=" 2Wheel" @if($carmodel->motor_type=='2Wheel') checked @endif> 2Wheel</label>
            <label> <input type="radio" name="motor_type" value="4Wheel"  @if($carmodel->motor_type=='4Wheel') checked @endif> 4Wheel</label>
        </div>
        @error('motor_type')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>


</form>
@endsection
