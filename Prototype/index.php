<?php

require_once '../autoloader.php';

$compradores = [
    'Gabriel Anhaia',
    'Anderson Scherer',
    'Braian Ottoni'
];

$livroPhp = new \Prototype\LivroPhpPrototype();
$livroPhp->setTitulo('Padrões de Projeto com PHP 7.2');

$livros = [];

foreach ($compradores as $nomeComprador) {
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($nomeComprador);

    $livros[] = $livroComprador;
}

echo '<pre>';
print_r($livros);