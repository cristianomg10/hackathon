@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR INSTITUICAO</h1>
@endsection

@section('content')
    <form method="post" action="/instituicao/update/{{$instituicao->id}}">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome" placeholder="{{$instituicao->nome}}">
            <label for="nome_reduzido">Nome reduzido:</label>
            <input type="text" required class="form-control" name="nome_reduzido" placeholder="{{$instituicao->nome_reduzido}}">
            <label for="id_cidade_reitoria">ID Cidade Reitoria:</label>
            <input type="number" required class="form-control" name="id_cidade_reitoria" placeholder="{{$instituicao->id_cidade_reitoria}}">


            <input type="submit" class="btn btn-primary mt-2" >

        </div>

    </form>

@endsection

