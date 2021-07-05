@extends('layouts.dashboard')


@section('title','Brand List')
@section('page-title','Brand List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('brands.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td><a href="{{route('brands.edit',[$brand->id])}}">{{$brand->name}}</a></td>
            <td><div class="mb-2">
            <img src="{{ $brand->image_url}}" height="40" alt="">
            </div></td>
            <td>
                <form action="{{route('brands.destroy',$brand->id)}}" method="post">
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
