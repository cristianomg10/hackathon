@extends('../layout')

@section('header')
    <h1 class="display-4">{{$Vagas->titulo}}</h1>
@endsection

@section('content')
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TÍTULO</th>
            <th scope="col">TEXTO</th>
            <th scope="col">IMAGEM</th>
            <th scope="col">VALIDADE</th>
            <th scope="col">ID RECRUTADOR</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$Vagas->id}}</td>
            <td>{{$Vagas->titulo}}</td>
            <td>{{$Vagas->texto}}</td>
            <td>{{$Vagas->imagem}}</td>
            <td>{{$Vagas->validade}}</td>
            <td>{{$Vagas->id_recrutador}}</td>
            <td>{{$Vagas->created_at}}</td>
            <td>{{$Vagas->updated_at}}</td>
            <td>{{$Vagas->deleted_at}}</td>
        </tr>
        </tbody>
    </table>
    <a href="/vagas"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
@endsection



