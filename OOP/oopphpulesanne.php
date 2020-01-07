<?php

class Burger {
    private $nimetus = 'Burger';
    private $liha = '';
    private $sai = 'valge';
    private $hind = 5.0;
    private $lisand1 = '';
    private $lisand1Hind = 0.0;
    private $lisand2 = '';
    private $lisand2Hind = 0.0;
    private $lisand3 = '';
    private $lisand3Hind = 0.0;
    private $lisand4 = '';
    private $lisand4Hind = 0.0;

    public function __construct($liha)
    {
        $this -> liha = $liha;
    }
}
