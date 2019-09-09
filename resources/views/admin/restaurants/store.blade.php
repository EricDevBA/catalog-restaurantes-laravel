@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Cadastro de Restaurantes</h1>

<hr>


<form action="{{route('restaurant.store')}}"  method="post">
    {{ csrf_field() }}

    <p class="form-group">
        <label>Nome do Restaurante</label>
        <input class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nome do Restaurante" type="text" name="name" value="{{old('name')}}">

    @if($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{$errors->first('name')}}</strong>
         </span>
    @endif

    </p>

    <p class="form-group">
        <label>Endereço</label>
        <input type="text" class="form-control @if($errors->has('address')) is-invalid @endif" placeholder="Endereço"  name="address"  value="{{old('address')}}">

     @if($errors->has('address'))
         <span class="invalid-feedback">
            <strong>{{$errors->first('address')}}</strong>
        </span>
    @endif
    </p>

    <p class="form-group">
        <label>Deixe seu comentário</label>
        <textarea name="description" placeholder="Deixe seu comentário" class="form-control @if($errors->has('description')) is-invalid @endif" id="" value="{{old('description')}}" cols=""></textarea>

    @if($errors->has('description'))
        <span class="invalid-feedback">
         <strong>{{$errors->first('description')}}</strong>
        </span>
    @endif

    </p>
    <input type="submit" class="btn btn-success" value="Cadastrar">
    <a href="{{route('restaurant')}}" class="btn btn-primary">Voltar</a>

    </form>
</div>
@endsection
