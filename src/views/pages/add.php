<?php $render('header',['tpagina'=>$tpagina]); ?>

<h2>Adicionar Novo Usuario</h2>

<div class="row">
  <form method="POST" action="<?=$base;?>/novo" class="col s12">
    <div class="row">
      <div class="input-field col s4">
        <input  id="name" name="name" type="text" class="validate" placeholder="Nome">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <input id="email" name="email" type="email" class="validate" placeholder="Email">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" name="Adicionar">Cadastrar
            <i class="material-icons right">send</i>
        </button>
      </div>
    </div>

  </form>
</div>


<?php $render('footer'); ?>


