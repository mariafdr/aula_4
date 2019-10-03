<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Heroi;

class HeroiController extends Controller
{
    //
    public function index(Request $request) {
        if($request->method() === 'GET') {
            return Heroi::all();
        }
        $heroi = new Heroi();
        $heroi->nome = $request->nome;
        $heroi->identidade_secreta = $request->idsecreta;
        $heroi->origem = $request->origem;
        $heroi->foto = $request->foto;
        $heroi->save();
        return Redirect('/herois');
    }

    public function update() {
        return "Atualizado o Heroi";
    }

    public function delete() {
        return "Excluindo o Heroi";
    }
}
