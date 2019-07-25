@extends('../layout')

@section('header')
    <h1 class="display-4">{{$rrrh->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">ID EMPRESA</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$rrrh->id}}</td>
            <td>{{$rrrh->nome}}</td>
            <td>{{$rrrh->email}}</td>
            <td>{{$rrrh->telefone}}</td>
            <td>{{$rrrh->id_empresa}}</td>
            <td>{{$rrrh->created_at}}</td>
            <td>{{$rrrh->updated_at}}</td>
            <td>{{$rrrh->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/responsavel_recrutamento_rh"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



