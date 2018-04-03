<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
        <link href="/css/custom.css" rel="stylesheet"type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">      
                        <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                        <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
                    </ul>

                </div>
            </nav>
            <p>
            @yield('conteudo')
            </p>
            
            
            
            <footer class="footer">
                <p>© Curso de Laravel do Alura.</p>
            </footer>
        </div>
    </body>
</html>