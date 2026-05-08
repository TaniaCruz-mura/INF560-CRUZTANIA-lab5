<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Lista paginada del catálogo de libros.
     */
    public function index()
    {
        $books = Book::with(['category', 'authors'])
            ->latest()
            ->paginate(12);

        return view('books.index', compact('books'));
    }

    /**
     * Muestra el formulario para crear un nuevo libro.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $authors    = Author::orderBy('last_name')->get();

        return view('books.create', compact('categories', 'authors'));
    }

    /**
     * Persiste un libro nuevo. (Pendiente — Guía 7).
     */
    public function store(Request $request)
    {
        // TODO: Guía 7
    }

    /**
     * Muestra la ficha de detalle de un libro.
     */
    public function show(Book $book)
    {
        $book->load(['authors', 'category', 'activeLoans.member.user']);

        return view('books.show', compact('book'));
    }

    /**
     * Muestra el formulario de edición. (Pendiente — Guía 7).
     */
    public function edit(Book $book)
    {
        // TODO: Guía 7
    }

    /**
     * Actualiza un libro. (Pendiente — Guía 7).
     */
    public function update(Request $request, Book $book)
    {
        // TODO: Guía 7
    }

    /**
     * Elimina un libro. (Pendiente — Guía 7).
     */
    public function destroy(Book $book)
    {
        // TODO: Guía 7
    }
}