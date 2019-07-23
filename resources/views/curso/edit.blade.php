
@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR CURSO</h1>
@endsection

@section('content')

    <form class="form-horizontal"action="{{Route('cursos.update',['cruso'=>$Curso->id])}}"method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="{{$Curso->nome}}" name="nome" required>

            <label for="instituicao">Instituição:</label>
            <input type="text" class="form-control" name="id_instituicao" placeholder="{{$Curso->id_instituicao}}" required>


            <label for="turno">Turno:</label>
            <input type="text" class="form-control" id="turno" placeholder="{{$Curso->turno}}" name="turno" required>


            <label for="nível">Nivel:</label>
            <input type="text" class="form-control" id="nível" placeholder="{{$Curso->nivel}}" name="nivel" required>


            <label for="id_cidade">Cidade:</label>
            <input type="text" class="form-control" id="id_cidade" placeholder="{{$Curso->id_cidade}}" name="id_cidade" required>


            <label for="ano_inicial_oferta">Ano:</label>
            <input type="text" class="form-control" id="ano_inicial_oferta" placeholder="{{$Curso->ano_inicial_oferta}}" name="ano_inicial_oferta" required>


            <label for="semestre_inicial_oferta">Semestre:</label>
            <input type="text" class="form-control" id="semestre_inicial_oferta" placeholder="{{$Curso->semestre_inicial_oferta}} name="semestre_inicial_oferta" required>

            <input type="submit" class="btn btn-primary mt-2">

    </form>
    </div>
@endsection

