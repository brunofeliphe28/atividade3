{{-- Extender o layout principal --}}
@extends('site.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Cliente')

{{-- Section para a acao --}}
@section('acao', 'Add Pedido')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}


    <form action="{{route('site.addpedido')}}" method="POST">

            {{-- cross-site request forgery csrf --}}
            @csrf


            <div class="input-field">
                <div class="form-group col-md-6">
                    <label for="nome">Cliente</label>                   
                    <select name="cadastro_id" id="" class="form-control">
                        <option value="" disabled>Selecione um Cliente</option>

                        @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->nome}}</option>                            
                        @endforeach
                    </select>                    
                </div>


                <div class="form-group col-md-6">
                    <label for="nome">Pedido</label>
                    <input type="text" name="pedido" id="pedido" placeholder="Descrição" class="form-control"/> 
                    
                </div>
                <div class="form-group col-md-6">
                    <label for="nome">Preço</label>
                    <input type="text" name="preco" id="preco" placeholder="Valor" class="form-control"/>
                      
                </div>
            </div>        
            
            <br>
            
            <div class="right-align">
                <button class="btn btn-primary" type="submit">Salvar</button>
                <a class="btn btn-primary"  href="{{url()->previous()}}">cancelar</a>
            </div>       
    </form>
@endsection
