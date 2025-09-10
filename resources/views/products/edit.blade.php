@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" class="w-full border p-2 @error('name') border-red-500 @enderror">
            @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description</label>
            <textarea name="description" id="description" class="w-full border p-2 @error('description') border-red-500 @enderror">{{ $product->description }}</textarea>
            @error('description') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block">Price</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ $product->price }}" class="w-full border p-2 @error('price') border-red-500 @enderror">
            @error('price') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection