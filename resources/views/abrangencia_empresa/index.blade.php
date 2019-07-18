@extends('../layout')

@section('header')
    <h1 class="display-4">CIDADES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($abrangenciaempresas as $ae)
     <li class="list-group-item align-items-center">ID #{{$ae->id}} | ID Empresa #{{$ae->id_empresa}} | ID Cidade #{{$ae->id_cidade}} |
         <form method="post" action="/abrangencia_empresa/edit/{{$ae->id}}">
             @csrf
             <button class="btn btn-secondary mt-2 ">Editar</button>
         </form>
         <form method="post" action="/abrangencia_empresa/destroy/{{$ae->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$ae->id}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger  mt-2  ">Excluir</button>
         </form>

     </li>
    @endforeach
    </ul>
    <form method="get" action="abrangencia_empresa/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

