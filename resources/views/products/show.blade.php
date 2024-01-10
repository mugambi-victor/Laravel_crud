@extends('products.layout')

@section('content')

<div class="row d-flex">
        <div class="col text-start"><h2>Page to show a Specific Product</h2></div>
        <div class="col text-end"><a href="{{ route('products.index') }}" class="btn btn-primary">Back</a></div>
   
</div>
<div class="row">
    <div class="col"><strong>Product Name</strong> {{ $product->name }}</div>
   
</div>
<div class="row">
    <div class="col"><strong>Product Details</strong> {{ $product->details }}</div>
</div>
@endsection