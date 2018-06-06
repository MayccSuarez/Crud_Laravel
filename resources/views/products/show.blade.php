@extends('layout')

@section('content')

    <div class="col-lg-8">
        <h2>{{ $product->name }}
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">back</a>
        </h2>

        <p>{{ $product->short }}</p>

        {!! $product->description !!}

    </div>

    <div class="col-lg-4">
        @include('products.fragment.info.show_aside')
    </div>


@endsection