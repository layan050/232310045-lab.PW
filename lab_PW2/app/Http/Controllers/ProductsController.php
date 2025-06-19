<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $products = Products::latest()->paginate(5);
    //     return view('module.master-data.products.index', compact('products'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function index()
    {
        
        $products = Products::with('category')
        ->where('user_id', auth()->id())
        ->latest()
        ->paginate(5);

        $categories = Category::all();
        return view('module.master-data.products.index', compact('products', 'categories'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products();
        if(!empty($request->id)){
            $request->validate([
                'name' => 'required|max:50',
                'description' => 'nullable',
                'price' => 'required|numeric',
                'category_id' => 'required|exists:categories,id',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_active' => 'required|boolean'
            ]);
            $results = $products->updateData($request->all());
            return redirect()->route('products.index')
                ->with('success', ($results) ? 'Product updated successfully.' : 'Product not found or update failed.');
        }else{
            $request->validate([
                'name' => 'required|max:50',
                'description' => 'nullable',
                'price' => 'required|numeric',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_active' => 'required|boolean'
            ]);
            $data = $request->all();
            $data['user_id'] = auth()->id(); // Tambahkan user_id yang sedang login
            $results = $products->storeData($data);
            return redirect()->route('products.index')
                ->with('success', ($results) ? 'Product created successfully.' : 'Product creation failed.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $products = Products::findOrFail($id);
            
            // Debug - uncomment if needed
            // dd($products);
            
            return view('module.master-data.products.show', compact('products'));
        } catch (\Exception $e) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found or error occurred: ' . $e->getMessage());
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = new Products();
        $deleted = $product->removeByCondition(['id' => $id]);

    return response()->json([
        'success' => $deleted,
        'message' => $deleted ? 'Product deleted successfully.' : 'Product deletion failed.'
    ]);
    }
}
