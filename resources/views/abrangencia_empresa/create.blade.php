@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR CIDADES</h1>
@endsection

@section('content')
    <form method="post">
        @csrf
        <div>
            <label for="id_empresa">ID Empresa:</label>
            <input type="number" required class="form-control" name="id_empresa" >
            <label for="id_empresa">ID Cidade:</label>
            <input type="number" required class="form-control" name="id_cidade" >
            <input type="submit" class="btn btn-primary mt-2" >

        </div>
    </form>

@endsection

