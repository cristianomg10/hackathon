@extends('../layout')

@section('header')
    <h1 class="display-4">USUÁRIOS</h1>
@endsection

@section('content')<ul class="list-group">
    <ul class="list-group">
    @foreach($Usuarios as $Usuario)

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$Usuario->id}} | Login: {{$Usuario->login}}
                <span class="d-flex">
                    <form method="get" action="/usuario/{{$Usuario->id}}">
                        @csrf
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/usuario/{{$Usuario->id}}/edit/">
                    @csrf
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/usuario/remover/{{$Usuario->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$Usuario->login}} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
    @endforeach
    </ul>
    <form method="get" action="usuario/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>
@endsection


