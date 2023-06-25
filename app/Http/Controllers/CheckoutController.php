<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function checkout(Request $request)
{
    // Retrieve cart items from the request
    $cartItems = CartItem::all();
    $user = Auth::user();

    foreach ($cartItems as $cartItem) {
        // Check if an order already exists for the current product
        $existingOrder = Order::where('user_id', $user->id)
            ->where('orderId', $cartItem->product_id)
            ->first();

        if ($existingOrder) {
            // Update existing order's quantity and total price
            $existingOrder->quantity += $cartItem->quantity;
            $existingOrder->totalPrice += $cartItem->price;
            $existingOrder->save();
        } else {
            // Create a new order
            $order = new Order();
            $order->user_id = $user->id;
            $order->orderId = $cartItem->product_id;
            $order->customerName = $user->name;
            $order->productName = $cartItem->title;
            $order->quantity = $cartItem->quantity;
            $order->totalPrice = $cartItem->price;
            $order->save();
        }
    }

    // Optionally, you can return a response or redirect the user
    return response()->json(['message' => 'Order created successfully']);
}
}
