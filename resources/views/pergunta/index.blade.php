@extends('../layout')

@section('header')
    <h1 class="display-4">PERGUNTAS SECRETAS</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($Perguntas as $Pergunta)
        <li class="list-group-item align-items-center">ID# {{$Pergunta->id}} | Pergunta: "{{$Pergunta->pergunta}}" |
            <form method="get" action="/perguntas/{{$Pergunta->id}}/edit/">
                @csrf
                <button class="btn btn-secondary mt-2 ">Editar</button>
            </form>
            <form id="excluir" method="post" action="/perguntas/remover/{{$Pergunta->id}}"
                  onsubmit="return confirm('tem certeza que deseja excluir {{$Pergunta->pergunta}}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger  mt-2  ">Excluir</button>
            </form>


        </li>
    @endforeach
    </ul>
        <form method="get" action="perguntas/create">
            @csrf
            <button class="btn btn btn-success mt-2 ">Adicionar</button>
        </form>



@endsection

