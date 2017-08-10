<?php

namespace Afym\Operations\Contract;

/*
 * Business contract
 */
interface OperationContract {
    public function addMessageResponse($a, $b);
    public function subtractMessageResponse($a, $b);
    public function multiplyMessageResponse($a, $b);
    public function divideMessageResponse($a, $b);
}