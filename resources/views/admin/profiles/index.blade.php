@extends('layouts.dashboard')


@section('title','Profile List')
@section('page-title','Profile List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('profiles.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table">
    <thead>
        <tr>
            <th>User Name</th>
            <th>Avatar</th>
            <th>Full Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Area</th>
            <th>Account Status</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->user->name}}</td>
            <td>
             <div class="mb-2">
            <img src="{{ $profile->avatar_url}}" height="40" alt="">
            </div>
            </td>
            <td><a href="{{route('profiles.edit',[$profile->user_id])}}">{{$profile->full_name}}</a></td>
            <td>{{$profile->mobile}}</td>
            <td>{{$profile->adresss}}</td>
            <td>{{$profile->area->name}}/{{$profile->area->city->name}}</td>
            <td>{{$profile->account_status}}</td>
            <td>
                <form action="{{route('profiles.destroy',$profile->user_id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
           
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
