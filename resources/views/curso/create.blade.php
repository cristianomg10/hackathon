@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR CURSO</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('cursos.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Insira o nome do curso" name="nome" required>

            <label for="instituicao">Instituição:</label>
            <input type="text" class="form-control" name="id_instituicao" placeholder="Insira o id da instituição" required>


            <label for="turno">Turno:</label>
            <input type="text" class="form-control" id="turno" placeholder="Insira o turno do curso" name="turno" required>


            <label for="nível">Nivel:</label>
            <input type="text" class="form-control" id="nível" placeholder="Insira o nivel" name="nivel" required>


            <label for="id_cidade">Cidade:</label>
            <input type="text" class="form-control" id="id_cidade" placeholder="Insira o id da cidade" name="id_cidade" required>


            <label for="ano_inicial_oferta">Ano:</label>
            <input type="text" class="form-control" id="ano_inicial_oferta" placeholder="Insira o ano que entrou na instituição" name="ano_inicial_oferta" required>


            <label for="semestre_inicial_oferta">Semestre:</label>
            <input type="text" class="form-control" id="semestre_inicial_oferta" placeholder="Insira o semestre que entrou na instituição" name="semestre_inicial_oferta" required>

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

