<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
       return view ('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
       $image = $request->file('image')->store('/public/categories');
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
        ]);
        return to_route('admin.categories.index')->with('success','Category created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return view('admin.categories.edit',compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
         $request->validate([
            'name'=>'required',
            'description'=>'required'
         ]);
         $image= $category->image;
         if($request->hasFile('image')){
            Storage::delete($category->image);
            $image=$request->file('image')->store('public/categories');
         }
         $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image
         ]);
         return to_route('admin.categories.index')->with('success','Category Updated Successfully');;
    }

  
    public function destroy(Category $category)
    {
         Storage::delete('$category->image');
         $category->menus()->detach();
         $category->delete();
         
         return to_route('admin.categories.index')->with('danger','Category deleted Successfully');;
    }
}
