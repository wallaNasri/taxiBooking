@extends('layouts.dashboard')


@section('title','Add Wallet')
@section('page-title','Add Wallet')


@section('page-wrapper')

@if($errors->any())
<div class="alert alert-danger">
Error
</div>
@endif
<x-alert/>
<form action="{{route('wallets.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label for="">User Name:</label>
        <input type="text" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Balance:</label>
        <input type="number" name="balance" value="{{ old('balance')}}" class="form-control @error('balance') is-invalid @enderror">
        @error('balance')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

   
    


    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>


</form>

@endsection
