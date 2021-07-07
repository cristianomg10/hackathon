@extends('../layout')




@section('header')
    <h1 class="display-4">ADICIONAR ESTUDANTE</h1>
@endsection

@section('content')
    <form method="post" action="{{Route('storeEstudante')}}">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome">
            <label for="id_instituicao">ID Instituição:</label>
            <input type="number" required class="form-control" name="id_instituicao">
            <label for="id_turma_curso">ID Turma Curso:</label>
            <input type="number" required class="form-control" name="id_turma_curso" >
            <input type="hidden" name="id_usuario" value="{{$usuario->id}}">
            <input type="submit" class="btn btn-primary mt-2" >
        </div>

    </form>

@endsection

