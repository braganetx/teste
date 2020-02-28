@extends('base')

@section('main')
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Veiculos</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('veiculo.create')}}" class="btn btn-primary">Novo Veiculo</a>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Placa</td>
                    <td>Renavam</td>
                    <td>Modelo</td>
                    <td>Marca</td>
                    <td>Ano</td>
                    <td>Proprietário</td>
                    <td colspan=2>Ações</td>
                </tr>
                </thead>
                <tbody>
                @foreach($veiculos as $veiculo)
                    <tr>
                        <td>{{$veiculo->id}}</td>
                        <td>{{$veiculo->placa}}</td>
                        <td>{{$veiculo->renavam}}</td>
                        <td>{{$veiculo->modelo}}</td>
                        <td>{{$veiculo->marca}}</td>
                        <td>{{$veiculo->ano}}</td>
                        <td>{{$veiculo->proprietário}}</td>
                        <td>
                            <a href="{{ route('veiculos.edit',$veiculo->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('$veiculos.destroy', $veiculo->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection