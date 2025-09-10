<?php

namespace App\Http\Controllers;

use App\Models\Product; // HINT: Uses the Product model.
use Illuminate\Http\Request; // HINT: Handles HTTP requests.

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * HINT: Shows a list of products.
     */
    public function index(Request $request)
    {
        // HINT: Starts a database query.
        $query = Product::query(); 

        // HINT: Checks for a 'search' query parameter.
        if ($request->has('search')) {
            // HINT: Filters products by name.
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        
        // HINT: Gets products with pagination.
        $products = $query->paginate(5); 

        // HINT: Returns the products list view.
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * HINT: Displays the create form.
     */
    public function create()
    {
        // HINT: Returns the product creation form view.
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     * HINT: Creates a new product.
     */
    public function store(Request $request)
    {
        // HINT: Validates the request data.
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        // HINT: Saves the new product.
        Product::create($validated); 

        // HINT: Redirects to the index with a success message.
        return redirect()->route('products.index')->with('success', 'Product Item created successfully. Thank you for your submission');
    }

    /**
     * Display the specified resource.
     * HINT: Shows a single product.
     */
    public function show(Product $product)
    {
        // HINT: Returns the product details view.
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     * HINT: Displays the edit form.
     */
    public function edit(Product $product)
    {
        // HINT: Returns the edit form view with product data.
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     * HINT: Updates an existing product.
     */
    public function update(Request $request, Product $product)
    {
        // HINT: Validates the updated data.
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        // HINT: Applies updates to the product.
        $product->update($validated);

        // HINT: Redirects with a success message.
        return redirect()->route('products.index')->with('success', 'Product item updated successfully. Thank you for your patient');
    }

    /**
     * Remove the specified resource from storage.
     * HINT: Deletes a product.
     */
    public function destroy(Product $product)
    {
        // HINT: Deletes the product from the database.
        $product->delete();
        
        // HINT: Redirects to the index with a deletion message.
        return redirect()->route('products.index')->with('success', 'Product Item Deleted Successfully. Thanks.');
    }
}