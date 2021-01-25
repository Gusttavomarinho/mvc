<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Gustavo']);
    }

    public function gustavo(){
        $nome = 'Gustavo Marinho';
        $tpagina = 'Pagina sobre -> '.$nome;

        $data = [
            'nome' => $nome,
            'tpagina' => $tpagina
        ];
        
        $this->render('gustavo',$data);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}