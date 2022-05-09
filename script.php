<?php

include "serviços/servicomensagemsessao";
include "serviços/servicovalidacao.php";
include "serviços/servicocategoriacompetidor.php";

$nome = $_POST ['nome'];
$idade = $_POST ["idade"];

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');


?>