<?php $render('header',['tpagina' => $tpagina]); ?>

Opa, <?=$nome;?>
<hr/>
<?= isset($tpagina) ? $tpagina : 'Titulo da pagina ###'; ?>