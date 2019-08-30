<h1>Edição de Restaurantes</h1>

<hr>

<form action="{{route('restaurant.update',['id' => $restaurant->id])}}"  method="post">
    {{ csrf_field() }}

    <p>
        <label>Nome do Restaurante</label>
        <input type="text" name="name" value="{{$restaurant->name}}"> <br>
        @if($errors->has('name'))
            {{$errors->first('name')}}
     @endif

    </p>

    <p>
        <label>Endereço</label>
        <input type="text" name="address" value="{{$restaurant->address}}">
    @if($errors->has('address'))
            {{$errors->first('address')}}
     @endif

    </p>

    <p>
        <label>Deixe seu comentário</label><br>
        <textarea name="description" id="" cols="30" rows="10">{{$restaurant->description}}</textarea> <br>
     @if($errors->has('description'))
            {{$errors->first('description')}}
     @endif


    </p>

    <input type="submit" value="Atualizar">


</form>
