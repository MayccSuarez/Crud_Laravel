@extends('layout')

@section('content')

    <div class="col-lg-8">

        <h2>Actualizar Producto
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">back</a>
        </h2>

        @include('products.fragment.error')

        {{ Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT' ]) }}

            @include('products.fragment.form')

        {{ Form::close() }}
    </div>

    <div class="col-lg-4">
        @include('products.fragment.info.edit_aside')
    </div>

@endsection