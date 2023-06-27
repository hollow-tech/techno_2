<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Response;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

  public function addToCart(Request $request)
{
    $id = $request->input('id');
    $product_id = $request->input('product_id');
    $title = $request->input('title');
    $price = $request->input('price');
    $discount = $request->input('discount');
    $image = $request->input('image');
    $quantity = 1; // Assuming the quantity is always 1 in this case
    $user = $request->user();

    // Check if the item already exists in the cart
    $cartItem = CartItem::where('id', $id)->first();

    if ($cartItem) {
        // If the item exists, update the quantity and price
        $cartItem->quantity += $quantity;
        $cartItem->save();
    } else {
        // If the item doesn't exist, create a new cart item
        $cartItem = new CartItem;
        $cartItem->id = $id;
        $cartItem->product_id = $product_id;
        $cartItem->title = $title;
        $cartItem->quantity = $quantity;
        $cartItem->price = $price; // Set the initial price here
        $cartItem->discount = $discount;
        $cartItem->image = $image;
        $cartItem->user_id = $user->id;

        $cartItem->save();
    }

    // Get the updated cart items list
    $cartItems = CartItem::all();


        $totalPrice = 0;

    foreach ($cartItems as $item) {
        $itemTotalPrice = $item->price * $item->quantity;
        $totalPrice += $itemTotalPrice;
    }
    // Format the total price if needed
    $formattedTotalPrice = number_format($totalPrice, 3, '.', '.');

    $data = [
        'cartItems' => $cartItems,
        'formattedTotalPrice' => $formattedTotalPrice,
    ];

    return redirect()->route('addToCart');
}

    // public function showCart()
    // {
    //     $cartItems = CartItem::all();


    //     $totalPrices = $cartItems->sum('price');


    //     $totalPrice = number_format($totalPrices, 3, '.', '.');



    //     return view('products.cart', compact('cartItems', 'totalPrice'));
    // }
   public function showCart()
{
    $cartItems = CartItem::all();

    $totalPrice = 0;

    foreach ($cartItems as $item) {
        $itemTotalPrice = $item->price * $item->quantity;
        $totalPrice += $itemTotalPrice;
    }

    $formattedTotalPrice = number_format($totalPrice, 3, '.', '.');



    return Inertia::render('shop/CartComponent', [
        'cartItems' => $cartItems,
        'formattedTotalPrice' => $formattedTotalPrice,
    ]);
}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


   public function increaseCartItemQuantity($itemId)
{


    $cartItem = CartItem::find($itemId);

    if (!$cartItem) {
        return redirect()->back(['message' => 'Item not found.'], 404);
    }else{
        // If the item exists, update the quantity and price
        $cartItem->quantity += 1;
        $cartItem->save();
    }




    return redirect()->back();
}



 public function decreaseCartItemQuantity($itemId)
{


    $cartItem = CartItem::find($itemId);

    if (!$cartItem) {
        return redirect()->back(['message' => 'Item not found.'], 404);
    }else{
        // If the item exists, update the quantity and price
        $cartItem->quantity -= 1;
        $cartItem->save();
    }




    return redirect()->back();
}

    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function deleteCartItem($id)
    {
        // Find the cart item by its ID and delete it
            $cartItem = CartItem::find($id);
            $cartItem->delete();
            return redirect()->back();
    }
    public function destroy(CartItem $cartItem)
    {
        //
    }
}
