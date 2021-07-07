@extends('../layout')

@section('header')
    <h1 class="display-4">OPÇÕES</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($Opcao as $Opcao)
            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$Opcao->id}} | Opcão: {{$Opcao->opcao}}
                <span class="d-flex">
                    <form method="get" action="/opcoes/{{$Opcao->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/opcoes/{{$Opcao->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>

                </form>
                <form method="post" action="/opcoes/remover/{{$Opcao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Opcao->opcao}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="opcoes/create">
        @csrf
        <button class="btn btn btn-primary mt-2 ">Adicionar</button>
    </form>
    <form method="get" action="{{route('inicio')}}">
        @csrf
        <button class="btn btn btn-success mt-2 ">Concluir</button>
    </form>
@endsection


