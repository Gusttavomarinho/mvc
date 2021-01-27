<?php $render('header',['tpagina'=>$tpagina]); ?>

<h2>Editar Usuario</h2>

<div class="row">
  <form method="POST" action="<?=$base?>/usuario/<?=$usuario['id']; ?>/editar" class="col s12">
    <div class="row">
      <div class="input-field col s4">
        <input  id="name" name="name" type="text" class="validate" value="<?=$usuario['nome']; ?>">
       
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <input id="email" name="email" type="email" class="validate" value="<?=$usuario['email']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" name="Editar">Editar
            <i class="material-icons right">edit</i>
        </button>
      </div>
    </div>

  </form>
</div>


<?php $render('footer'); ?>