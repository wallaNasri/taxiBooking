@extends('layouts.dashboard')


@section('title','Profile of drivers List')
@section('page-title','Profile of drivers List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('drivers.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table table-sm">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>User Name</th>
            <th>Avatar</th>
            <th>Full Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Area</th>
            <th>Account Status</th>

            <th>Veichle ID</th>
            <th>Action Status</th>
            <th>Payment Type</th>
            <th>Driving License Number</th>
            <th>Driving License Expiry Date</th>

            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->id_number}}</td>
            <td>{{$profile->user->name}}</td>
            <td>
             <div class="mb-2">
            <img src="{{ $profile->avatar_url}}" height="40" alt="">
            </div>
            </td>
            <td><a href="{{route('drivers.edit',[$profile->user_id])}}">{{$profile->full_name}}</a></td>
            <td>{{$profile->mobile}}</td>
            <td>{{$profile->adresss}}</td>
            <td>{{$profile->area->name}}/{{$profile->area->city->name}}</td>
            <td>{{$profile->account_status}}</td>

            <td>{{$profile->veichle->carmodel->brand->name}}/{{$profile->veichle->carmodel->name}}</td>
            <td>{{$profile->action_status}}</td>
            <td>{{$profile->payment_type}}</td>
            <td>{{$profile->driving_license_number}}</td>
            <td>{{$profile->driving_license_expiry_date}}</td>

            <td>
                <form action="{{route('drivers.destroy',$profile->user_id)}}" method="post">
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
