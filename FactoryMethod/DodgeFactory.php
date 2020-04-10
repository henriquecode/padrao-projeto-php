<?php

namespace FactoryMethod;

use FactoryMethod\Product\{CarroProduct, DodgeCharger, DodgeDart, TeslaModeloS, TeslaModeloX};

class DodgeFactory implements CarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws \Exception
     */
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == 'charger') {
            return new DodgeCharger();
        } elseif ($modeloCarro == 'dart') {
            return new DodgeDart();
        } else {
            throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}