@extends('../layout')




@section('header')
    <h1 class="display-4">ADICIONAR INSTITUIÇÃO</h1>
@endsection

@section('content')
    <form method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome">
            <label for="nome_reduzido">Nome reduzido:</label>
            <input type="text" required class="form-control" name="nome_reduzido">
            <label for="id_cidade_reitoria">ID Cidade Reitoria:</label>
            <input type="number" required class="form-control" name="id_cidade_reitoria" >

            <input type="submit" class="btn btn-primary mt-2" >
        </div>

    </form>

@endsection

