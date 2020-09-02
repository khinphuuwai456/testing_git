<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories=Subcategory::all();
        // dd($items);
        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        // $subcategories=Subcategory::all();
        return view('backend.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
                  
                  "name"=>'required',
                  "category"=>'required'
                  
        ]);
        //if include file,upload file
        // $imageName=time().'-'.$request->photo->extension();
        // $request->photo->move(public_path('backend/itemimg'),$imageName);
        // $path='backend/itemimg/'.$imageName;
        //data insert 
        $subcategory=new Subcategory();
        $subcategory->name=$request->name;
        $subcategory->category_id=$request->category;
        $subcategory->save();
        //redirect
        return redirect()->route('subcategories.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories=Category::all();
        // $subcategories=Subcategory::all();
        return view('backend.subcategories.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Subcategory $subcategory)
    {
        $request->validate([
                  
                  
                  "subcategory"=>'required',
                  "id"=>'required',
                  // "subcategory"=>'required'
        ]);
        //file upload if data
        // if($request->hasFile('photo')){
        //     $imageName=time().'-'.$request->photo->extension();
        //     $request->photo->move(public_path('backend/itemimg'),$imageName);
        //     $path='backend/itemimg/'.$imageName;
        // }else{
        //     $path=$request->oldphoto;
        // }
        //data update
        // $item=new Item();
        
        $subcategory->name=$request->subcategory;
        $subcategory->category_id=$request->id;
        $subcategory->save();
        //redirect
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
