@extends('products.layout')

@section('content')
<div class="row d-flex">
    <div class="col">
        <h2>Products</h2></div> 
    @if(session('success'))
            <div class="alert alert-success m-2" role="alert">
                {{ session('success') }}
            </div>
        @endif
    <div class="col text-end"><a href="{{ route('products.create') }}" class="btn  btn-success">Add New Product</a>
    </div>
</div>
<table class="table table-striped table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Details</th>
        <th>Actions</th>
    </tr>
    @foreach ($products as $product )
    <tr>
       
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->details }}</td>
        <td class="d-flex"><a href="{{ route('products.show', $product->id) }}" class="btn btn-primary m-1">Show</a> <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info m-1">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
           
        </form></td>
    </tr>
    @endforeach
</table>
<!-- Display pagination links -->
{{ $products->links() }}

@endsection