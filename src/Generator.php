<?php

namespace Matanus\Temere;

use Matanus\Temere\Dictionary;

class Generator
{
    private $length;
    private $min_length;
    private $max_length;
    private $type;
    private $method;
    private $dictionary;

    public function __construct()
    {
        $this->length = 20;
        $this->max_length = 1024;
        $this->min_length = 2;
        $this->method = 'brute';
        $this->dictionary = new Dictionary;
    }

    public function generate()
    {
        $this->method = $this->selectRandomMethod();

        return $this->generateUsingSelectedMethod();
    }

    private function selectRandomMethod()
    {
        $methods = $this->getAvailableMethods();
        return $methods[mt_rand(0, count($methods) - 1)];
    }

    private function generateUsingSelectedMethod()
    {
        return $this->{"use" . ucfirst($this->method)}();
    }

    public function useBrute()
    {
        $characters = $this->dictionary->allChars();

        $string = "";
        for ($i = 0; $i < $this->length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $string .= $characters[$index];
        }
        return $string;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($arg)
    {
        $len = intval($arg, 10);

        if (($this->min_length <= $len) && ($len <= $this->max_length)) {
            $this->length = $len;
        } else {
            $this->length = $this->max_length;
        }
    }

    public function getMinLength()
    {
        return $this->min_length;
    }

    public function getMaxLength()
    {
        return $this->max_length;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getAvailableMethods()
    {
        return $this->dictionary->availableMethods();
    }

    public function getAllChars()
    {
        return $this->dictionary->allChars();
    }
}
