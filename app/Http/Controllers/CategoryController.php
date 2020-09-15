<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $category = Category:: all();

        return view('adminpanel.category',compact('category'));
    }
    
    public function categoryadd(){
        return view('adminpanel.categoryadd');
    }

    public function store(Request $r){

        
        // $r->validate([
        //     'name' => 'required|unique:categoryadd',
        //     'image' =>'image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        // ]);
        $category = new category;
        if($r->hasFile('image')){
            $img = time().'.'.$r->image->getClientOriginalExtension();
            $r->image->move(public_path('/admin/assets/images/category'),$img);
            $category->image = $img;    
        }
        $slug = str_replace(" ","-",strtolower($r->name));
        $category->name =$r->name;
        $category->user_id = $r->user_id;
        $category->slug = $slug;
        $category->description =$r->description;
        $category->tag = $r->tag;

        $category->save();
        
       return view('adminpanel.categoryadd');
       //return back()->with('success','success');
    }
   
    public function delete(request $r){
        $id = $r->id;
        $category = Category::find($id);
        $category -> delete();
        return redirect('/category')->withSuccess('post delete');
    }

    public function edit(Request $r){
        $id = $r->id;
        $category = Category::find($id);
        return view('adminpanel.categoryupdate',compact('category'));
    }
    public function categoryupdate(Request $r){
        $id = $r->id;
        $category = Category::find($id);
        if($r->hasFile('image')){
            $img = time().'.'.$r->image->getClientOriginalExtension();
            $r->image->move(public_path('/admin/assets/images/category'),$img);
            $category->image = $img;    
        }
        $category->name = $r->name;
        
        $category->slug = $r->slug;
        $category->description = $r->description;
        $category->tag = $r->tag;
        $category->save();
        return redirect('/category')->withSuccess('post success');
    }

    public function single($id){
        $category = Category::find($id);
        return view('adminpanel.categoryview',compact('category'));
    }

}
