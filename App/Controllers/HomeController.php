<?php

    namespace App\Controllers;

    use App\Controllers\Controller;
    use \Core\Email\Email;

    class HomeController extends Controller
    {
        public function index($request, $response, $args)
        {
            $teste = new Email;

            return $this->view->render($response, 'home.phtml', [
                    'assets' => [
                        'css' => [
                            'inc/bootstrap.css',
                            'inc/bootstrap-theme.css',
                            'inc/normalize.css',
                            'reset.css',
                            'header.css',
                            'home.css',
                            'footer.css'
                        ],
                        'js' => [
                            'jquery.min.js',
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