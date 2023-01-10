<?php

session_start();

//estamos trabalhando na montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$decricao = str_replace('#', '-', $_POST['descricao']);

//implode('#', $_POST);



$texto = $_SESSION['id'] . ' # ' . $titulo . ' # ' . $categoria . ' # ' . $decricao . PHP_EOL;

//abrindo arquivo
$arquivo = fopen('arquivo.hd', 'a');

//escrevendo o texto
fwrite($arquivo, $texto);

//fechando o arquivo
fclose($arquivo);

//echo $texto;
header('Location: abrir_chamado.php');

?>