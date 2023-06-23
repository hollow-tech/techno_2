<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Retrieve the authenticated user if available
        $user = Auth::user();

        // Retrieve the cart items
        $cartItems = Cart::all();

        // Validate the cart items (You can add your own validation logic here)

        // Create a new order
        $order = new Order();

        if ($user) {
            // If the user is authenticated, use the user's information
            $order->customerName = $user->name;
        } else {
            // If the user is not authenticated, use the provided customer name
            $order->customerName = $request->input('customerName');
        }

        foreach ($cartItems as $cartItem) {
            // Populate the order fields from cart items
            $orderItem = [
                'product' => $cartItem->title,
                'quantity' => $cartItem->quantity,
                'totalPrice' => $cartItem->price,
            ];

            $order->items()->create($orderItem);
        }

        // Save the order
        $order->save();

        // Optionally, update the cart (Remove items or mark them as ordered)

        // Provide feedback or redirection
        return response()->json(['message' => 'Order placed successfully']);
    }
}
