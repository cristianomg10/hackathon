@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR CURSO ALVO VAGA</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('alvos.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="razao_social">Curso:</label>
            <input type="text" class="form-control" id="razao_social" placeholder="insira o curso" name="id_curso">

            <label  for="cnpj">Vaga:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="insira a vaga" name="id_vaga">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

