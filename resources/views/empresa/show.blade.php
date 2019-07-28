@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Empresa->razao_social}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">RAZÃO SOCIAL</th>
            <th scope="col">CNPJ</th>
            <th scope="col">ÁREA DE ATUAÇÃO</th>
            <th scope="col">PORTE</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Empresa->id}}</td>
            <td>{{$Empresa->id_usuario}}</td>
            <td>{{$Empresa->razao_social}}</td>
            <td>{{$Empresa->cnpj}}</td>
            <td>{{$Empresa->area_de_atuacao}}</td>
            <td>{{$Empresa->porte}}</td>
            <td>{{$Empresa->created_at}}</td>
            <td>{{$Empresa->updated_at}}</td>
            <td>{{$Empresa->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/empresas"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



