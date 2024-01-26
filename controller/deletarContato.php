<?php
include_once("../view/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");

extract($_REQUEST,EXTR_OVERWRITE);

if (deletarContato($conexao,$idContato)) {
    echo ("As informações do contato foram excluidas com sucesso");
}else {
    echo("Alerta!!! As informações dop contato não foram excluidas");
}