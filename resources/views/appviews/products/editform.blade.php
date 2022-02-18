@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('products.update' , $products->id) }}">
    @csrf
    @method("PUT")


    <input type ="text" name="product_name" id="product_name" 
    placeholder="productName" value="{{ $products->product_name }}">

    <input type ="text" name="product_alias" id="product_alias" 
    placeholder="productAlias" value="{{ $products->product_alias }}">

    <input type="submit" value="Save">
</form>
<a href="{{ route('products.index') }}">View Products</a>

@endsection