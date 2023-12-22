<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        if($request->file('img')){
            $img = $request->file('img')->store('/public/image');
            }
            else{
                $img='public/image/default.jpg';
            }
            // MASS ASSIGNMENT e bisogna metterle tutte insieme perchè se viene aggiunta dopo non funziona
            Category::create([
              'name'=>$request->name,
              'description'=>$request->description,
              
              'img'=>$img
            ]);

            return redirect()->back()->with('message','categoria inserita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
