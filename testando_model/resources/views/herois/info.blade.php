@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informações do Herói</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <img src="{{ $heroi->foto }}" style="max-width:90%">
                        </div>
                        <br>
                        <div class="col">
                            <p><b>Nome: </b>{{ $heroi->nome }}</p>
                            <p><b>Identidade Secreta: </b>{{ $heroi->identidade_secreta }}</p>
                            <p><b>Origem: </b>{{ $heroi->origem }}</p>
                            <p><b>Criado em: </b>{{ $heroi->created_at }}</p>
                            <p><b>Atualizado em: </b>{{ $heroi->updated_at }}</p>
                        </div>
                    </div>
                    <form>
                        <input type="button" value="Voltar" onclick="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
