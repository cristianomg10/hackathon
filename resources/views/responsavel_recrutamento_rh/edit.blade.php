@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR RESPONSAVEL RECRUTAMENTO RH</h1>
@endsection

@section('content')
    <form method="post" action="/responsavel_recrutamento_rh/update/{{$rrrh->id}}">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome" placeholder="{{$rrrh->nome}}" >
            <label for="email">E-mail:</label>
            <input type="email" required class="form-control" name="email" placeholder="{{$rrrh->email}}" >
            <label for="telefone">Telefone:</label>
            <input type="number" required class="form-control" name="telefone" placeholder="{{$rrrh->telefone}}" >
            <label for="id_empresa">ID Empresa:</label>
            <input type="number" required class="form-control" name="id_empresa" placeholder="{{$rrrh->id_empresa}}" >
            <input type="submit" class="btn btn-primary mt-2" >

        </div>

    </form>

@endsection

