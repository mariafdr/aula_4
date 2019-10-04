@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inserir um Heroi</div>
                <div class="card-body">
                   <form action="/herois" method="POST" enctype="multipart/form-data">
                   @csrf
                        <table>
                            <tr>
                                <th>Nome</th>
                                <th>Identidade Secreta</th>
                                <th>Origem</th>   
                                <th>Foto</th>    
                            </tr>
                            <tr>
                                <td><input type="text" name="nome" id="nome"></td>
                                <td><input type="text" name="idsecreta" id="idsecreta"></td>
                                <td><input type="text" name="origem" id="origem"></td>   
                                <td><input type="file" name="foto" id="foto"></td>    
                            </tr>
                            <tr>
                                <td colspan="4"><input type="submit" value="Gravar"></td>
                            </tr>
                        </table>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
