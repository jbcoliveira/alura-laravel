<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.app')
@section('conteudoLogado')
<h1>Listagem de produtos com Laravel</h1>


<table class="table table-striped table-bordered table-hover">

    @if($produtos)
        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade<=1 ? 'alert alert-danger' : '' }}">
            <td>{{ $p->nome }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->descricao }}</td>
            <td>{{ $p->categoria->nome }}</td>
            <td>{{ $p->tamanho }}</td>
            <td>{{ $p->quantidade }}</td>
            <td><a href="{{action('ProdutoController@mostra', $p->id)}}">
                    <img src="/image/icon/search.svg" alt="icon name">
                </a>
            </td>
            <td><a href="{{action('ProdutoController@altera', $p->id)}}">
                    <img src="/image/icon/pencil.svg" alt="icon name">
                </a>
            </td>
            <td><a href="{{action('ProdutoController@remove', $p->id)}}">
                    <img src="/image/icon/trashcan.svg" alt="icon name">
                </a>
            </td>
        </tr>
        @endforeach
    @else
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
    
    
    @endif


</table>
<h8>
    <span class="pull-right">
        Um ou menos itens no estoque
    </span>
</h8>

@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{ old('nome') }}  foi adicionado/alterado.
</div>
@endif

@stop