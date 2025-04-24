@extends('layouts.app')

@section('maincontent')
<div class="container mt-5">
    <h2>Добави нов лаптоп</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Име</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Описание</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Цена (лв.)</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Линк към снимка</label>
            <input type="url" name="image" class="form-control" placeholder="https://example.com/image.jpg">
        </div>

        <button type="submit" class="btn btn-primary">Добави продукт</button>
    </form>
</div>
@endsection
