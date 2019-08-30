<h1>Restaurantes</h1>

<hr>

<a href="{{route('restaurant.new')}}">Novo</a>
<br>

<table>
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
                <a href="{{route('restaurant.edit',['restaurant' => $r->id])}}">Editar</a>
                <a href="{{route('restaurant.remove',['id' => $r->id])}}">Excluir</a>

            </td>

            </tr>
        @endforeach


    </tbody>

</table>
