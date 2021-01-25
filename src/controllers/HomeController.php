<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $posts = [
            ['titulo' => 'Titulo de teste 01', 'corpo' => 'Mensagem de teste 01'],
            ['titulo' => 'Titulo de teste 02', 'corpo' => 'Mensagem de teste 02'],

        ];
        $nome = 'Gustavo';

        $this->render('home', ['nome' => $nome, 'posts' => $posts]);
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

    public function fotos(){
        $test = new Test();
        echo " Fotos ?";
    }

    public function foto($parametros){
        if($parametros){
            echo "Unica foto...ID: ".$parametros['id'];
        }else{
            $this->redirect('/fotos');
        }
        
    }

}