@extends('../layout')

@section('header')
    <h1 class="display-4">OPÇÃO DE RESPOSTA PARA QUESTIONARIOS</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Opcao as $Opcao)
            <li class="list-group-item align-items-center d-flex justify-content-between"            >ID# {{$Opcao->id}} | Opção: {{$Opcao->opcao}} | Pergunta: {{$Opcao->id_pergunta}}|
                <span class="d-flex">
                    <form method="get" action="/opcaoRespostas/{{$Opcao->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/opcaoRespostas/{{$Opcao->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form id="excluir" method="post" action="/opcaoRespostas/remover/{{$Opcao->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Opcao->opcao}}')">
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="opcaoRespostas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



