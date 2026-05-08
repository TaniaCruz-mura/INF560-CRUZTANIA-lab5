<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Lista paginada de autores con conteo de libros.
     */
    public function index()
    {
        $authors = Author::withCount('books')
            ->orderBy('last_name')
            ->paginate(15);

        return view('authors.index', compact('authors'));
    }

    /**
     * Muestra la ficha del autor con sus libros.
     */
    public function show(Author $author)
    {
        $author->load('books.category');

        return view('authors.show', compact('author'));
    }

    // Métodos placeholder — Guía 7
    public function create() {}
    public function store(Request $request) {}
    public function edit(Author $author) {}
    public function update(Request $request, Author $author) {}
    public function destroy(Author $author) {}
}