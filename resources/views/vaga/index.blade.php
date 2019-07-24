@extends('../layout')

@section('header')
    <h1 class="display-4">Vagas</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
        @foreach($Vagas as $Vaga)

            <li class="list-group-item align-items-center">ID #{{$Vaga->id}} | Titulo: {{$Vaga->titulo}} | Texto: {{$Vaga->texto}} | Imagem: {{$Vaga->imagem}} | Validade: {{$Vaga->validade}} | Recrutador {{$Vaga->id_recrutador}} |
                <form method="get" action="/vagas/{{$Vaga->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form method="post" action="/vagas/remover/{{$Vaga->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Vaga->titulo}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>

            </li>
        @endforeach
    </ul>
    <form method="get" action="vagas/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection


