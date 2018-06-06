@extends('layout')

@section('content')

    <div class="col-lg-8">
        <h2>Crear producto

            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">back</a>
        </h2>

        @include('products.fragment.error')

        {{ Form::open(['route' => 'products.store']) }}

            @include('products.fragment.form')

        {{ Form::close() }}

    </div>
    <div class="col-lg-4">
        @include('products.fragment.info.create_aside')
    </div>

@endsection
