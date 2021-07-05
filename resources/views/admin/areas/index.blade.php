@extends('layouts.dashboard')


@section('title','Area List')
@section('page-title','Area List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('areas.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Status</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
        <tr>
            <td>{{$area->id}}</td>
            <td><a href="{{route('areas.edit',[$area->id])}}">{{$area->name}}</a></td>
            <td>{{$area->city->name}}</td>
            <td>{{$area->status}}</td>
            <td>
                <form action="{{route('areas.destroy',$area->id)}}" method="post">
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
