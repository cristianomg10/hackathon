@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR CURSO ALVO VAGA</h1>
@endsection

@section('content')

    <form class="form-horizontal" action="{{Route('alvos.update',["Alvos"=>$Alvos->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="curso">Curso:</label>
            <input type="text" class="form-control" id="curso" placeholder="{{$Alvos->id_curso}}" name="id_curso">

            <label  for="cnpj">Vaga:</label>
            <input type="text" class="form-control" id="cnpj" placeholder="{{$Alvos->id_vaga}}" name="id_vaga">

            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>

@endsection

