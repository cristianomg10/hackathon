@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Opcao->opcao}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">OPÇÃO</th>
            <th scope="col">ID PERGUNTA</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Opcao->id}}</td>
            <td>{{$Opcao->opcao}}</td>
            <td>{{$Opcao->id_pergunta}}</td>
            <td>{{$Opcao->created_at}}</td>
            <td>{{$Opcao->updated_at}}</td>
            <td>{{$Opcao->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/opcaoRespostas"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



