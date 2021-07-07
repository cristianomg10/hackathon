@extends('../layout')

@section('header')
    <h1 class="display-4">CIDADES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($cidades as $cidade)
     <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$cidade->id}} | {{$cidade->nome}}
         <span class="d-flex">
                <form method="post" action="/cidade/show/{{$cidade->id}}">
                    @csrf
                    <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                </form>
                <form method="post" action="/cidade/edit/{{$cidade->id}}">
                    @csrf
                   <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                  <form method="post" action="/cidade/destroy/{{$cidade->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$cidade->nome}} ?')">
                     @csrf
                     @method('DELETE')
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
         </span>

     </li>
    @endforeach
    </ul>
    <form method="get" action="cidade/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

