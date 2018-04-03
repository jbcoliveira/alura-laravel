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
        <title></title>
    </head>
    <body>
        <div class="container">
            <h1>Listagem de produtos com Laravel</h1>
            <table class="table table-striped table-bordered table-hover">
                <?php foreach ($produtos as $p): ?>
                    <tr>
                        <td><?= $p->nome ?></td>
                        <td><?= $p->valor ?></td>
                        <td><?= $p->descricao ?></td>
                        <td><?= $p->quantidade ?></td>
                        <td><a href="/produtos/mostra/<?= $p->id ?>">
                                <img src="/image/icon/search.svg" alt="icon name">
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>
