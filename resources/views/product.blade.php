@extends('layouts.frontend')

@section('content')
<div class="card mb-5">
    <div class="card-body p-0">
        <table class="table table-striped table-hover m-0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>image_name</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($products))
                    @foreach ( $products as $product )
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><image class="w-50 p-3" src="assets/image/{{$product->image_name}}" alt="Product" /></td>
                            <td>{{ $product->price }}</td>
                            <td><add-to-cart-button product-id="{{$product->id}}" user-id="{{auth()->user()->id ?? 0}}" /></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection