@extends('../layout')

@section('header')
    <h1 class="display-4">ENQUETES</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Enquetes as $Enquete)
            <li class="list-group-item align-items-center">ID# {{$Enquete->id}} | Pergunta: {{$Enquete->pergunta}} | Validade: {{$Enquete->validade}} | Responsável: {{$Enquete->id_usuario}}
                <form method="get" action="/enquetes/{{$Enquete->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form id="excluir" method="post" action="/enquetes/remover/{{$Enquete->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Enquete->pergunta}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>


            </li>
        @endforeach
    </ul>
    <form method="get" action="enquetes/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



