@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Editar Usuário</h1>

<hr>

<form action="{{route('user.update',['id' => $user->id])}}"  method="post">
    {{ csrf_field() }}

    <p class="form-group">
        <label>Nome</label>
        <input class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Seu nome" type="text" name="name" value="{{ $user->name}}">

    @if($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{$errors->first('name')}}</strong>
         </span>
    @endif

    </p>

    <p class="form-group">
        <label>Email</label>
        <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="Seu email"  name="email"  value="{{ $user->email }}">

     @if($errors->has('email'))
         <span class="invalid-feedback">
            <strong>{{$errors->first('email')}}</strong>
        </span>
    @endif
    </p>

    <p class="form-group">
        <label>Senha</label>
        <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Sua senha" name="password">

     @if($errors->has('password'))
         <span class="invalid-feedback">
            <strong>{{$errors->first('password')}}</strong>
        </span>
    @endif
    </p>

    <p class="form-group">
        <label>Confirmar senha</label>
        <input type="password" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" placeholder="Confirme a senha" name="password_confirmation">

     @if($errors->has('password_confirmation'))
         <span class="invalid-feedback">
            <strong>{{$errors->first('password_confirmation')}}</strong>
        </span>
    @endif
    </p>


    <input type="submit" class="btn btn-success" value="Atualizar Usuário">
    <a href="{{route('restaurant')}}" class="btn btn-primary">Voltar</a>

    </form>
</div>
@endsection
