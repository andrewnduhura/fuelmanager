@extends('layouts.app')

@section('content')

<table border="1">
    <tr>
    <td>Pump</td>
        <td>Product</td>
        <td>Operations</td>
    </tr>
    @foreach($pumps as $pump)
    <tr>
        <td>{{ $pump->pump_name }}</td>
        <td>{{ $pump->product_alias }}</td>
        <td><a href="">Edit</a></td>
    </tr>
    @endforeach
</table>
<a href="{{ route('dashboard') }}">Home</a>

@endsection