@extends('layouts.app')
@section('content')
<form action="{{route('productlist.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="product">Product</label>
        <select name="product_id" class="form-control" id="product">
            @foreach ($products as $product)
            <option value="{{$product->id}}">{{$product->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input name="price" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status_id" class="form-control" id="exampleFormControlSelect1">
            @foreach ($statuses as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

