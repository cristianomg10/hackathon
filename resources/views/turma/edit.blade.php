
@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR TURMA</h1>
@endsection

@section('content')


    <form class="form-horizontal" action="{{Route('turmas.update',['turmas'=> $Turma->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="login">Nome:</label>
            <input type="text" class="form-control" id="login" placeholder="{{$Turma->nome}}" name="nome" required>

            <label  for="email">Curso:</label>
            <input type="text" class="form-control" id="email" placeholder="{{$Turma->id_curso}}" name="id_curso" required>

            <input type="submit" class="btn btn-primary mt-2">
        </div>

    </form>
    </div>
@endsection

