<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

var_dump($nome, $idade);

// if($idade >= 6 && $idade <= 12)
// {
// 	echo "infantil";
// }
// else if($idade >= 13 && $idade <= 18) 
// {
// 	echo "adolescente";
// }
// else
// {
// 	echo "adulto";
// }