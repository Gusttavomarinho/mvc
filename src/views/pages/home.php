<?php $render('header'); ?>

Opa, <?php echo $nome;?><br/>
<hr/>

<?php foreach($posts as $post): ?>
<h3><?php echo $post['titulo']; ?></h3>
<h3><?php echo $post['corpo']; ?></h3>
<?php endforeach; ?>


