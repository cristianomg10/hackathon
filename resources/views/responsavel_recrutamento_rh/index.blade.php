@extends('../layout')

@section('header')
    <h1 class="display-4">RESPONSAVEL POR RECRUTAMENTO RH</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($rrrhs as $rh)
     <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$rh->id}} | Nome: {{$rh->nome}}
         <span class="d-flex">
              <form method="post" action="/responsavel_recrutamento_rh/show/{{$rh->id}}">
                    @csrf
                    <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                </form>
         <form method="post" action="/responsavel_recrutamento_rh/edit/{{$rh->id}}">
             @csrf
             <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
         </form>
         <form method="post" action="/responsavel_recrutamento_rh/destroy/{{$rh->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$rh->nome}} ?')">
             @csrf
             @method('DELETE')
            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
         </form>
         </span>

     </li>
    @endforeach
    </ul>
    <form method="get" action="responsavel_recrutamento_rh/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

