<?php $render('header',['tpagina'=>$tpagina]); ?>

  <ul class="collection with-header">
        <li class="collection-header"><h4><?php echo $usuario['id']; ?> - <?php echo $usuario['nome']; ?></h4></li>
        <li class="collection-item">
			<div><?php echo $usuario['email']; ?>
        <a href="<?=$base?>/usuario/<?=$usuario['id']; ?>/excluir" class="secondary-content" onclick="return confirm('Tem certeza de que deseja excluir ?')"><i class="material-icons">delete</i></a>
        <a href="<?=$base?>/usuario/<?=$usuario['id']; ?>/editar" class="secondary-content"><i class="material-icons">edit</i></a>
			</div>
		</li>
  </ul>

<?php $render('footer'); ?>