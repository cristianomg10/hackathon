@extends('../layout')

@section('header')
    <h1 class="display-4">Pergunta: "{{$Enquetes->pergunta}}"</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">PERGUNTA</th>
            <th scope="col">VALIDADE</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Enquetes->id}}</td>
            <td>{{$Enquetes->pergunta}}</td>
            <td>{{$Enquetes->validade}}</td>
            <td>{{$Enquetes->id_usuario}}</td>
            <td>{{$Enquetes->created_at}}</td>
            <td>{{$Enquetes->updated_at}}</td>
            <td>{{$Enquetes->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/enquetes"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



