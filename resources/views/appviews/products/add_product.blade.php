@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('products.store') }}">
    @csrf


    <input type ="text" name="product_name" id="product_name" placeholder="productName">

    <input type ="text" name="product_alias" id="product_alias" placeholder="productAlias">

    <input type="submit" value="Save">
</form>
<a href="{{ route('products.index') }}">View Products</a>
<a href="{{ route('dashboard') }}">Home</a>

@endsection