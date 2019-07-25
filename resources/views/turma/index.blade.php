@extends('../layout')

@section('header')
    <h1 class="display-4">TURMAS</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($Turmas as $Turma)
            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$Turma->id}} | Nome: {{$Turma->nome}}
                <span class="d-flex">
                    <form method="get" action="/turmas/{{$Turma->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/turmas/{{$Turma->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/turmas/remover/{{$Turma->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Turma->nome}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
    @endforeach
    </ul>
    <form method="get" action="turmas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection

