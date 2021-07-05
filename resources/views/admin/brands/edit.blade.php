@extends('layouts.dashboard')


@section('title',' Update Brand')
@section('page-title','Update Brand')


@section('page-wrapper')

<form action="{{route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{$brand->name}}" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    
    <div class="form-group mb-3">
        <label for="">Image:</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror ">
        <div class="mb-2">
            <img src="{{ $brand->image_url}}" height="40" alt="">
            </div>
        @error('image')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>


</form>
@endsection
