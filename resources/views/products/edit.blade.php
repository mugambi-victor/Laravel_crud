@extends('products.layout')

@section('content')
<div class="row d-flex">
    <div class="col pull-right">
        <h2>Edit product</h2>
    </div>
    <div class="col pull-left text-end">
        <a class="btn btn-danger" href="{{ route('products.index') }}">Back</a>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input <br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="product_name"class="form-label">Product name</label>
    <input type="text" class="form-control"  value="{{ $product->name }}"  name="name">
    <label for="details" class="form-label">Details</label>
    <textarea rows="4" class="form-control"  name="details">{{ $product->details }}</textarea>
    <button type="submit" name="update" class="btn  mt-2 btn-primary">Update</button>
   
</form>
@endsection