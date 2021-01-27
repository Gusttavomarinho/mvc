<?php $render('header'); ?>

<a  href="<?=$base;?>/novo" class="waves-effect waves-light btn"><i class="material-icons left">add_box</i>Novo Usuario</a>

<?php foreach($data as $usuario): ?>
  <ul class="collection with-header">
        <li class="collection-header"><h4><?php echo $usuario['id']; ?> - <?php echo $usuario['nome']; ?></h4></li>
        <li class="collection-item">
			<div><?php echo $usuario['email']; ?>
        <a href="<?=$base?>/usuario/<?=$usuario['id']; ?>/excluir" class="secondary-content" onclick="return confirm('Tem certeza de que deseja excluir ?')"><i class="material-icons">delete</i></a>
        <a href="<?=$base?>/usuario/<?=$usuario['id']; ?>/editar" class="secondary-content"><i class="material-icons">edit</i></a>
				<a href="#!" class="secondary-content"><i class="material-icons">details</i></a>
			</div>
		</li>
  </ul>
<?php endforeach ?>

<?php $render('footer'); ?>


