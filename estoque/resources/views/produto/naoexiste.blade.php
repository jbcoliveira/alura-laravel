<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
@extends('layouts.app')
@section('conteudoLogado')

<h1>Produto Inexistente</h1>

<a href="{{action('ProdutoController@lista')}}">Voltar a Listagem</a>
@stop