@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR OPÇÃO DE ENQUETE</h1>
@endsection

@section('content')
    <div class="bg-light p-2 rounded" style="margin-bottom: 15px">
        Pergunta da enquete #{{$enquete->id}}:
        <strong> {{$enquete->pergunta}}</strong>
       </div>

    <form  action="{{Route('opcoes.store')}}" method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded ">
            <label  for="login">Opção:</label>

            <input type="text" class="form-control" id="login" placeholder="insira a opcão" name="opcao" required>



            <input type="hidden" class="form-control" id="email" placeholder="insira a enquete" name="id_enquete" required value="{{$enquete->id}}">



            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

    <ul class="list-group">
        <li class="list-group-item align-items-center d-flex justify-content-between"><strong>Opções da pergunta #{{$enquete->id}}</strong></li>
        @foreach($Opcao as $Opcao)
            <li class="list-group-item align-items-center d-flex justify-content-between"            >ID# {{$Opcao->id}} | Opção: {{$Opcao->opcao}}

            </li>
        @endforeach
    </ul>

@endsection
