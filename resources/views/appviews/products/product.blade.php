@extends('layouts.app')

@section('content')

<p>
    @if(\Session::has('success'))
        {{ \Session::get('success') }}
    @endif
</p>

<table>
    <tr>
        <td>Name</td>
        <td>Alias</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    @foreach ($products as $pd)
    <tr>
        <td>{{ $pd->product_name }}</td>
        <td>{{ $pd->product_alias }}</td>
        <td><a href="{{ route ('products.edit',$pd->id) }}">Edit</a></td>
        <td>
        <form method="post" action="{{ route('products.destroy' , $pd->id) }}">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
<p>
    <a href="{{ route('products.create') }}">Add new products</a>

@endsection