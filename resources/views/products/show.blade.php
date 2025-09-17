@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden md:flex">
        <div class="md:flex-shrink-0 md:w-1/2 p-6 flex justify-center items-center bg-gray-100">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="object-cover rounded-lg shadow-lg max-h-96">
            @else
                <div class="text-gray-400 text-center">
                    <svg class="h-48 w-48 text-gray-300 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l-4 4m2-4l4-4m-6-4l2-2"/>
                    </svg>
                    <p class="mt-2 text-sm">No Image Available</p>
                </div>
            @endif
        </div>

        <div class="p-8 md:w-1/2 flex flex-col justify-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
            <p class="text-2xl font-bold text-indigo-600 mb-4">${{ number_format($product->price, 2) }}</p>

            <div class="mb-6">
                <p class="text-gray-700 text-base leading-relaxed">{{ $product->description }}</p>
            </div>

            <div class="flex items-center space-x-4 mt-auto">
                <a href="{{ route('products.edit', $product->id) }}" class="inline-block px-6 py-3 bg-indigo-600 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">
                    Edit Product
                </a>
                <a href="{{ route('products.index') }}" class="inline-block px-6 py-3 border border-gray-300 text-gray-700 font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-gray-100 hover:shadow-lg focus:bg-gray-100 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-200 active:shadow-lg transition duration-150 ease-in-out">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection