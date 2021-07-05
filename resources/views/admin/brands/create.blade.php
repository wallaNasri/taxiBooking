@extends('layouts.dashboard')


@section('title','Add Brand')
@section('page-title','Add Brand')


@section('page-wrapper')

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Image:</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror ">
        @error('image')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>


</form>

@endsection
