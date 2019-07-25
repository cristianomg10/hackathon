@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Usuario->login}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">LOGIN</th>
            <th scope="col">SENHA</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">ID PERGUNTA SECRETA</th>
            <th scope="col">RESPOSTA PERGUNTA SECRETA</th>
            <th scope="col">PERFIL</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Usuario->id}}</td>
            <td>{{$Usuario->login}}</td>
            <td>{{$Usuario->senha}}</td>
            <td>{{$Usuario->email}}</td>
            <td>{{$Usuario->id_pergunta_secreta}}</td>
            <td>{{$Usuario->resposta_pergunta_secreta}}</td>
            <td>{{$Usuario->perfil}}</td>
            <td>{{$Usuario->created_at}}</td>
            <td>{{$Usuario->updated_at}}</td>
            <td>{{$Usuario->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/usuario"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



