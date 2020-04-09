<?php

namespace Singleton;

class LogsSingleton {

    /** @var self $instance Instância da classe de logs */
    protected static $instance;

    private function __construct() {}

    public function storeLog(array $data)
    {
        $fileName = 'logs.txt';

        $logsOld = [];
        if (filesize($fileName) > 0) {
            $contentFile = file_get_contents($fileName);

            $logsOld = json_decode($contentFile, true);
        }

        $logsOld[] = $data;

        $file = fopen($fileName, 'w');

        fwrite($file, json_encode($logsOld));

        fclose($file);
    }

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone() {}

    private function __wakeup() {}
}