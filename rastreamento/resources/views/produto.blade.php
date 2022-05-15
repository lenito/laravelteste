@extends('layout.app')

@section('conteudo')

 <div class="text-center mb-4">
     <h1>{{$produto->nome }}</h1>
 </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <img src="https://via.placeholder.com/400">
            </div>
            <div class="col">
                <div>Descrição: {{$produto->descricao }}</div>
                <div>Preço: {{$produto->preco }}</div>
                <button class="btn btn-primary">Comprar</button>
                <a href="/" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>






    @endsection