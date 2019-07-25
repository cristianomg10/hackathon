@extends('../layout')

@section('header')
    <h1 class="display-4">Pergunta Secreta: "{{$Pergunta->pergunta}}"</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">PERGUNTA</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Pergunta->id}}</td>
            <td>{{$Pergunta->pergunta}}</td>
            <td>{{$Pergunta->created_at}}</td>
            <td>{{$Pergunta->updated_at}}</td>
            <td>{{$Pergunta->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/perguntas"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



