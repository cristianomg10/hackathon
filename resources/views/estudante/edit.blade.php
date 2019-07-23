@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR ESTUDANTE</h1>
@endsection

@section('content')
    <form method="post" action="/estudante/update/{{$estudante->id}}">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome" placeholder="{{$estudante->nome}}">
            <label for="id_usuario">ID Usuário:</label>
            <input type="number" required class="form-control" name="id_usuario" placeholder="{{$estudante->id_usuario}}">
            <label for="id_turma_curso">ID Curso Turma:</label>
            <input type="number" required class="form-control" name="id_curso_turma" placeholder="{{$estudante->id_turma_curso}}">


            <input type="submit" class="btn btn-primary mt-2" >

        </div>

    </form>

@endsection

