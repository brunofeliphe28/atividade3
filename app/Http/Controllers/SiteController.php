<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests\SiteRequest;
use App\Models\Cadastro;
use App\Models\Pedido;


class SiteController extends Controller
{
    
    public function cliente()
    {
        
        return view('site.visual.cliente');
    }

    public function listar()
    {
        $lista = Cadastro::all();                              //busca todos registros no bd e atribui a variavel       
    
        return view('site.visual.listar', compact('lista'));
    }

    public function pedido()
    {
        $clientes = Cadastro::all();                             //busca todos registros no bd e atribui a variavel     
        return view('site.visual.pedido', compact('clientes'));
    }

    public function adicionar(SiteRequest $request)             //Aqui é o controller para add cliente
    {
        //Pegando o dado enviado pelo form
        //$nome = $request->input('nome'); 
        //$cpf = $request->input('cpf');
        //$cep = $request->input('cep'); 
        
        //Criar um objeto do modelo (classe) cliente

        //$cadastro = new Cadastro();
        //$cadastro->nome= $request->nome;
        //$cadastro->cpf= $request->cpf;
        //$cadastro->cep= $request->cep;

        //$cadastro->save(); //Salvar no BD

        //Criar um objeto do modelo (classe) Cidade
        Cadastro::create($request->all());

        $request->session()->flash('sucesso', "Cliente Cadastrado com Sucesso");

        return redirect()->route('site.listar');
    }

    public function addpedido(Request $request) {

       
        Pedido::create($request->all());
        //$pedido ->cadastro()->create($request->all);
        $request->session()->flash('sucesso', "Pedido incluido com Sucesso");

        return redirect()->route('site.listar');
    
    }

}






