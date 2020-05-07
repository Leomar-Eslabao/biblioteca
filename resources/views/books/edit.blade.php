@extends('books.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Existe algum problema com os dados digitados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('books.update',$book->id) }}" method="POST">
    	@csrf
        @method('PUT')
   
                     
	<div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título:</strong>
                <input type="text" name="titulo" value="{{$book->titulo}}" class="form-control" placeholder="Titulo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                <input type="text" name="autor" value="{{$book->autor}}" class="form-control" placeholder="autor">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopse:</strong>
                <textarea class="form-control"  style="height:150px" name="sinopse" placeholder="Sinopse">{{$book->sinopse}}</textarea>
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISBN:</strong>
                <input type="text" name="isbn" value="{{$book->isbn}}" class="form-control" placeholder="isbn">
            </div>
         </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Exemplar:</strong>
                <input type="text" name="exemplar" value="{{$book->exemplar}}" class="form-control" placeholder="exemplar">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo:</strong>
                <input type="text" name="tipo" value="{{$book->tipo}}" class="form-control" placeholder="tipo">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="status" value="{{$book->status}}" class="form-control" placeholder="status">
			</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gênero:</strong>
                <input type="text" name="genero" value="{{$book->genero}}" class="form-control" placeholder="genero">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Editora:</strong>
                <input type="text" name="editora" value="{{$book->editora}}" class="form-control" placeholder="editora">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
   
   </form>
@endsection
