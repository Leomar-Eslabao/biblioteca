@extends('loans.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Empréstimos de Livros do Grupo Libertação</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('loans.create') }}"> Cadastrar novo empréstimo de Livro</a>
                


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
            <th>Número de Registro do Livro</th>
            <th>Retirado por</th>
            <th>Data prevista para entrega</th>
            <th>Data de empréstimo</th>
           


            <th width="280px">Ação</th>
        </tr>
        @foreach ($loans ?? '' as $loan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $loan->book_id}}</td>
            <td>{{ $loan->user_id}}</td>
            <td>{{ $loan->dt_prev_entrega}}</td>
            <td>{{ $loan->dt_emprestimo}}</td>
            
            <td>
                <form action="{{ route('loans.destroy',$loan->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('loans.show',$loan->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('loans.edit',$loan->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $loans ?? ''->links() !!}
      
@endsection