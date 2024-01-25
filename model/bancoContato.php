<?php

function inserirContato($conexao,$nomeContato,$foneContato){
    $query = "insert into agenda(nomeContato, foneContato)values('{$nomeContato}','{$foneContato}')";
    return mysqli_query($conexao,$query);
}


function buscarNomeContato($conexao, $nomeContato){
    $query = "select * from agenda where nomeContato like '%{$nomeContato}%'";
    $result = mysqli_query($conexao,$query);
    return $result;

}

function buscarIDContato($conexao, $idContato){
    $query = "select * from agenda where idContato like '%{$idContato}%'";
    $result = mysqli_query($conexao,$query);
    return $result;

}


function alterarContato($conexao,$nomeContato,$foneContato,$idContato){
    $query = "update agenda set nomeContato= '{$nomeContato}', foneContato= '{$foneContato}', where idContato= '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;

}


function deletarContato($conexao,$idContato){

    $query = "delete from agenda where idContato= '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

?>