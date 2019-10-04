@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Heróis</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Identidade Secreta</th>
                                <th scope="col">Origem</th>
                                <th scope="col">#</th>
                                <th scope="col">#</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($heroi as $item)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $item->nome }}</td>
                                        <td>Otto</td>
                                        <td>dsddsdsd</td>
                                        <td><button type="button" class="btn-sm btn-outline-warning">Editar</button></td>
                                        <td><button type="button" class="btn-sm btn-outline-danger">Excluir</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <input class="btn btn-primary" type="button" value="Novo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
