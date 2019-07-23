@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR RESPONSAVEL RECRUTAMENTO RH</h1>
@endsection

@section('content')
    <form method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome" >
            <label for="email">E-mail:</label>
            <input type="email" required class="form-control" name="email" >
            <label for="telefone">Telefone:</label>
            <input type="number" required class="form-control" name="telefone" >
            <label for="id_empresa">ID Empresa:</label>
            <input type="number" required class="form-control" name="id_empresa" >
            <input type="submit" class="btn btn-primary mt-2" >

        </div>
    </form>

@endsection

