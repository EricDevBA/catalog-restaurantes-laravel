@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-center">Edição de Restaurantes</h1>

<hr>

<form action="{{route('restaurant.update',['id' => $restaurant->id])}}"  method="post">
    {{ csrf_field() }}

    <p class="form-group">
        <label>Nome do Restaurante</label>
        <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{$restaurant->name}}"> <br>

        @if($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{$errors->first('name')}}</strong>
        </span>
     @endif

    </p>

    <p class="form-group">
        <label>Endereço</label>
        <input type="text" name="address" class="form-control @if($errors->has('address')) is-invalid @endif" value="{{$restaurant->address}}">

    @if($errors->has('address'))
         <span class="invalid-feedback">
            <strong>{{$errors->first('address')}}</strong>
        </span>
     @endif

    </p>

    <p class="form-group">
        <label>Deixe seu comentário</label><br>
        <textarea name="description" id="" cols="30" class="form-control  @if($errors->has('description')) is-invalid @endif">{{$restaurant->description}}</textarea> <br>
     @if($errors->has('description'))
         <span class="invalid-feedback">
            <strong>{{$errors->first('description')}}</strong>
        </span>
     @endif

    </p>

    <input type="submit" class="btn btn-success" value="Atualizar">
    <a class="btn btn-primary" href="{{ route('restaurant') }}" role="button">Voltar</a><br>


</div>

</form>

@endsection
