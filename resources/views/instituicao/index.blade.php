@extends('../layout')

@section('header')
    <h1 class="display-4">INSTITUIÇÕES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($instituicaos as $instituicao)
     <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$instituicao->id}} | {{$instituicao->nome}}
              <form method="post" action="/instituicao/show/{{$instituicao->id}}">
                    @csrf
                    <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                </form>
         <form method="post" action="/instituicao/edit/{{$instituicao->id}}">
             @csrf
             <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
         </form>
         <form method="post" action="/instituicao/destroy/{{$instituicao->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$instituicao->nome}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
         </form>
         </span>
     </li>
    @endforeach
    </ul>
    <form method="get" action="instituicao/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

