<?php

require_once("modelo/Produto.php");
require_once("modelo/ProdutoLivro.php");
require_once("modelo/ProdutoComputador.php");
require_once("modelo/ProdutoBalde.php");

echo "Produto 1: \n";
$p1 = new Produto();
$p1->setDescricao(readline("Informe a descrição: "));
$p1->setUnidadeMedida(readline("Informe a Unidade de medida: "));

system('clear');

echo "Livro: \n";
$p2 = new ProdutoLivro();
$p2->setDescricao(readline("Informe a descrição: "));
$p2->setUnidadeMedida(readline("Informe a Unidade de medida: "));
$p2->setAutor(readline("Informe o Autor do Livro: "));

system('clear');

echo "Computador: \n";
$p3 = new ProdutoComputador();
$p3->setDescricao(readline("Informe a descrição: "));
$p3->setUnidadeMedida(readline("Informe a Unidade de medida: "));
$p3->setProcessador(readline("Informe o Processador: "));
$p3->setMemoria(readline("Informe a Mémoria: "));

system('clear');

echo "Balde: \n";
$p4 = new ProdutoBalde();
$p4->setDescricao(readline("Informe a descrição: "));
$p4->setUnidadeMedida(readline("Informe a Unidade de medida: "));
$p4->setCapacidade(readline("Informe a capacidade: "));

system('clear');

$p1->getDados();
$p2->getDados();
$p3->getDados();
$p4->getDados();
