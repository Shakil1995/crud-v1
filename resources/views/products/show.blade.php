@extends('products.layouts')
@section('title','Show Product')

@section('content')
    <div class="row  ">
        <div class="col-md-12">

        <a href="{{ route('products.index') }}" class="btn btn-success mb-3">Back</a>

        <div class="row ">
            <div class="col-md-12 ">
                <div class="card card-primary  " style="width: 70%">
                    <div class="card-header justify-content-center">
                        <h3 class="card-title">Show Product Data</h3>
                    </div>

                    <table class="table  table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th style="width: 30%" scope="col">Highlight</th>
                                <th scope="col">Details </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td>{{ $product->stock }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
