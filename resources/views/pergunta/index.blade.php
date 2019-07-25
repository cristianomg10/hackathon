@extends('../layout')

@section('header')
    <h1 class="display-4">PERGUNTAS SECRETAS</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($Perguntas as $Pergunta)
        <li class="list-group-item align-items-center d-flex justify-content-between">ID# {{$Pergunta->id}} | Pergunta: "{{$Pergunta->pergunta}}" |
            <span class="d-flex">
                <form method="get" action="/perguntas/{{$Pergunta->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
            <form method="get" action="/perguntas/{{$Pergunta->id}}/edit/">
                @csrf
                <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
            </form>
            <form id="excluir" method="post" action="/perguntas/remover/{{$Pergunta->id}}"
                  onsubmit="return confirm('tem certeza que deseja excluir {{$Pergunta->pergunta}}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
            </span>


        </li>
    @endforeach
    </ul>
        <form method="get" action="perguntas/create">
            @csrf
            <button class="btn btn btn-success mt-2 ">Adicionar</button>
        </form>



@endsection

