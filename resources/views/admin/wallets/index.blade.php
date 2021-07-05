@extends('layouts.dashboard')


@section('title','Wallets List')
@section('page-title','Wallets List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('wallets.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Type</th>
            <th>Balance</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($wallets as $wallet)
        <tr>
            <td>{{$wallet->id}}</td>
            <td><a href="{{route('wallets.edit',[$wallet->id])}}">{{$wallet->user->name}}</a></td>
            <td>{{$wallet->user->type}}</td>
            <td>{{$wallet->balance}}</td>
            <td>
                <form action="{{route('wallets.destroy',$wallet->id)}}" method="post">
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
