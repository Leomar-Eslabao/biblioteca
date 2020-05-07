@extends('users.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Membros do Grupo Libertação</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Cadastrar novo usuário</a>
                


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
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Status</th>
            <th>Categoria</th>
            <th>Data de cadastro</th>
           


            <th width="280px">Ação</th>
        </tr>
        @foreach ($users ?? '' as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->telefone}}</td>
            <td>{{ $user->celular}}</td>
            <td>{{ $user->endereco}}</td>
            <td>{{ $user->cidade }}</td>
            <td>{{ $user->estado }}</td>
            <td>{{ $user->status }}</td>
            <td>{{ $user->categoria }}</td>
            <td>{{ $user->created_at}}</td>
            


            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $users ?? ''->links() !!}
      
@endsection


