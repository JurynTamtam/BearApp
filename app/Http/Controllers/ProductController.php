<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'details' => 'required',
        'price' => 'required|numeric',
        'img_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        $imageName = time().'.'.$request->img_path->extension();  
        $request->img_path->move(public_path('images'), $imageName);

        // Save product with image path and title
        $validatedData = [
            'title' => $request->input('title'),
            'details' => $request->input('details'),
            'price' => $request->input('price'),
            'img_path' => 'images/' . $imageName,
        ];

        Product::create($validatedData);

        return redirect()->route('products')->with('success', 'Product added successfully');

}

  
    /**
     * Display the specified product.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing of the product.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'details' => 'required',
        'price' => 'required|numeric',
        'img_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $product->update([
        'title' => $request->input('title'),
        'details' => $request->input('details'),
        'price' => $request->input('price')
    ]);

    // Update image path if a new image is provided
    if ($request->hasFile('img_path')) {
        $this->handleImageUpload($request, $product);
    }

    return redirect()->route('products')->with('success', 'Product updated successfully');
    }

    private function handleImageUpload(Request $request, Product $product)
    {
        $imageName = time().'.'.$request->img_path->extension();  
        $request->img_path->move(public_path('images'), $imageName);

        $product->img_path = 'images/' . $imageName;
        $product->save();
}

   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Product deleted successfully');
    }
}