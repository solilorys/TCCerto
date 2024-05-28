<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index() {
        return view('site.home');
    }

    public function edit(Request $request) {
        $request = $request->all();
        $id_endereco = $request['id_endereco'];

        $enderecos = Enderecos::all();
        foreach ($enderecos as $endereco) {
            $id = $endereco['id'];
            if ($id === $id_endereco) {
                // UPDATE O ENDEREÇO
            }
        }
    }
}
