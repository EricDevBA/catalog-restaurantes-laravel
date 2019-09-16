@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('user.new')}}" class="float-right btn btn-success">Novo</a><br>

    <h1 class="text-center">Usuários</h1>

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
        @foreach ($users as $u )
        <tr>

            <th>{{$u->id}}</th>
            <th>{{$u->name}}</th>
            <th>{{$u->created_at}}</th>
            <td>
                <a href="{{route('user.edit',['user' => $u->id])}}" class="btn btn-primary">EDITAR</a>
                <a href="{{route('user.remove',['id' => $u->id])}}" class="btn btn-danger">EXCLUIR</a>

            </td>

            </tr>
        @endforeach


    </tbody>

</table>

</div>

@endsection
