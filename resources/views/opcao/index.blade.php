@extends('../layout')

@section('header')
    <h1 class="display-4">OPÇÕES</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($Opcao as $Opcao)

            <li class="list-group-item align-items-center">ID #{{$Opcao->id}} | Opcão: {{$Opcao->opcao}} | Id_enquete: {{$Opcao->id_enquete}}|
                <form method="get" action="/opcoes/{{$Opcao->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form method="post" action="/opcoes/remover/{{$Opcao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Opcao->opcao}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>

            </li>
        @endforeach
    </ul>
    <form method="get" action="opcoes/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection


