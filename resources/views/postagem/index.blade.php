@extends('../layout')

@section('header')
    <h1 class="display-4">POSTAGENS</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Postagem as $Postagem)
            <li class="list-group-item align-items-center d-flex justify-content-between">ID# {{$Postagem->id}} | Titulo: {{$Postagem->titulo}}
                <span class="d-flex">
                    <form method="get" action="/postagens/{{$Postagem->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/postagens/{{$Postagem->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form id="excluir" method="post" action="/postagens/remover/{{$Postagem->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Postagem->titulo}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>


            </li>
        @endforeach
    </ul>
    <form method="get" action="postagens/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



