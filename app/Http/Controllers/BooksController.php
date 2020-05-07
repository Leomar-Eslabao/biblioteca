<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a view books no metodo index
       $books = Book::latest()->paginate(5);

        return view ('books.index',compact('books')) ->with('i', (request()->input('page',1)-1)*5);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|unique:books|max:255',
            'autor' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('books/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Store the blog post...

        Book::create($request->all());
  
        return redirect()->route('books.index')
                        ->with('success','Item criado com sucesso!');
    }


           
            //dd($request)
       



    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //

        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //dd($request);
      $validator = Validator::make($request->all(), [
            'titulo' => 'required|unique:books|max:255',
            'autor' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('books/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $book->update($request->all());
        return redirect()->route('books.index')->with('success','Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success','Item '.($book->titulo).' deletado com sucesso!');
       
    }
}
