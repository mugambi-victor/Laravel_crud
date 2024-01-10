@extends('products.layout')

@section('content')
<div class="row d-flex">
    <div class="col pull-right">
        <h2>Add a New product</h2>
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

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="product_name" class="form-label">Product name</label>
    <input type="text" class="form-control" name="name">
    <label for="details" class="form-label">Details</label>
    <textarea rows="4" class="form-control" name="details"></textarea>
    <button type="submit" name="submit" class="btn  mt-2 btn-primary">Submit</button>
   
</form>
@endsection