<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function submit(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
        }

        $dadosDoFormulario = $request->all();


        // Retorna uma resposta indicando que a requisição foi recebida com sucesso
        return response()->json(['mensagem' => 'Formulário enviado com sucesso!']);
    }
} 