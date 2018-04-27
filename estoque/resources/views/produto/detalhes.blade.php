<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.app')
@section('conteudoLogado')

<h1>Detalhes do produto: {{ $p->nome }} </h1>
<ul>
    <li>
        <b>Valor:</b> R$ {{ $p->valor }} 
    </li>
    <li>
        <b>Descrição:</b> {{$p->descricao or 'nenhuma descrição informada'}} 
    </li>
    <li>
        <b>Tamanho:</b> {{ $p->tamanho }}
    </li>
    <li>
        <b>Quantidade em estoque:</b> {{ $p->quantidade }}
    </li>
</ul>

@stop