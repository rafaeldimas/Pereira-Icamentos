<?php

    $app->get('/', 'HomeController:index');
    $app->get('/trabalhos', 'TrabalhosController:index');
    $app->get('/orcamentos', 'OrcamentosController:index');