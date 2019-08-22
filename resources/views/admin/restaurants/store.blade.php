<h1>Inserção de Restaurantes</h1>

<hr>

<form action="{{route('restaurant.store')}}"  method="post">
    {{ csrf_field() }}

    <p>
        <label>Nome do Restaurante</label>
        <input type="text" name="name"> <br>

    </p>

    <p>
        <label>Endereço</label>
        <input type="text" name="address">

    </p>

    <p>
        <label>Deixe seu comentário</label><br>
        <textarea name="description" id="" cols=""></textarea> <br>
    </p>

    <input type="submit" value="Cadastrar">


</form>
