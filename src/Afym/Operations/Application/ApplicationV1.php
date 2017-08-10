<?php

use Afym\Operations\Contract\OperationContract;
use Afym\Operations\Contract\ConfigurationContract;

class ApplicationV1 implements OperationContract {

    public function __construct(\Afym\Operations\Contract\ConfigurationContract $config)
    {

    }

    public function addMessageResponse($a, $b)
    {
        // TODO: Implement addMessageResponse() method.
    }

    public function subtractMessageResponse($a, $b)
    {
        // TODO: Implement subtractMessageResponse() method.
    }

    public function multiplyMessageResponse($a, $b)
    {
        // TODO: Implement multiplyMessageResponse() method.
    }

    public function divideMessageResponse($a, $b)
    {
        // TODO: Implement divideMessageResponse() method.
    }

    private function createConector() {
        $zendCLient = new SoapClient();
    }
}