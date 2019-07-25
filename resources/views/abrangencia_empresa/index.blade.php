@extends('../layout')

@section('header')
    <h1 class="display-4">ABRANGÊNCIA DA EMPRESA</h1>
@endsection

@section('content')
    <ul class="list-group">
    @foreach($abrangenciaempresas as $ae)
     <li class="list-group-item align-items-center d-flex justify-content-between">ID #{{$ae->id}} | ID Empresa #{{$ae->id_empresa}} | ID Cidade #{{$ae->id_cidade}} |
         <span class="d-flex">
          <form method="post" action="/abrangencia_empresa/show/{{$ae->id}}">
              @csrf
            <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
        </form>
         <form method="post" action="/abrangencia_empresa/edit/{{$ae->id}}" class="mr-1">
             @csrf
             <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
         </form>
         <form method="post" action="/abrangencia_empresa/destroy/{{$ae->id}}" onsubmit="return confirm('Tem certeza que deseja excluir {{$ae->id}} ?')">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
         </form>
             </span>

     </li>
    @endforeach
    </ul>
    <form method="get" action="abrangencia_empresa/create">
        @csrf
        <button class="btn btn btn-success mt-2 ">Adicionar</button>
    </form>

@endsection

