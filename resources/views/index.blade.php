@extends('../layout')

@section('header')
    <h1 class="display-4">USUÁRIOS</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
    @foreach($Usuarios as $Usuario)

            <li class="list-group-item align-items-center">ID #{{$Usuario->id}} | Login: {{$Usuario->login}} | Senha: {{$Usuario->senha}} | Pergunta secreta: {{$Usuario->id_pergunta_secreta}} | Resposta secreta: {{$Usuario->resposta_pergunta_secreta}} | Perfil {{$Usuario->perfil}} |
                <form method="get" action="/usuario/{{$Usuario->id}}/edit/">
                    @csrf
                    <button class="btn btn-secondary mt-2 ">Editar</button>
                </form>
                <form method="post" action="/usuario/remover/{{$Usuario->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Usuario->login}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger  mt-2  ">Excluir</button>
                </form>

            </li>
    @endforeach
    </ul>
    <form method="get" action="usuario/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection


