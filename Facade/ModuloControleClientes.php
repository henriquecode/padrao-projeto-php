<?php

namespace Facade;

class ModuloControleClientes
{
    /**
     * @param string $cpfCliente
     * @return array
     */
    public function buscaCliente(string $cpfCliente): array
    {
        // Simula a busca de um cliente pelo seu CPF.
        return [
            'nome' => 'Henrique Matos',
            'telefone' => '99999999999',
            'email' => 'developer.henrique@hotmail.com'
        ];
    }
}