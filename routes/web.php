<?php

use App\Http\Controllers\vaiSubir;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewtable;
use App\Jobs\Insercao;
use App\Jobs\PrepararInsercao;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {

    $cidades = DB::connection('mysql_secondary')
        ->select('select fi.id, fi.nomeFantasia from filial as fi where grupo = 1 or grupo = 4');

    PrepararInsercao::dispatch($cidades);
    return "Preparando as filas";
});

Route::get('/viewtable', [viewtable::class, 'listarDados']);
