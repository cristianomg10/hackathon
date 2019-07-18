@extends('../layout')

@section('header')
    <h1 class="display-4">INSTITUIÇÕES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($instituicaos as $instituicao)
     <li class="list-group-item align-items-center">ID #{{$instituicao->id}} | {{$instituicao->nome}} | {{$instituicao->nome_reduzido}} | ID CIDADE REITORIA: {{$instituicao->id_cidade_reitoria}}
         <form method="post" action="/instituicao/edit/{{$instituicao->id}}">
             @csrf
             <button class="btn btn-secondary mt-2 ">Editar</button>
         </form>
         <form method="post" action="/instituicao/destroy/{{$instituicao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$instituicao->nome}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger  mt-2  ">Excluir</button>
         </form>

     </li>
    @endforeach
    </ul>
    <form method="get" action="instituicao/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

