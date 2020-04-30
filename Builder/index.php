<?php

require_once '../autoloader.php';

$montadorDeFoguetesTestI = new \Builder\FabricaFoguetesDirector(new \Builder\FogueteModeloIBuilder());
$montadorDeFoguetesTestII = new \Builder\FabricaFoguetesDirector(new \Builder\FogueteModeloIIBuilder());

$montadorDeFoguetesTestI->construirFoguete();
echo $montadorDeFoguetesTestI->getFoguete();

$montadorDeFoguetesTestII->construirFoguete();
echo $montadorDeFoguetesTestII->getFoguete();