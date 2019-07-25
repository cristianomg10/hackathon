@extends('../layout')

@section('header')
    <h1 class="display-4">ESTUDANTES</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($estudantes as $estudante)
     <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$estudante->id}} | {{$estudante->nome}}
         <span class="d-flex">
              <form method="post" action="/estudante/show/{{$estudante->id}}">
                    @csrf
                    <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                </form>
         <form method="post" action="/estudante/edit/{{$estudante->id}}">
             @csrf
             <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
         </form>
         <form method="post" action="/estudante/destroy/{{$estudante->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$estudante->nome}} ?')">
             @csrf
             @method('DELETE')
            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
         </form>

     </li>
    @endforeach
    </ul>
    <form method="get" action="estudante/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

