@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('restaurant.new')}}" class="float-right btn btn-success">Novo</a><br>

    <h1 class="text-center">Restaurantes</h1>

<br>

<table class="table table-striped">
    <thead>
        <tr>

        <th>Id</th>
        <th>Nome</th>
        <th>Criado em</th>
        <th>Ações</th>


        </tr>

    </thead>

    <tbody>
        @foreach ($restaurants as $r )
        <tr>

            <th>{{$r->id}}</th>
            <th>{{$r->name}}</th>
            <th>{{$r->created_at}}</th>
            <td>
                <a href="{{route('restaurant.edit',['restaurant' => $r->id])}}" class="btn btn-primary">EDITAR</a>
                <a href="{{route('restaurant.remove',['id' => $r->id])}}" class="btn btn-danger">EXCLUIR</a>

            </td>

            </tr>
        @endforeach


    </tbody>

</table>

</div>

@endsection
