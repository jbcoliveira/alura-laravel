<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layout.principal')
@section('conteudo')
<h1>Listagem de produtos com Laravel</h1>
<table class="table table-striped table-bordered table-hover">

    @if(empty($produtos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
    @else
    @foreach ($produtos as $p)
    <tr class="{{$p->quantidade<=1 ? 'alert alert-danger' : '' }}">
        <td>{{ $p->nome }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td><a href="/produtos/mostra/{{ $p->id }}">
                <img src="/image/icon/search.svg" alt="icon name">
            </a>
        </td>
    </tr>
    @endforeach
    @endif


</table>
<h8>
    <span class="pull-right">
        Um ou menos itens no estoque
    </span>
</h8>
@stop