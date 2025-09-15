@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden">
        <div class="p-8 sm:p-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-2 text-center">Edit Product</h1>
            <p class="text-center text-gray-500 mb-8">Update the details for {{ $product->name }}.</p>
            <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-6">
                @csrf @method('PUT')
                
                {{-- Product Name Field --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5.989a2 2 0 011.832 1.185l.172.482a2 2 0 001.832 1.185h4.161c1.134 0 1.989.756 2.115 1.895l.088.793A2 2 0 0122 9h-5a2 2 0 00-1.832 1.185l-.172.482a2 2 0 01-1.832 1.185h-4.161c-1.134 0-1.989-.756-2.115-1.895L7.9 9H2.016A2.016 2.016 0 010 6.984V5.016A2.016 2.016 0 012.016 3H7zm11 10a4 4 0 100 8 4 4 0 000-8z" />
                        </svg>
                        Product Name
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" placeholder="e.g., Organic Coffee Beans" class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2.5 bg-gray-50 text-gray-900 placeholder-gray-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('name') border-red-500 @enderror">
                    @error('name') 
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p> 
                    @enderror
                </div>
                
                {{-- Product Description Field --}}
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2-8a4 4 0 100-8 4 4 0 000 8z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v6a2 2 0 002 2h6m-3-4a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V4a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2z" />
                        </svg>
                        Description
                    </label>
                    <textarea name="description" id="description" rows="4" placeholder="A detailed description of the product's features and benefits." class="w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2.5 bg-gray-50 text-gray-900 placeholder-gray-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description', $product->description) }}</textarea>
                    @error('description') 
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p> 
                    @enderror
                </div>
                
                {{-- Product Price Field --}}
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V5m0 3v3a3 3 0 003 3m-3-3V5m0 3v3a3 3 0 00-3 3m3-3h3m-3-3H9m-3 3h3" />
                        </svg>
                        Price
                    </label>
                    <div class="relative rounded-lg shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">$</span>
                        </div>
                        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $product->price) }}" placeholder="0.00" class="w-full pl-7 pr-12 border border-gray-300 rounded-lg py-2.5 bg-gray-50 text-gray-900 placeholder-gray-400 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent @error('price') border-red-500 @enderror">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">USD</span>
                        </div>
                    </div>
                    @error('price') 
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p> 
                    @enderror
                </div>
                
                {{-- Buttons --}}
                <div class="pt-4 flex justify-end space-x-4">
                    <a href="{{ route('products.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Update Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection