@extends('../layout')

@section('header')
    <h1 class="display-4">CURSO ALVO VAGA</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Alvos as $Alvo)
            <li class="list-group-item align-items-center d-flex justify-content-between"">ID# {{$Alvo->id}}
                <span class="d-flex">
                     <form method="get" action="/alvos/{{$Alvo->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                    <form method="get" action="/alvos/{{$Alvo->id}}/edit/">
                        @csrf
                         <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                    </form>
                    <form id="excluir" method="post" action="/alvos/remover/{{$Alvo->id}}"
                          onsubmit="return confirm('tem certeza que deseja excluir o Curso alvo vaga de numero {{$Alvo->id}}')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>


                </span>


            </li>
        @endforeach
    </ul>
    <form method="get" action="alvos/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



