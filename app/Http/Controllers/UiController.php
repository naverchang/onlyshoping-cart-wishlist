<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class UiController extends Controller
{
    //

    public function index(){
        

        $product=Product::where('trending', '1')->take(15)->get();
        $trending=Category::where('popular', '1')->take(15)->get();
     
        return view('ui-panel.index', compact('product', 'trending' ));
    }

    public function category(){
         $category=Category::where('status', '0')->get();
        return view('ui-panel.category', compact('category'));
    }

    
    public function categoryview($slug){

        if(Category::where('slug', $slug)->exists())
        {


            $category=Category::where('slug', $slug)->first();
            $products=Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('ui-panel.products.index' ,compact('category', 'products'));
        }else{

            return redirect('/')->with('status', "slug doesnot exits");
        }


    }

    public function productview($cate_slug, $prod_slug){

        // if(Category::where('slug', $cate_slug)->exists()){

        //     if(Product::where('slug', '$prod_slug')->exists()){

        //         $products=Product::where('slug', $prod_slug)->first();

              
        //         return view('ui-panel.products.view', compact('products'));
        //     }
        //     else{
        //         return redirect('/')->with('status', "the link was broken");
        //     }
        // }
         
    
         $products=Product::where('slug', $prod_slug)->first();
        

        return view('ui-panel.products.view', compact('products'));
       
}
}
