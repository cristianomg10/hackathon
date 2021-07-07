@extends('../layout')

@section('header')
    <h1 class="display-4">Vagas</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($Vagas as $Vaga)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$Vaga->id}} | Titulo: {{$Vaga->titulo}}
                <span class="d-flex">
                    <form method="get" action="/vagas/{{$Vaga->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/vagas/{{$Vaga->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/vagas/remover/{{$Vaga->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Vaga->titulo}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        @endforeach
    </ul>
    <form method="get" action="vagas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection


