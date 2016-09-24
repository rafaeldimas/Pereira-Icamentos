<?php

    namespace App\Controllers;

    use App\Controllers\Controller;

    class TrabalhosController extends Controller
    {
        public function index($request, $response, $args)
        {
            return $this->view->render($response, 'trabalhos.phtml', [
                    'assets' => [
                        'css' => [
                            'inc/bootstrap.min.css',
                            'inc/bootstrap-theme.min.css',
                            'inc/owl.carousel.css',
                            'inc/owl.theme.css',
                            'inc/owl.transitions.css',
                            'reset.css',
                            'header.css',
                            'home.css',
                            'footer.css'
                        ],
                        'js' => [
                            'jquery.min.js',
                            'owl.carousel.min.js',
                            'owl.js',
                            'home.js',
                            'footer.js',
                            'header.js'
                        ]
                    ],
                    'title' => 'Pagina Inicial',
                    'description' => 'Aguillar Arts, a melhor solução para divulgação de Ribeirão Preto, com os melhores preços aliado com a melhor qualidade.'
                ]);
        }
    }