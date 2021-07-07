@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR PERGUNTA SECRETA</h1>
@endsection

@section('content')



    <form class="form-horizontal"action="{{Route('perguntas.update',['pergunta'=>$Pergunta->id])}}"method="post">
        @csrf
        @method('PUT')
        <div class="form-group bg-light p-2 rounded">
            <label>Pergunta:</label>
            <input type="text" class="form-control" id="email" placeholder="{{$Pergunta->pergunta}}" name="pergunta" required>
            <input type="submit" class="btn btn-primary mt-2">
        </div>
    </form>
    </div>
@endsection
