<?php

class Burger {
    private $nimetus = '';
    private $liha = '';
    private $sai = '';
    private $hind = 0.0;
    private $lisand1 = '';
    private $lisand1Hind = 0.0;
    private $lisand2 = '';
    private $lisand2Hind = 0.0;
    private $lisand3 = '';
    private $lisand3Hind = 0.0;
    private $lisand4 = '';
    private $lisand4Hind = 0.0;

    //konstruktor annab k6igele vaartuse ja hinna
    public function __construct($nimetus, $liha, $sai, $hind, $lisand1= null, $lisand1Hind= null, $lisand2= null, $lisand2Hind= null, $lisand3= null, $lisand3Hind= null, $lisand4= null, $lisand4Hind= null)
    {
        $this -> nimetus = $nimetus;
        $this -> sai = $sai;
        $this -> liha = $liha;
        $this -> hind = $hind;
        if($lisand1 || $lisand1Hind || $lisand2 || $lisand2Hind || $lisand3 || $lisand3Hind || $lisand4 || $lisand4Hind)
            {
            $this -> lisand1 = $lisand1;
            $this -> lisand1Hind = $lisand1Hind;
            $this -> lisand2 = $lisand2;
            $this -> lisand2Hind = $lisand2Hind;
            $this -> lisand3 = $lisand3;
            $this -> lisand3Hind = $lisand3Hind;
            $this -> lisand4 = $lisand4;
            $this -> lisand4Hind = $lisand4Hind;
        }
    }

//koostaBurger v6tab vaartused kokku ja arvutabkoguhinna
    public function koostaBurger(){
        return $this -> hind = $this ->hind + $this ->lisand1Hind + $this -> lisand2Hind + $this -> lisand3Hind + $this -> lisand4Hind;
    }
}

class TervislikBurger extends Burger{
    private $tervislikLisand1 = '';
    private $tervislikLisand1Hind = 0.0;
    private $tervislikLisand2 = '';
    private $tervislikLisand2Hind = 0.0;
    public function __construct($liha, $hind, $lisand1= null, $lisand1Hind= null, $lisand2= null, $lisand2Hind= null, $lisand3= null, $lisand3Hind= null, $lisand4= null, $lisand4Hind= null, $tervislikLisand1= null, $tervislikLisand1Hind= null, $tervislikLisand2= null, $tervislikLisand2Hind= null)
    {
        parent::__construct("TervislikBurger", $liha, "teraleib", $hind, $lisand1= null, $lisand1Hind= null, $lisand2= null, $lisand2Hind= null, $lisand3= null, $lisand3Hind= null, $lisand4= null, $lisand4Hind= null);
        if($tervislikLisand1Hind || $tervislikLisand1 || $tervislikLisand2 || $tervislikLisand2Hind){
            $this -> tervislikLisand1 = $tervislikLisand1;
            $this -> tervislikLisand1Hind = $tervislikLisand1Hind;
            $this -> tervislikLisand2 = $tervislikLisand2;
            $this -> tervislikLisand2Hind = $tervislikLisand2Hind;
        }

    }
    public function koostaBurger(){
        $hind = parent::koostaBurger();
        return $hind + $this -> tervislikLisand1Hind + $this -> tervislikLisand2Hind;
    }

}

class LuxBurger extends Burger{
//    private $lisand1 = '';
//    private $lisand1Hind = 0.0;
//    private $lisand2 = '';
//    private $lisand2Hind = 0.0;

    public function __construct($liha, $hind, $lisand1= null, $lisand1Hind= null, $lisand2= null, $lisand2Hind= null, $lisand3= null, $lisand3Hind= null, $lisand4= null, $lisand4Hind= null);
       {
        parent::__construct("LuxBurger", "Kobe veiseliha", "valge", 8, "tomat", 1.75, 'friikartulid', 2.0, $lisand3= null, $lisand3Hind= null, $lisand4= null, $lisand4Hind= null);
            $this -> lisand1 = $lisand1;
            $this -> lisand1Hind = $lisand1Hind;
            $this -> lisand2 = $lisand2;
            $this -> lisand2Hind = $lisand2Hind;
        }
    public function koostaBurger(){
        $hind = parent::koostaBurger();
        return $hind + $this -> joogihind + $this -> friiKartulHind;
    }
}



$burger1 = new Burger('Burger', 'kana', 'valge', 5.0, 'tomat', 1.0, 'kurk', 0.5, 'sibul', 1.0);
var_dump($burger1);
echo '<br>';
echo '<br>';
echo $burger1->koostaBurger();
echo '<br>'.'<br>';


$burger2 = new TervislikBurger('kana', 5.0, 'tomat', 1.0, 'kurk', 0.5, 'sibul', 1.0, 'salat',0.5, 'muna', 2);
var_dump($burger2);
//echo '<br>';
//echo '<br>';
echo $burger2->koostaBurger();
echo '<br>'.'<br>';

$luxBurger = new LuxBurger();
var_dump($luxBurger);
echo '<br>';
echo '<br>';
//echo $luxBurger->koostaBurger();
//echo '<br>'.'<br>';



