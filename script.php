<?php
/**
 * User: rodrigo
 * Date: 16102022
 * Time: 2051
 */

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');