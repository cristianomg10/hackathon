@extends('../layout')

@section('header')
    <h1 class="display-4">CURSOS</h1>
@endsection

@section('content')
<ul class="list-group">
    @foreach($Cursos as $Curso)
        <li class="list-group-item align-items-center">ID #{{$Curso->id}} | Instituição: {{$Curso->id_instituicao}} | Nome: {{$Curso->nome}} | Turno: {{$Curso->turno}} | Nivel: {{$Curso->nivel}} | Cidade {{$Curso->cidade}} | Ano ingresso: {{$Curso->ano_inicial_oferta}} | Semestre ingresso: {{$Curso->semestre_inicial_oferta}} |
            <form method="get" action="/cursos/{{$Curso->id}}/edit/">
                @csrf
                <button class="btn btn-secondary mt-2 ">Editar</button>
            </form>
            <form method="post" action="/cursos/remover/{{$Curso->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Curso->nome}} ?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger  mt-2  ">Excluir</button>
            </form>

        </li>
    @endforeach
</ul>
<form method="get" action="cursos/create">
    @csrf
    <button class="btn btn btn-success mt-2 ">Adicionar</button>
</form>
@endsection


