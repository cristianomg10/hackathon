@extends('../layout')

@section('header')
    <h1 class="display-4">EMPRESAS</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($Empresas as $Empresa)
        <li class="list-group-item align-items-center">ID# {{$Empresa->id}} | Razão Social: {{$Empresa->razao_social}} | CNPJ: {{$Empresa->cnpj}} | Área de atuação: {{$Empresa->area_de_atuacao}} | Porte: {{$Empresa->porte}} |
            <form method="get" action="/empresas/{{$Empresa->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form id="excluir" method="post" action="/empresas/remover/{{$Empresa->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Empresa->razao_social}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>


        </li>
    @endforeach
    </ul>
    <form method="get" action="empresas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



