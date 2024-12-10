<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');// asigurare ca e admin
    }

    public function index()
    {        
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show(int $id)
    {
        $books = Book::with('category')->findOrFail($id);

        return view('books.show', [
            'tasks' => $books,
        ]);
    }


    public function create()
    { 
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Carte adăugată!');
    }

    public function edit(int $id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();

        return view('books.edit', compact('book','categories'));
    }

    public function update(Request $request, int $id)
    {
        $book = Book::findOrFail($id);
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $book->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
        ]);
    
        return redirect()->route('books.index');
    }
    
    public function destroy(int $id)
    {
        Book::findOrFail($id)->delete();

        return redirect()->route('books.index')->with('success', 'Carte ștearsă!');
    }
}
