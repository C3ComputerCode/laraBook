<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Photo;
use App\Models\BookCategory;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function search(Request $request){
    //     $search = $request->input('search');
    //     return $search;
    // }

    public function customer(){
        $books = Book::all();
        return view('welcome',compact('books'));
    }


    public function index()
    {


        if(isset(request()->search)){
            $search = request()->search;
            // dd($search);
            $books = Book::where('name', 'like', "%$search%")
            ->orWhere('author','like',"%$search%")
            ->latest()->paginate(5)->appends(['search' => $search]);
        }else{
            $books = Book::latest()->paginate(5);

        }


        // $books = Book::when(isset(request()->search),function($query){
        //     $search = request()->search;
        //     // dd($search);
        //     $query->where('name', "LIKE", "%$search%")->orWhere('author',"LIKE","%$search");
        // })->latest()->paginate(5);

        // $books = Book::latest()->paginate(5);

        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookCategories = BookCategory::all();
        return view('book.create',compact('bookCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = new Book;
        $photo= new Photo();





        // return $request->all();

        // $request->validate([
        //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);



        $book->book_id =  $request->book_id;
        $book->name = $request->name;
        $book->author= $request->author;
        $book->total_copies= $request->total_copies;
        $book->book_category_id= $request->book_category_id;
        $book->publication_date= $request->publication_date;

        $book->save();

        if ($request->hasFile('photo')) {

            $fileName = time()."-".uniqid()."_photo.".$request->file('photo')->extension();
            $filepath = $request->file('photo')->storeAs("uploads", $fileName,"public");

            $photo->photo = $fileName;
            $photo->book_id= $book->id;
            $photo->save();

        }

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $id = $book->id;
        $book = Book::findOrFail($id);
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $id = $book->id;
        $book = Book::findOrFail($id);

        $book->book_id =  $request->book_id;
        $book->name = $request->name;
        $book->author= $request->author;
        $book->total_copies= $request->total_copies;
        $book->book_category_id= $request->book_category_id;
        $book->publication_date= $request->publication_date;

        $book->update();
        return redirect()->route('books.index')->with('info','Book is Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $id = $book->id;
        $book = Book::findOrFail($id);
        $book->delete();
        return back()->with("info","Book is Deleted.");
    }
}
