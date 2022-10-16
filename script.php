<?php
    session_start();
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION ['mensagem-erro'] = 'o nome não pode estar em branco';
    header('location: index.php');
}

if(strlen($nome)<3){
    echo 'é necessário ter mais que 3 caracteres';
    return;
}
if(strlen($nome)>15){
    echo 'você precisa digitar no máximo 15 caracteres';
    return;
}
if(!is_numeric($idade)){
    echo 'precisa ser em números';
}
if(strlen($idade)<100){
    echo 'porra tu é velho em?!?';
    return;
}

// var_dump($nome, $idade);

if($idade >= 6 && $idade <= 12)
{
	echo "infantil";
}
else if($idade >= 13 && $idade <= 18) 
{
	echo "adolescente";
}
else
{
	echo "adulto";
}