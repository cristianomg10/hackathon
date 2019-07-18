@extends('../layout')

@section('header')
    <h1 class="display-4">CIDADES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($cidades as $cidade)
     <li class="list-group-item align-items-center">ID #{{$cidade->id}} | {{$cidade->nome}} | {{$cidade->estado}} |
         <form method="post" action="/cidade/edit/{{$cidade->id}}">
             @csrf
             <button class="btn btn-secondary mt-2 ">Editar</button>
         </form>
         <form method="post" action="/cidade/destroy/{{$cidade->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$cidade->nome}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger  mt-2  ">Excluir</button>
         </form>

     </li>
    @endforeach
    </ul>
    <form method="get" action="cidade/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

