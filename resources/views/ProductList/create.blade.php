<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-8">
                <form action="{{route('productlist.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="product">Product</label>
                        <select name="product" class="form-control" id="product">
                            @foreach ($products as $product)
                            <option value="{{$product->barcode}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            @foreach ($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
