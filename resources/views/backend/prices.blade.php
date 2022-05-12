@extends('backend.layout')

@section('content')
@forelse ($prices as $item)
    $item->name  : $item->price
@empty
no hay precio
    
@endforelse

<form action="{{ route('price.store') }}" method="post">
    @csrf {{--genera token--}}

    <label for="">titulo</label>
    <input type="text" name="product">

    <label for="">precio1</label>
    <input type="text" name="price">


    <button type="submit">Enviar</button>
</form>
    
@endsection