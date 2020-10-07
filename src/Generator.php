<?php

namespace Matanus\Temere;

class Generator {

    use Matanus\Temere\Dictionary;

    private $types;
    private $methods;
    private $max_string_length;
    private $type;
    private $length;

    public function __construct() {

        $this->types = ["a", "A", "1", "-"];
        $this->methods = ['brute', 'hash', 'uniqid', 'randombytes'];
        $this->max_string_length = 1024;
        $this->type = "aA1-";
        $this->length = 20;
        $this->dict = new Dictionary;
    }

    public function generate($type = "aA1-", $length = 20) {

            
            if ($length > $this->max_string_length) $length = $this->max_string_length;

            $method = $this->selectMethod();
            
            return $this->generateUsingMethod($method, $type, $length);
    }

    private function selectMethod() {

        return $this->methods[mt_rand(0, count($this->methods)-1)];
    }

    private function generateUsingMethod($method, $type, $length) {

        if ($method === "brute") {
            return $this->useBrute();
        } elseif ($method === "hash") {
            return $this->useHash();
        } elseif ($method === "uniqid") {
            return $this->useUniqid();
        } elseif ($method === "randombytes") {
            return $this->useRandombytes();
        } else {
            return "Method not set! String not generated!";
        }
    }

    private function useBrute() {

        return "H4i0&eT@.U06 (brute - example, not unique!) - ".$this->dict->all();

    }

    private function useHash() {

        return "c3o(6g%m.Hj4sD (hash - example, not unique!) - ".$this->dict->all();

    }

    private function useUniqid() {

        return "3D,8H%w2kUg8 (uniqid - example, not unique!) - ".$this->dict->all();

    }

    private function useRandombytes() {

        return "Yg37.L0h#sD6a (randombytes - example, not unique!) - ".$this->dict->all();

    }
}