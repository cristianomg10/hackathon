@extends('../layout')

@section('header')
    <h1 class="display-4">QUESTIONARIOS</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Questionarios as $Questionario)
            <li class="list-group-item align-items-center d-flex justify-content-between">ID# {{$Questionario->id}} | Titulo: {{$Questionario->titulo}}

                <span class="d-flex">
                    <form method="get" action="/questionarios/{{$Questionario->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/questionarios/{{$Questionario->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                 </form>
                <form id="excluir" method="post" action="/questionarios/remover/{{$Questionario->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Questionario->titulo}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>


            </li>
        @endforeach
    </ul>
    <form method="get" action="questionarios/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



