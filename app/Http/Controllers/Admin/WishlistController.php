<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class WishlistController extends Controller
{
    //

    public function index(){

        $wishlist=Wishlist::where('user_id', Auth::id())->get();
        return view('ui-panel.products.wishlist', compact('wishlist'));
    }

    public function add(Request $request){

        if(Auth::check())
        {

            $prod_id =$request->input('product_id');

            if(Product::find($prod_id))

            {

                $wish =new Wishlist();
                $wish->prod_id =$prod_id;
                $wish->user_id= Auth::id();
                $wish->save();
                return response()->json(['status' =>"product Added to Wishlist"]);
            }

            else{

                return response()->json(['status' => "Product doesnot exists"]);
            }
        }
        else{
 
                return response()->json(['status'=> "login to Contine"]);


        }



    }



    public function deleteitem(Request $request){

        if(Auth::check()){

            $prod_id=$request->input('prod_id');

            if(WishList::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()){

               
              $wish=Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();

              $wish->delete();
              return response()->json(['status'=> "product Deleted Successfully"]);
            }


        }
         else{

            return response()->json(['status'=> "login to continue"]);
         }
       

       } 
}
