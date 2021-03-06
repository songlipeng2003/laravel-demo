@extends('layouts.default')

@section('content')
<table>
    <thead>
        <td>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>created_at</th>
            <th>updated_at</th>
        </td>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{{$product->id}}}</td>
            <td>{{{$product->title}}}</td>
            <td>{{{$product->content}}}</td>
            <td>{{{$product->created_at}}}</td>
            <td>{{{$product->updated_at}}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop