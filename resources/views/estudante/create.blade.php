@extends('../layout')




@section('header')
    <h1 class="display-4">ADICIONAR ESTUDANTE</h1>
@endsection

@section('content')
    <form method="post">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome">
            <label for="id_usuario">ID Usuário:</label>
            <input type="number" required class="form-control" name="id_usuario">
            <label for="id_turma_curso">ID Turma Curso:</label>
            <input type="number" required class="form-control" name="id_turma_curso" >

            <input type="submit" class="btn btn-primary mt-2" >
        </div>

    </form>

@endsection

