@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Product</a>
    <form method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Search by name" class="border p-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
    </form>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th class="p-2">Description</th>
                <th class="p-2">Price</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="p-2">{{ $product->name }}</td>
                <td class="p-2">{{ $product->description }}</td>
                <td class="p-2">${{ $product->price }}</td>
                <td class="p-2">
                    <a href="{{ route('products.show', $product) }}" class="text-blue-500">View</a> |
                    <a href="{{ route('products.edit', $product) }}" class="text-green-500">Edit</a> |
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }} <!-- Pagination -->
</div>
@endsection