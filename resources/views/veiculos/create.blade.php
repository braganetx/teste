@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Adicionar veiculo</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('veiculos.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="placa">Placa:</label>
                        <input type="text" class="form-control" name="placa"/>
                    </div>

                    <div class="form-group">
                        <label for="renavam">Renavam:</label>
                        <input type="text" class="form-control" name="renavam"/>
                    </div>

                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input type="text" class="form-control" name="modelo"/>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" class="form-control" name="marca"/>
                    </div>
                    <div class="form-group">
                        <label for="ano">Ano:</label>
                        <input type="text" class="form-control" name="ano"/>
                    </div>
                    <div class="form-group">
                        <label for="proprietario">Proprietário:</label>
                        <input type="text" class="form-control" name="proprietario"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Salvar veiculo</button>
                </form>
            </div>
        </div>
    </div>
@endsection