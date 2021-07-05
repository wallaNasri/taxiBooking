@extends('layouts.dashboard')


@section('title','Update Area')
@section('page-title','Update Area')


@section('page-wrapper')

<form action="{{route('areas.update', $area->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{$area->name}}" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">City:</label>
        <select name="city_id" class="form-control @error('city_id') is-invalid @enderror">
            <option value="">Select City</option>
            @foreach ($cities as $city)

            <option value="{{$city->id}}" @if($city->id == $area->city_id) selected @endif> {{$city->name}}</option>

            @endforeach

        </select>
        @error('city_id')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    
    <div class="form-group mb-3">
        <label for="">Status:</label>
        <div>
            <label> <input type="radio" name="status" value="active" @if($area->status=='active') checked @endif> Active</label>
            <label> <input type="radio" name="status" value="inactive" @if($area->status=='inactive') checked @endif> Inactive</label>
        </div>
        @error('status')
        <p class="alert-warning">{{$message}}</p>
                 @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>


</form>
@endsection
