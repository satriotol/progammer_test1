@extends('layouts.app')
@section('content')
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">Barcode</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Ready</th>
            <th scope="col">Onhold</th>
            <th scope="col">Delivered</th>
            <th scope="col">Packing</th>
            <th scope="col">Sent</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productcounts as $pc)
        <tr>
            <td>{{$pc->product->barcode}}</td>
            <td>{{$pc->total}}</td>
            <td>{{$pc->totalprice}}</td>
            <td>{{$pc->totalstatus}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
