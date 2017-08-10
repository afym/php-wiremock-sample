<?php
namespace Afym\Operations\Application;

use Afym\Operations\Contract\ConfigurationContract;

class Configuration implements ConfigurationContract {
    private $configPath;

    public function __construct($configPath) {
        $this->configPath = $configPath;
    }

    public function getDefinition() {
        return [];
    }

    private function readFile() {
        file_get_contents($this->configPath);
    }

}