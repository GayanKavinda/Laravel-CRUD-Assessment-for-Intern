@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4">
    <!-- HINT: Displays the page title. -->
    <h1 class="text-2xl font-bold mb-4">Create Product</h1>
    <!-- HINT: Form that submits to the 'products.store' route. -->
    <form action="{{ route('products.store') }}" method="POST">
        <!-- HINT: Security token to protect against Cross-Site Request Forgery (CSRF). -->
        @csrf
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <!-- HINT: Input for the product name. -->
            <input type="text" name="name" id="name" class="w-full border p-2 @error('name') border-red-500 @enderror">
            <!-- HINT: Displays validation errors for the 'name' field. -->
            @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description</label>
            <!-- HINT: Textarea for the product description. -->
            <textarea name="description" id="description" class="w-full border p-2 @error('description') border-red-500 @enderror"></textarea>
            <!-- HINT: Displays validation errors for the 'description' field. -->
            @error('description') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block">Price</label>
            <!-- HINT: Input for the price, accepting decimal values. -->
            <input type="number" step="0.01" name="price" id="price" class="w-full border p-2 @error('price') border-red-500 @enderror">
            <!-- HINT: Displays validation errors for the 'price' field. -->
            @error('price') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <!-- HINT: The submit button for the form. -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection