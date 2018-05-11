<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('layouts.app')
@section('conteudoLogado')


    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        </div>
    @endif    
    
    @if(isset($p))
        <h1>Alterar produto</h1>
        <form action="/produtos/atualiza/{{$p->id}}" method="post">
    @else
        <h1>Novo produto</h1>
        <form action="/produtos/adiciona" method="post">   
    @endif
        
   
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
  
  
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{ isset($p) ? $p->nome : old('nome')}}"/>
  </div>
  <div class="form-group">
    <label>Descricao</label>
    <input name="descricao" class="form-control" value="{{ isset($p) ? $p->descricao : old('descricao')}}"/>
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" class="form-control" value="{{ isset($p) ? $p->valor : old('valor')}}"/>
  </div>
  <div class="form-group">
    <label>Categoria</label>
    <select name="categoria_id" class="form-control">
        @foreach($categorias as $c)
        <option value="{{$c->id}}">{{$c->nome}}</option>
        @endforeach
    </select>    
  </div>
  <div class="form-group">
    <label>Tamanho</label>
    <input name="tamanho" class="form-control" value="{{ isset($p) ? $p->tamanho : old('tamanho')}}"/>
  </div>  
  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" name="quantidade" class="form-control" value="{{ isset($p) ? $p->quantidade : old('quantidade')}}"/>
  </div>
  <button type="submit" 
    class="btn btn-primary btn-block">Submit</button>
</form>

@stop