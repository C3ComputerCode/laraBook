<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\UpdateBookCategoryRequest;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookCategories =  BookCategory::all();
        return view('bookcategory.index',compact('bookCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookCategoryRequest $request)
    {

        $bookCategory = new BookCategory;

        $bookCategory->name = $request->name;
        $bookCategory->save();
        return redirect()->route('bookcategories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookCategory $bookCategory,$id)
    {
        $bookCategory = BookCategory::find($id);
        return view("bookcategory.edit",compact("bookCategory"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookCategoryRequest $request, BookCategory $bookCategory, $id)
    {
        $bookCategory = BookCategory::find($id);

        $bookCategory->name = $request->name;
        $bookCategory->update();
        return redirect()->route("bookcategories.index")->with("info","Book Category Updated is successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookCategory $bookCategory,$id)
    {
        // return $bookCategory;
        // $id = $bookCategory->id;

        $bookCategory = BookCategory::find($id);
        $bookCategory->delete();
        return back()->with('info',"Category is Deleted...");
    }
}
