@extends('layouts.dashboard')


@section('title','Veichles List')
@section('page-title','Veichles List')


@section('page-wrapper')




<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{route('veichles.create')}}" class="btn btn-info">Create</a>
</div>




<table class="table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Car model</th>
            <th>Color</th>
            <th>Price Per Km</th>
            <th>Car number</th>
            <th>License number</th>
            <th>License end date</th>
            <th>Vin number</th>
            <th>Owner ID card</th>
            <th>Status</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach($veichles as $veichle)
        <tr>
        <td>
        <div class="mb-2"><a  href="{{route('veichles.edit',[$veichle->id])}}"><img src="{{ $veichle->image_url}}" height="40" alt=""></a></div>

       
            </td>
            <td>{{$veichle->carmodel->brand->name}}/{{$veichle->carmodel->name}}</td>
            <td>{{$veichle->color}}</td>
            <td>{{$veichle->price}}</td>
            <td>{{$veichle->car_number}}</td>
            <td>{{$veichle->license_number}}</td>
            <td>{{$veichle->license_end_date}}</td>      
            <td>{{$veichle->vin_number}}</td>
            <td>{{$veichle->owner_id_card}}</td>
            <td>{{$veichle->status}}</td>
            <td>
                <form action="{{route('veichles.destroy',$veichle->id)}}" method="post">
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
