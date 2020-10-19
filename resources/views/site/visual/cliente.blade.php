{{-- Extender o layout principal --}}
@extends('site.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Cliente')

{{-- Section para a acao --}}
@section('acao', 'Cadastrar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}


    <form action="{{route('site.adicionar')}}" method="POST">

            {{-- cross-site request forgery csrf --}}
            @csrf


            <div class="input-field">
                
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control"/>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>   
                @enderror
                <br>
                <label for="nome">Cpf</label>
                <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control"/> 
                @error('cpf')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>   
                @enderror      
                <br>
                <label for="nome">Cep</label>
                <input type="text" name="cep" id="cep" placeholder="cep" class="form-control"/>
                @error('cep')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>   
                @enderror       
                
            </div>        
            
            <br>
            
            <div class="right-align">
                <button class="btn btn-primary" type="submit">Salvar</button>
                <a class="btn btn-primary"  href="{{url()->previous()}}">cancelar</a>
            </div>       
    </form>
@endsection
