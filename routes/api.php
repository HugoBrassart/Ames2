<?php

use App\Models\Ame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ames',function (){
  return Ame::all();
});

Route::get('/ames/{id}',function ($id){
    return Ame::find($id);
});

Route::post('/ames',function (){
    request()->validate([
        'prix' => 'required|integer',
        'nom' => 'required|min:3|max:25',
        'couleur' => 'required',
        'date_de_naissance'=> 'required|date',
    ]);

    $a=new Ame();
    $a->nom = request()->nom;
    $a->prix = request()->prix;
    $a->couleur = request()->couleur;
    $a->sexe = request()->sexe ? true : false ;
    $a->date_de_naissance = request()->date_de_naissance;
    $a->user_id=1;
    $a->save();
    return response()->json([
        'message'=> 'Ame created'
    ],201);

});

