@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR CIDADES</h1>
@endsection

@section('content')
    <form method="post">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" required class="form-control" name="nome">
            <label for="estado">Estado:</label>
            <input type="text" required class="form-control" name="estado">
            <input type="submit" class="btn btn-primary mt-2">

        </div>

    </form>

@endsection

