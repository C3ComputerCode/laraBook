<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(isset(request()->search)){
            $search = request()->search;
            // dd($search);
            $orders = Order::where('name', 'like', "%$search%")
            ->orWhere('author','like',"%$search%")
            ->latest()->paginate(5)->appends(['search' => $search]);
        }else{
            $orders = Order::latest()->paginate(5);

        }
        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "BookCreate";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreorderRequest $request)
    {   

        foreach($request->book_ids as $orderItem){
            $order = new Order();
            $order->book_id =  $orderItem;                    
            $order->user_id =  Auth::id();
            $order->order_date =  now();
            $order->save();
        }
        session()->forget('cart');
        return redirect()->route("customer.home");
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
