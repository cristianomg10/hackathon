@extends('../layout')

@section('header')
    <h1 class="display-4">RESPONSAVEL POR RECRUTAMENTO RH</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($rrrhs as $rh)
     <li class="list-group-item align-items-center">ID #{{$rh->id}} | Nome: {{$rh->nome}} | Telefone: {{$rh->telefone}} | Email: {{$rh->email}} | ID Empresa #{{$rh->id_empresa}}
         <form method="post" action="/responsavel_recrutamento_rh/edit/{{$rh->id}}">
             @csrf
             <button class="btn btn-secondary mt-2 ">Editar</button>
         </form>
         <form method="post" action="/responsavel_recrutamento_rh/destroy/{{$rh->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$rh->nome}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger  mt-2  ">Excluir</button>
         </form>

     </li>
    @endforeach
    </ul>
    <form method="get" action="responsavel_recrutamento_rh/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

