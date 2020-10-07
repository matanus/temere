<?php

namespace Matanus\Temere;

class Dictionary {

    public function __construct() {
    }

    public function digits() {
        // return [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        return "0123456789";
    }

    public function lowercaseLetters() {
        // return ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        return "abcdefghijklmnopqrstuvwxyz";
    }

    public function uppercaseLetters() {
        // return ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
        return "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }

    public function specialChars() {
        // return ["+", "-", "=", ".", ",", ";", "?", "!", "@", "#", "$", "%", "^", "&", "*", "/", "~"];
        return "+-=.,;?!@#$%^&*/~";
    }

    public function all() {
        return $this->digits().$this->lowercaseLetters().$this->uppercaseLetters().$this->specialChars();
    }
}