<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        $data = Usuario::select()->get();
        $this->render('home', ['data'=> $data,'tpagina'=>'Home']);
    }

    /** DAQUI PRA BAIXO SAO TUDO FUNCTION DE TESTES */

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