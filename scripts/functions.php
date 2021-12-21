<?php

function qtde_card1(){
    /* Função para retornar a quantidade de alunos no sistema */
    include "config.php";
    $sql = "SELECT count(id) as total FROM card1";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['total'];

}

function qtde_card2(){
    /* Função para retornar a quantidade de alunos no sistema */
    include "config.php";
    $sql = "SELECT count(id) as total FROM card2";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['total'];

}

function qtde_card3(){
    /* Função para retornar a quantidade de alunos no sistema */
    include "config.php";
    $sql = "SELECT count(id) as total FROM card3";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['total'];

}

$card1 = qtde_card1();
$card2 = qtde_card2();
$card3 = qtde_card3();


?>