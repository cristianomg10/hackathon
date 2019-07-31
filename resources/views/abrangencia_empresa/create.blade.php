@extends('../layout')

@section('header')
    <h1 class="display-4">ADICIONAR ABRANGÊNCIA DA EMPRESA</h1>
@endsection

@section('content')
    <form method="post">
        @csrf
        <div class="form-group bg-light p-2 rounded">
            <label for="id_empresa">ID Empresa:</label>
            <input type="hidden" required class="form-control" name="id_empresa" value="{{$abrangencia->empresa->id}}">
            <label for="id_empresa">ID Cidade:</label>
            <select name="id_cidade" class="custom-select">
                @foreach($cidades as $cidade)
                    <option value="{{$cidade->id}}" >{{$cidade->nome}} / {{$cidade->estado}}</option>
                @endforeach
            </select>

            <input type="submit" class="btn btn-primary mt-2" >

        </div>
    </form>

@endsection

