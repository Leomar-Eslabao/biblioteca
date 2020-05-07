@extends('books.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Livros do Grupo Libertação</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Cadastrar novo Livro</a>
                


            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Item</th>
            <th>Registro</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Tipo</th>
            <th>Gênero</th>
            <th>ISBN</th>
            <th>Sinopse</th>
            <th>Editora</th>
            <th>Status</th>
            <th>Exemplar</th>


            <th width="280px">Ação</th>
        </tr>
        @foreach ($books ?? '' as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $book->id}}</td>
            <td>{{ $book->titulo }}</td>
            <td>{{ $book->autor }}</td>
            <td>{{ $book->tipo }}</td>
            <td>{{ $book->genero }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->sinopse }}</td>
            <td>{{ $book->editora }}</td>
            <td>{{ $book->status }}</td>
            <td>{{ $book->exemplar }}</td>
            


            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $books ?? ''->links() !!}
      
@endsection