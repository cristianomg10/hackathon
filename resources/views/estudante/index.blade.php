@extends('../layout')

@section('header')
    <h1 class="display-4">ESTUDANTES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($estudantes as $estudante)
     <li class="list-group-item align-items-center">ID #{{$estudante->id}} | {{$estudante->nome}} | ID USUARIO: {{$estudante->id_usuario}} | ID CURSO TURMA: {{$estudante->id_turma_curso}}
         <form method="post" action="/estudante/edit/{{$estudante->id}}">
             @csrf
             <button class="btn btn-secondary mt-2 ">Editar</button>
         </form>
         <form method="post" action="/estudante/destroy/{{$estudante->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$estudante->nome}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger  mt-2  ">Excluir</button>
         </form>

     </li>
    @endforeach
    </ul>
    <form method="get" action="estudante/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

