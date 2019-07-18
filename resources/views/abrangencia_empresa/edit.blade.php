@extends('../layout')

@section('header')
    <h1 class="display-4">EDITAR ABRANGÊNCIA DA EMPRESA</h1>
@endsection

@section('content')
    <form method="post" action="/abrangencia_empresa/update/{{$abrangenciaempresas->id}}">
        @csrf
        @method('PUT')
        <div>
            <label for="id_empresa">ID Empresa:</label>
            <input type="number" required class="form-control" name="id_empresa" placeholder="{{$abrangenciaempresas->id_cidade}}">
            <label for="id_empresa">ID Cidade:</label>
            <input type="number" required class="form-control" name="id_cidade" placeholder="{{$abrangenciaempresas->id_cidade}}">
            <input type="submit" class="btn btn-primary mt-2" >

        </div>

    </form>

@endsection

