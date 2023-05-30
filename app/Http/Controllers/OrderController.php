<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id)
    {
        $order = Order::find($id);

        return view('admin.orders.edit', compact('order'));
    }

    //

    public function store(Request $request)
    {
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->save();

        // no check, go in minus
        $product = Product::find($order->product_id);
        $product->quantity = $product->quantity - $order->quantity;
        $product->save();

        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->save();

        return redirect('dashboard/orders');
    }

    public function destroy($id)
    {
        Order::find($id)->delete();

        return redirect()->back();
    }
}
