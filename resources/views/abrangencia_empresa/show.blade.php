@extends('../layout')

@section('header')
    <h1 class="display-4">{{$abrangenciaempresas->id}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID CIDADE</th>
            <th scope="col">ID EMPRESA</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$abrangenciaempresas->id}}</td>
            <td>{{$abrangenciaempresas->id_cidade}}</td>
            <td>{{$abrangenciaempresas->id_empresa}}</td>
            <td>{{$abrangenciaempresas->created_at}}</td>
            <td>{{$abrangenciaempresas->updated_at}}</td>
            <td>{{$abrangenciaempresas->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/abrangencia_empresa"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



