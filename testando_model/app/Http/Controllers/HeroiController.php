<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Heroi;

class HeroiController extends Controller
{
    public function index(Request $request) {
        if($request->method() === 'GET') {
            $heroi = Heroi::all();
            return view('herois.index', compact('heroi'));
        }

        $heroi                      = new Heroi();
        $heroi->nome                = $request->nome;
        $heroi->identidade_secreta  = $request->idsecreta;
        $heroi->origem              = $request->origem;
        $heroi->foto                = $request->foto;

        $type = $request->file('foto')->extension();
        $data = file_get_contents($request->file('foto')->path());
        $heroi->foto = "data:image/$type;base64," .base64_encode($data);

        $heroi->save();

        return Redirect('/herois');
    }

    public function update() {
        return "Atualizado o Heroi";
    }

    public function delete() {
        return "Excluindo o Heroi";
    }

    public function info(Request $request)
    {
        if($request->id){
            $heroi = Heroi::find($request->id);
            //return "<img src='$heroi->foto'/>";
            return view('herois.info', compact('heroi'));
        }
    }
}
