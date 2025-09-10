@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4">
    <!-- HINT: Displays the page title. -->
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    <!-- HINT: Link to the create product page. -->
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Product</a>
    <!-- HINT: Search form to filter products. -->
    <form method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Search by name" class="border p-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
    </form>

    <!-- HINT: Table to display product information. -->

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
            <!-- HINT: Loops through each product passed from the controller. -->
            @foreach($products as $product)
            <tr>
                <td class="p-2">{{ $product->name }}</td>
                <td class="p-2">{{ product-\>description }}\</td\>
                    \
                <td class="p-2" \>{{ $product->price }}</td>
                <td class="p-2">
                    <!-- HINT: Link to view a single product. -->
                    <a href="{{ route('products.show', $product) }}" class="text-blue-500">View</a> |
                    <!-- HINT: Link to edit a product. -->
                    <a href="{{ route('products.edit', $product) }}" class="text-green-500">Edit</a> |
                    <!-- HINT: Form to send a DELETE request. -->
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                        <!-- HINT: CSRF protection and method spoofing for DELETE request. -->
                        @csrf @method('DELETE')
                        <!-- HINT: The 'onclick' event shows a confirmation dialog box before submitting the form. -->
                        <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- HINT: Displays pagination links for the products. -->
    {{ $products->links() }}

</div>
@endsection