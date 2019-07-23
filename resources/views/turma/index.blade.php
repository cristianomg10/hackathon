@extends('../layout')

@section('header')
    <h1 class="display-4">TURMAS</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($Turmas as $Turma)
            <li class="list-group-item align-items-center">ID #{{$Turma->id}} | Nome: {{$Turma->nome}} | ID Curso #{{$Turma->id_curso}}
                <form method="get" action="/turmas/{{$Turma->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form method="post" action="/turmas/remover/{{$Turma->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Turma->nome}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>

            </li>
    @endforeach
    </ul>
    <form method="get" action="turmas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection

