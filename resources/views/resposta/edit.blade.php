
@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR USUARIO</h1>
@endsection

@section('content')
    <form  action="{{Route('respostas.update',['Resposta'=>$Resposta->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="login">Usuario:</label>

            <input type="text" class="form-control" id="login" placeholder="{{$Resposta->id_usuario}}" name="opcao" required>


            <label for="email">Enquete:</label>

            <input type="text" class="form-control" id="email" placeholder="{{$Resposta->id_enquete}}" name="id_enquete" required>

            <label for="email">Opção da Enquete:</label>

            <input type="text" class="form-control" id="email" placeholder="{{$Resposta->id_opcao_enquete}}" name="id_opcao_enquete" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
