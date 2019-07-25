@extends('../layout')

@section('header')
    <h1 class="display-4">Instituição: {{$instituicao->nome}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">NOME REDUZIDO</th>
            <th scope="col">ID CIDADE REITORIA</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$instituicao->id}}</td>
            <td>{{$instituicao->nome}}</td>
            <td>{{$instituicao->nome_reduzido}}</td>
            <td>{{$instituicao->id_cidade_reitoria}}</td>
            <td>{{$instituicao->created_at}}</td>
            <td>{{$instituicao->updated_at}}</td>
            <td>{{$instituicao->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/instituicao"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



