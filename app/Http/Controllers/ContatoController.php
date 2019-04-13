<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        //mesma coisa que SELECT * FROM contatos
        return view('contatos.main', ['contatos' => $contatos]);
    }

    public function add()
    {
        return view('contatos.add');
    }

    public function show($id =  null)
    {
        return view('contatos.show');
    }

    public function edit($id = null)
    {
        return view('contatos.edit');
    }

    public function store(Request $request)
    {
        Contato::create($request->all());
        return 'Cadastrado com sucesso';
    }

    public function update( $id)
    {

    }

    public function delete($id)
    {

    }

}
