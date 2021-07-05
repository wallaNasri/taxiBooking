@extends('layouts.dashboard')


@section('title','Car Models List')
@section('page-title','Car Models List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('carmodels.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>year</th>
            <th>Fuel Type</th>
            <th>Motor Type</th>
            <th>Seats</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($carmodels as $carmodel)
        <tr>
            <td>{{$carmodel->id}}</td>
            <td><a href="{{route('carmodels.edit',[$carmodel->id])}}">{{$carmodel->name}}</a></td>
            <td>{{$carmodel->brand->name}}</td>
            <td>{{$carmodel->year}}</td>
            <td>{{$carmodel->fuel_type}}</td>
            <td>{{$carmodel->motor_type}}</td>
            <td>{{$carmodel->seats}}</td>
            <td>
                <form action="{{route('carmodels.destroy',$carmodel->id)}}" method="post">
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
