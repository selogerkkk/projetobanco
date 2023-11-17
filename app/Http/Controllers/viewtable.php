<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class viewtable extends Controller
{
    public function listarDados()
    {

        $cidades = DB::connection('mysql_secondary')
            ->select('select fi.id, fi.nomeFantasia from filial as fi where grupo = 1 or grupo = 4');

        return view('viewtable', compact(
            'cidades',
        ));
    }
}
