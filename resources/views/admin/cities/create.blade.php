@extends('layouts.dashboard')


@section('title','Add City')
@section('page-title','Add City')


@section('page-wrapper')

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif

<form action="{{route('cities.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
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
