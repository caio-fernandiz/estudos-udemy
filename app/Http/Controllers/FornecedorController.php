<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores=[
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj'=>null ,
                'ddd' => '11',
                'telefone' => '99999999',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj'=>'232323',
                'ddd' => '91',
                'telefone' => '123124134',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'cnpj'=>'',
                'ddd' => '47',
                'telefone' => '69450970',
            ]
        ];

        //echo ($fornecedores[0]['cnpj']) ? 'cnpj encontrado' : 'cnpj não encontrado';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}