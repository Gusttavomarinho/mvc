<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add(){
      $this->render('add');
    }

    public function addAction(){
      $name = filter_input(INPUT_POST,'name');
      $email = filter_input(INPUT_POST,'email');

      if($name && $email){
        $data = Usuario::select()->where('email',$email)->execute();

        if(count($data) === 0 ){
          //insere dados
          Usuario::insert([
            'nome' => $name,
            'email' => $email
            ])->execute();
            //redirect para /
            $this->redirect('/');
            exit;
        }

      }

      //redirect para /novo
      echo 'deu problema';
      $this->redirect('/novo');
      exit;

    }

}