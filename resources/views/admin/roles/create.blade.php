@extends('layouts.dashboard')
@section('title',' Add Roles ')
@section('page-title','Add Roles ')


@section('page-wrapper')
@if($errors->any())
<div class="alert alert-danger">
    Error
</div>
@endif


   

    
    

<form action="{{route('roles.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group mb-3">
<label for="">To assign a role to a specific  user:</label>
    <input type="text" name="names" class="form-control me-2" placeholder="User name">
    </div>

    <div class="form-group mb-3">
        <label for="">To assign a role to a group of users:</label>
        
        <div>
       
            <label> <input type="radio" id="admin"  name="user_type" value=" admin" @if(old('user_type')=='admin' ) checked @endif> admin</label>
            <label> <input type="radio" id="driver"  name="user_type" value="driver" @if(old('user_type')=='driver' ) checked @endif> driver</label>
            <label> <input type="radio" id="user"  name="user_type" value="user" @if(old('user_type')=='user' ) checked @endif> user</label>

        </div>
        @error('user_type')
        <p class="alert-warning">{{$message}}</p>
        @enderror

    </div>
  

    <div class="form-group mb-3">
        <label for="">Role Name:</label>
        <input type="text" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <p class="invalid-feedback">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="">Abilities:</label>
        <div>
            @foreach(config('abilities') as $key=>$label)
            <div class="mb-1">
                <label for="">
                    <input type="checkbox" name="abilities[]" value="{{$key}}">{{$label}}
                </label>
            </div>
            @endforeach
        </div>

        @error('abilities')
        <p class="invalid-feedback">{{$message}}</p>
        @enderror
    </div>







    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>


</form>

@endsection

