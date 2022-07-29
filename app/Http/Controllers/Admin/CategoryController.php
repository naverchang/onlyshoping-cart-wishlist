<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller

{
    //
    public function index(){
        $categorys=Category::all();
        return view('admin-panel.category.index', compact('categorys'));
    }

    public function create(){

        return view('admin-panel.category.create');
    }

    public function store(Request $request){

        $category= new Category();

        if($request->hasFile('image')){
            $file=$request->file('image');

            $ext=$file->getClientOriginalExtension();
            $filename=time(). '.' .$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image=$filename;

                }
                $category->name=$request->input('name');
                $category->slug=$request->input('slug');
                $category->description=$request->input('description');
                $category->status=$request->input('status') ==TRUE ? '1' : '0';
                $category->popular=$request->input('popular') ==TRUE ? '1':'0';
                $category->meta_title=$request->input('meta_title');
                $category->meta_keywords=$request->input('meta_keywords');
                $category->meta_descrip=$request->input('meta_description');
                $category->save();
                return redirect('/category')->with('status', "Category Added Succeessfully OK");
      
}

public function edit($id){

    $category=Category::find($id);

    return view('admin-panel.category.edit', compact('category'));
}

public function update(Request $request, $id){

    $category=Category::find($id);
    if($request->hasFile('image')){

        $path='assets/uploads/category/'.$category->image;
        if(File::exists($path));
        {
           File::delete($path);
        }
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time(). '.' .$ext;
        $file->move('assets/uploads/category', $filename);
        $category->image=$filename;
    }

    $category->name=$request->input('name');
    $category->slug=$request->input('slug');
    $category->description=$request->input('description');
    $category->status=$request->input('status') ==TRUE ? '1' : '0';
    $category->popular=$request->input('popular') ==TRUE ? '1':'0';
    $category->meta_title=$request->input('meta_title');
    $category->meta_keywords=$request->input('meta_keywords');
    $category->meta_descrip=$request->input('meta_description');
    $category->update();

    return redirect('/category')->with('status', "Category Added Succeessfully updated!");
    
}

public function destroy($id){ 

   

    $category=Category::find($id);
     $filename=$category->image;
     File::delete('assets/uploads/category'. $filename);
    $category->delete();
    return redirect('/category')->with('status', "Category delete successfully");


}
}
