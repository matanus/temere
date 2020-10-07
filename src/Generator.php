<?php
namespace Matanus\Temere;

class Generator {

    private function __construct() {
        $types = ["a", "A", "1", "-"];
        $methods = ['brute', 'hash', 'uniqid', 'randombytes'];
    }

    public function generate($type = "aA1-", $length = 20) {

            $method = $this->selectMethod();
            return $this->methods[$method];
    }

    private function selectMethod() {
        return mt_rand(0, count($this->methods)-1);
    }
}