<?php

namespace Singleton;

class LogsSingleton {

    /** @var self $instancia Instância da classe de logs */
    protected static $instancia;

    private function __construct() {}

    public function gravarLog(array $data)
    {
        $nomeArquivo = 'logs.txt';

        $logsAnteriores = [];
        if (filesize($nomeArquivo) > 0) {
            $conteudoDoArquivo = file_get_contents($logsAnteriores);

            $logsAnteriores = json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriores[] = $data;

        $arquivo = fopen($nomeArquivo, 'w');

        fwrite($arquivo, json_encode($logsAnteriores));

        fclose($arquivo);
    }

    public static function obterInstancia(): self
    {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    private function __clone() {}

    private function __wakeup() {}
}