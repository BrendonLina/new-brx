<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = [
            'nome' => "Brendon lina",
            'idade' => 26,
            'estado civil' => "Casado",
            'status' => "Ativo",
            'endereco' => [
                'rua' => "Teste",
                'estado' => "Rj",
                'municipio' => "Rj",
                'numero' => 1234,
                'cep' => 1234560
            ]    
        ];

        $campos = [
            'universidade' => "Veiga de almeida"
        ];

        $setup = "RX570";
        return response()->json(compact('usuario','campos','setup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function teste()
    {
        return response()->json([
            "one" => "Apenas um",
            "two" => "Apenas dois",
            "three" => "Apenas três",
            "four" => "Apenas quatro",
            "five" => "Apenas cinco",
            "six" => "Apenas seis",
            "seven" => "Apenas sete",
            "eight" => "Apenas oito",
            "nine" => "Apenas nove",
            "ten" => "Apenas dez",
            
        ]);
        
    }
}
