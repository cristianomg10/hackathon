@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR VAGA DE EMPREGO</h1>
@endsection

@section('content')


    <form class="form-horizontal" action="{{Route('vagas.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="login">Titulo:</label>
            <input type="text" class="form-control" id="login" placeholder="insira o titulo" name="titulo">

            <label  for="email">Texto:</label>
            <textarea class="form-control" id="email" placeholder="Insira o texto" name="texto"></textarea>

            <label  for="texto">Imagem:</label>
            <input type="file" class="form-control" id="texto" placeholder="insira uma imagem" name="imagem" value="teste">

            <label  for="texto">Validade:</label>
            <input type="date" class="form-control" id="texto" placeholder="insira uma validade" name="validade">

            <label  for="texto">Recrutador:</label>
            <select name="id_recrutador" class="custom-select">
                @foreach($Recrutadores as $recrutador)
                <option value="{{$recrutador->id}}">{{$recrutador->nome}}</option>
                @endforeach
            </select>

            <input type="submit" class="btn btn-primary mt-2">
        </div>

    </form>
    </div>
@endsection
