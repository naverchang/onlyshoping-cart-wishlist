<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
        $orders=Order::where('user_id', Auth::id())->get();
        $orderitem=OrderItem::all();
        return view('ui-panel.order.index', compact('orders', 'orderitem'));
    }

    public function view($id){
        
        $orders=Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('ui-panel.order.view', compact('orders'));
    }

   

}
