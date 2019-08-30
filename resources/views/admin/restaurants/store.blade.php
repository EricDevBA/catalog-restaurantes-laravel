<h1>Inserção de Restaurantes</h1>

<hr>


<form action="{{route('restaurant.store')}}"  method="post">
    {{ csrf_field() }}

    <p>
        <label>Nome do Restaurante</label>
        <input type="text" name="name" value="{{old('name')}}"> <br>
        @if($errors->has('name'))
           {{$errors->first('name')}}
        @endif
    </p>

    <p>
        <label>Endereço</label>
        <input type="text" name="address"  value="{{old('address')}}">
        @if($errors->has('address'))
            {{$errors->first('address')}}
        @endif
    </p>

    <p>
        <label>Deixe seu comentário</label><br>
        <textarea name="description" id="" value="{{old('description')}}" cols=""></textarea> <br>
        @if($errors->has('description'))
            {{$errors->first('description')}}
        @endif

    </p>

    <input type="submit" value="Cadastrar">


</form>
