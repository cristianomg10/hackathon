@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR CIDADES</h1>
@endsection

@section('content')
    <form method="post" action="/cidade/update/{{$cidade->id}}">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome" placeholder="{{$cidade->nome}}">
            <label for="estado">Estado:</label>
            <input type="text" required class="form-control" name="estado" placeholder="{{$cidade->estado}}">
            <input type="submit" class="btn btn-primary mt-2" >

        </div>

    </form>

@endsection

