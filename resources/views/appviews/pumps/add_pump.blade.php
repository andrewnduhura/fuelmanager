@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('pumps.store') }}">
    @csrf


    <input type ="text" name="pump_name" id="pump_name" placeholder="Pump Name">

    <select name="product_id" id="product_id">
        <option value="">Choose product</option>
        @foreach($products as $prdct)
        <option value="{{ $prdct->id }}">{{ $prdct->product_alias }}</option>
        @endforeach
    </select>


    <input type="submit" value="Save">
</form>
<a href="{{ route('pumps.index') }}">View Pumps</a>

@endsection