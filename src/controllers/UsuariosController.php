<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add(){
      $this->render('add',['tpagina'=>'Adicionar Usuario']);
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
            //redirect para . /
            $this->redirect('/');
        }

      }

      //redirect para /novo
      $this->redirect('/novo');

    }

    public function edit($args){
      //print_r($args);
        //$usuario = Usuario::select()->where('id',$args['id'])->one();
        $usuario = Usuario::select()->find($args['id']);
        //$data = ['usuario' => $usuario];
        //print_r($data);
        $this->render('edit',['usuario'=> $usuario,'tpagina'=>'Editar Usuario']);
    }

    public function editAction($args){
      $name = filter_input(INPUT_POST,'name');
      $email = filter_input(INPUT_POST,'email');

      if($name && $email){
        Usuario::update()
          ->set('nome',$name)
          ->set('email',$email)
          ->where('id',$args['id'])
        ->execute();
          
        $this->redirect('/'); 

      }

      //redirect para /usuario novamente
      $this->redirect('/usuario/'.$args['id'].'/editar');

    }

    public function del($args){
      if($args){
        $data = Usuario::delete()->where('id',$args['id'])->execute();
        $this->redirect('/');
      } 

    }

    public function show($args){
      $data = Usuario::select()->find($args['id']);
      $this->render('show',['usuario'=> $data,'tpagina'=>'Detalhes do Usuario']);
      
    }

}