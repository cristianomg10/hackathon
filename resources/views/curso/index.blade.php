@extends('../layout')

@section('header')
    <h1 class="display-4">CURSOS</h1>
@endsection

@section('content')
<ul class="list-group">
    @foreach($Cursos as $Curso)
        <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$Curso->id}} | Nome: {{$Curso->nome}}
            <span class="d-flex">
               <form method="get" action="/cursos/{{$Curso->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
            <form method="get" action="/cursos/{{$Curso->id}}/edit/">
                @csrf
            <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
            </form>
            <form method="post" action="/cursos/remover/{{$Curso->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Curso->nome}} ?')">
                @csrf
                @method('DELETE')
               <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
            </span>

        </li>
    @endforeach
</ul>
<form method="get" action="cursos/create">
    @csrf
    <button class="btn btn btn-success mt-2 ">Adicionar</button>
</form>
@endsection


