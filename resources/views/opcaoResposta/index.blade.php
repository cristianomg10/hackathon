@extends('../layout')

@section('header')
    <h1 class="display-4">OPPÇÃO DE RESPOSTA PARA QUESTIONARIOS</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Opcao as $Opcao)
            <li class="list-group-item align-items-center">ID# {{$Opcao->id}} | Opção: {{$Opcao->opcao}} | Pergunta: {{$Opcao->id_pergunta}}|
                <form method="get" action="/opcaoRespostas/{{$Opcao->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form id="excluir" method="post" action="/opcaoRespostas/remover/{{$Opcao->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Opcao->opcao}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>


            </li>
        @endforeach
    </ul>
    <form method="get" action="opcaoRespostas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



