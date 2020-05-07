@extends('books.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Nome Completo">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                <input type="email" value="{{$user->email}}" class="form-control" name="email" placeholder="e-mail">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="tel" value="{{$user->telefone}}"  name="telefone" class="form-control"  placeholder="(cod. área) Número do telefone">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Celular:</strong>
                <input type="tel" value="{{$user->celular}}"  name="celular" class="form-control" placeholder="(cod. área) - Número Celular">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endereço:</strong>
                <input type="text" value="{{$user->endereco}}" name="endereco" class="form-control"  placeholder="Logradouro - número">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                <input type="text" value="{{$user->cidade}}"  name="cidade" class="form-control"  placeholder="Cidade / Estado">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                <input type="text" value="{{$user->estado}}"  name="estado" class="form-control"  placeholder="Estado">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" value="{{$user->status}}"  name="status" class="form-control"  placeholder="Status: 1-ativo 2-inativo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                <input type="text"  value="{{$user->categoria}}"  name="categoria" class="form-control"  placeholder="1-usuário 2-administrador">
            </div>
        </div>


 
    </div>  



@endsection