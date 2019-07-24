@extends('../layout')

@section('header')
    <h1 class="display-4">RESPOSTAS</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($Resposta as $Resposta)

            <li class="list-group-item align-items-center">ID #{{$Resposta->id}} | Usuario: {{$Resposta->id_usuario}} | Enquete: {{$Resposta->id_enquete}}|Opção: {{$Resposta->id_opcao_enquete}}
                <form method="get" action="/respostas/{{$Resposta->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form method="post" action="/respostas/remover/{{$Resposta->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Resposta->id}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>

            </li>
        @endforeach
    </ul>
    <form method="get" action="respostas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection


