@extends('../layout')

@section('header')
    <h1 class="display-4">POSTAGENS</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($Postagem as $Postagem)
            <li class="list-group-item align-items-center">ID# {{$Postagem->id}} | Titulo: {{$Postagem->titulo}} | Status: {{$Postagem->status}} | Ultima atualização {{$Postagem->ultima_atualizacao}} | Id_Usuario: {{$Postagem->id_usuario}} | Postagem Pai??:{{$Postagem->id_postagem}}|
                <form method="get" action="/postagens/{{$Postagem->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form id="excluir" method="post" action="/postagens/remover/{{$Postagem->id}}"
                      onsubmit="return confirm('tem certeza que deseja excluir {{$Postagem->titulo}}')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>


            </li>
        @endforeach
    </ul>
    <form method="get" action="postagens/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection



