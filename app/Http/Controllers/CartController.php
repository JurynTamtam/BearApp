<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Cart;
 
class CartController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieves all cart records ordered by 'created_at' in descending order (newest first).
        $cart = Cart::orderBy('created_at', 'DESC')->get();

        // Passes the retrieved cart data to the 'carts.index' view using compact().
        return view('carts.index', compact('cart'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Finds a specific cart record by its ID or throws a 404 error if not found.
        $cart = Cart::findOrFail($id);

        // Passes the retrieved cart data to the 'carts.show' view using compact().
        return view('carts.show', compact('cart'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Finds the specific cart record by its ID or throws a 404 error if not found.
        $cart = Cart::findOrFail($id);

        // Deletes the retrieved cart record from the database.
        $cart->delete();

        // Redirects back to the 'carts' route with a success message.
        return redirect()->route('carts')->with('success', 'Product deleted successfully');
    }
    
}