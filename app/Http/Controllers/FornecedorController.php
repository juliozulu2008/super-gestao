<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3'];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
