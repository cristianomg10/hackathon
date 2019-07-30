@extends('../layout')

@section('header')
    <h1 class="display-4">EMPRESAS</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($Empresas as $Empresa)
        <li class="list-group-item align-items-center d-flex justify-content-between">ID# {{$Empresa->id}} | Razão Social: {{$Empresa->razao_social}}
            <span class="d-flex">
                <form method="get" action="/empresas/{{$Empresa->id}}">
                    @csrf
                    <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                </form>
                <form method="get" action="/empresas/{{$Empresa->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form id="excluir" method="post" action="/empresas/remover/{{$Empresa->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Empresa->razao_social}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </span>


        </li>
    @endforeach
    </ul>
    <form method="get" action="empresas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



