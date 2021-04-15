@extends('layouts.app')
@section('content')
<div class="text-right">
    <a href="{{route('productlist.create')}}" class="btn btn-primary">Create</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Barcode</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product_lists as $pl)
        <tr>
            <td>{{$pl->product->barcode}}</td>
            <td>{{$pl->product->name}}</td>
            <td>{{$pl->price}}</td>
            <td>{{$pl->status->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
