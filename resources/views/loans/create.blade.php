@extends('loans.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Novo empréstimo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('loans.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Confira os dados digitados !!!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('loans.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número do registro do livro:</strong>
                <input type="text" name="book_id" class="form-control" placeholder="Número do registro do livro">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Retirado por:</strong>
                <input type="text" name="user_id"  class="form-control"  placeholder="Nome do membro do grupo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data prevista para entrega:</strong>
                <input type="date" class="form-control"  name="dt_prev_entrega" placeholder="Data prevista para a devolução">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data do empréstimo:</strong>
                <input type="date"  class="form-control"  name="dt_emprestimo" placeholder="Data do empréstimo">
            </div>
        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
   
</form>
@endsection