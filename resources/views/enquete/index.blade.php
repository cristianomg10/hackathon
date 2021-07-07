@extends('../layout')

@section('header')
    <h1 class="display-4">ENQUETES</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Enquetes as $Enquete)
            <li class="list-group-item align-items-center d-flex justify-content-between">ID# {{$Enquete->id}} | Pergunta: {{$Enquete->pergunta}}
                <span class="d-flex">
                     <form method="get" action="/enquetes/{{$Enquete->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/enquetes/{{$Enquete->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form id="excluir" method="post" action="/enquetes/remover/{{$Enquete->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Enquete->pergunta}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>

                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="enquetes/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



