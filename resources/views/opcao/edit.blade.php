@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR USUARIO</h1>
@endsection

@section('content')
    <form  action="{{Route('opcoes.update',['Opcao'=>$Opcao->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label  for="login">Opção:</label>

            <input type="text" class="form-control" id="login" placeholder="{{$Opcao->opcao}}" name="id_usuario">


            <label for="email">Enquete:</label>

            <input type="text" class="form-control" id="email" placeholder="{{$Opcao->id_enquete}}" name="id_enquete">



            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


@endsection
