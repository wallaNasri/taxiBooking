@extends('layouts.dashboard')


@section('title','Add Area')
@section('page-title','Add Area')


@section('page-wrapper')

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form action="{{route('areas.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

   
    <div class="form-group mb-3">
        <label for="">City:</label>
        <select name="city_id" class="form-control @error('city_id') is-invalid @enderror">
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
        <label for="">Status:</label>
        <div>
            <label> <input type="radio" name="status" value=" active" @if(old('status')=='active') checked @endif> Active</label>
            <label> <input type="radio" name="status" value="inactive"  @if(old('status')=='inactive') checked @endif> Inactive</label>
        </div>
        @error('status')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>


</form>

@endsection
