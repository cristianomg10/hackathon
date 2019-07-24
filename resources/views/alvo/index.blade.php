@extends('../layout')

@section('header')
    <h1 class="display-4">CURSO ALVO VAGA</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Alvos as $Alvo)
            <li class="list-group-item align-items-center">ID# {{$Alvo->id}} | Curso: {{$Alvo->id_curso}} | Vaga: {{$Alvo->id_vaga}} |
                <form method="get" action="/alvos/{{$Alvo->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form id="excluir" method="post" action="/alvos/remover/{{$Alvo->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir o Curso alvo vaga de numero {{$Alvo->id}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>


            </li>
        @endforeach
    </ul>
    <form method="get" action="alvos/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



