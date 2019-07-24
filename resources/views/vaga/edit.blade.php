@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR VAGA DE EMPREGO</h1>
@endsection

@section('content')


    <form class="form-horizontal" action="{{Route('vagas.update',["vaga"=>$Vagas->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label for="login">Titulo:</label>
            <input type="text" class="form-control" id="login" placeholder="{{$Vagas->titulo}}" name="titulo">

            <label  for="email">Texto:</label>
            <textarea class="form-control" id="email" placeholder="{{$Vagas->texto}}" name="texto"></textarea>

            <label  for="texto">Imagem:</label>
            <input type="file" class="form-control" id="texto" placeholder="{{$Vagas->imagem}}" name="imagem" value="teste">

            <label  for="texto">Validade:</label>
            <input type="date" class="form-control" id="texto" placeholder="{{$Vagas->validade}}" name="validade">

            <label  for="texto">Recrutador:</label>
           <input type="text" class="form-control" id="recrutador" placeholder="{{$Vagas->id_recrutador}}" name="id_recrutador">
            </select>

            <input type="submit" class="btn btn-primary mt-2">
        </div>

    </form>
    </div>
@endsection

