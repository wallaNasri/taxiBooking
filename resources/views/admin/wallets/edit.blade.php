@extends('layouts.dashboard')


@section('title','Update Wallet')
@section('page-title','Update Wallet')


@section('page-wrapper')
<x-alert/>
<form action="{{route('wallets.update', $wallet->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group mb-3">
        <label for="">User Name:</label>
        <input type="text" name="name" value="{{$wallet->user->name}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Balance:</label>
        <input type="number" name="balance" value="{{$wallet->balance}}" class="form-control @error('balance') is-invalid @enderror">
        @error('balance')
        <p class="invalid-feedback">{{$message}}</p>
         @enderror
    </div>

   
    


    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>


</form>
@endsection
