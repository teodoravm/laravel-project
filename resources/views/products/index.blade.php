@extends('layouts.app')

@section('maincontent')
    <h1 class="mb-4">Всички продукти</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($product->image)
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p><strong>Цена:</strong> {{ number_format($product->price, 2) }} лв.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
