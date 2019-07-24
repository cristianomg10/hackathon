@extends('../layout')

@section('header')
    <h1 class="display-4">QUESTIONARIOS</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Questionarios as $Questionario)
            <li class="list-group-item align-items-center">ID# {{$Questionario->id}} | Titulo: {{$Questionario->titulo}} | Validade: {{$Questionario->validade}} | Responsável: {{$Questionario->id_usuario}}| Status:{{$Questionario->status}}
                <form method="get" action="/questionarios/{{$Questionario->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form id="excluir" method="post" action="/questionarios/remover/{{$Questionario->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Questionario->titulo}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>


            </li>
        @endforeach
    </ul>
    <form method="get" action="questionarios/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



