@extends('layouts.dashboard')


@section('title',' Update City')
@section('page-title','Update City')


@section('page-wrapper')

<form action="{{route('cities.update', $city->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{$city->name}}" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    
    <div class="form-group mb-3">
        <label for="">Status:</label>
        <div>
            <label> <input type="radio" name="status" value="active" @if($city->status=='active') checked @endif> Active</label>
            <label> <input type="radio" name="status" value="inactive" @if($city->status=='inactive') checked @endif> Inactive</label>
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
