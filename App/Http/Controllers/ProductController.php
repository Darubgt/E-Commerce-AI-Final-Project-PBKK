<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Produk;
use App\Models\Ruangan;

class ProductController extends Controller
{
    /**
     * Display the specified product along with additional information.
     *
     * Retrieves the product by its ID, fetches a random selection of other products,
     * and gathers extra information such as categories and rooms related to the product.
     * Returns the 'product' view with the product, other products, and additional information.
     *
     * @param int $id The ID of the product to display.
     * @return \Illuminate\Contracts\View\View The view displaying the product details.
     */
    public function showProduct($id)
    {
        $produk = Produk::findOrFail($id);
        $produklain = Produk::inRandomOrder()->take(8)->get();

        $extraInfo = [
            'categories' => Item::where('id_item', $produk->item_id_item)->get(),
            'rooms' => Ruangan::where('id_ruangan', $produk->ruangan_id_ruangan)->get(),
        ];

        return view('product', compact('produk', 'produklain', 'extraInfo'));
    }

    public function home(){
        $produk = Produk::all();
        $kategori = Item::all();

        return view("index", compact("produk", "kategori"));
    }

    /**
     * Adds a product to the authenticated user's cart.
     * 
     * Creates a new cart item with the given product ID, user ID, and quantity.
     * Redirects back to the previous page with a success message.
     * 
     * @param \Illuminate\Http\Request $request The request containing the product ID and quantity.
     * @return \Illuminate\Http\RedirectResponse The redirect response with a success message.
     */
    public function addToCart(Request $request){
        $produk = Produk::findOrFail($request->input('product_id'));

        $cart = Cart::create([
           'product_id' => $produk->id_produk,
           'user_id' => $request->user()->id,
           'quantity' => $request->input('quantity'),
        ]);

        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart(){
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        return view('cart', compact('carts'));
    }

    public function deleteCart(Request $request){
        // dd($request->input('cartid'));
        $cart = Cart::findOrFail($request->input('cartid'));
        $cart->delete();

        return redirect()->back()->with('success', 'Product removed successfully!');
    }

    /**
     * Deletes all cart items belonging to the authenticated user.
     * 
     * Iterates through all cart items of the current user and deletes each one.
     * Redirects back to the previous page with a success message.
     * 
     * @return \Illuminate\Http\RedirectResponse The redirect response with a success message.
     */
    public function deleteAllCart(){
        $carts = Cart::where('user_id', auth()->user()->id)->get();

        if($carts !== null){
            foreach($carts as $cart){
                $cart->delete();
            }
            return redirect()->back()->with('success', 'Payment Completed ! (demo)');
        }

        return redirect()->back()->with('success', 'Something went wrong while deleting all cart items!');
    }

}