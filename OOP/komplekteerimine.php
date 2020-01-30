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

//arvutaHind v6tab vaartused kokku ja arvutabkoguhinna
    public function arvutaHind(){
        return $this ->hind + $this ->lisand1Hind + $this -> lisand2Hind + $this -> lisand3Hind + $this -> lisand4Hind;
    }

    public function nimi() { return $this -> nimetus; }
    public function liha() { return $this -> liha; }
    public function sai() { return $this -> sai; }
    public function baashind() { return $this -> hind; }
    public function lisand1() { return $this -> lisand1; }
    public function lisand2() { return $this -> lisand2; }
    public function lisand3() { return $this -> lisand3; }
    public function lisand4() { return $this -> lisand4; }
}

class TervislikBurger extends Burger{
    private $tervislikLisand1 = '';
    private $tervislikLisand1Hind = 0.0;
    private $tervislikLisand2 = '';
    private $tervislikLisand2Hind = 0.0;
//child klassi konstruktori deklaratsioon
    public function __construct($liha, $hind, $lisand1= null, $lisand1Hind= null, $lisand2= null, $lisand2Hind= null, $lisand3= null, $lisand3Hind= null, $lisand4= null, $lisand4Hind= null, $tervislikLisand1= null, $tervislikLisand1Hind= null, $tervislikLisand2= null, $tervislikLisand2Hind= null)
    {
//        parent klassi konstruktori v@ljkakutse
        parent::__construct("TervislikBurger", $liha, "teraleib", $hind, $lisand1, $lisand1Hind, $lisand2, $lisand2Hind, $lisand3, $lisand3Hind, $lisand4, $lisand4Hind);

        if($tervislikLisand1Hind || $tervislikLisand1 || $tervislikLisand2 || $tervislikLisand2Hind){
            $this -> tervislikLisand1 = $tervislikLisand1;
            $this -> tervislikLisand1Hind = $tervislikLisand1Hind;
            $this -> tervislikLisand2 = $tervislikLisand2;
            $this -> tervislikLisand2Hind = $tervislikLisand2Hind;
        }

    }
    public function arvutaHind(){
        $hind = parent::arvutaHind();
        return $hind + $this -> tervislikLisand1Hind + $this -> tervislikLisand2Hind;
    }

}

class LuxBurger extends Burger{

    public function __construct()
       {
        parent::__construct("LuxBurger", "Kobe veiseliha", "valge", 10, "Goji marjade mahl", 1.75, "friikartulid", 2.0, "cheddar", 2);

        }
    public function arvutaHind(){
        $hind = parent::arvutaHind();
        return $hind;
    }
}

$lisandid = [
    'tomat' => 1,
    'juust' => 1.5,
    'kurk' => 1,
    'fetajuust' => 1.5,
    'muna' => 1.25,
    'sibul' => 0.5,
    'oliivid' => 1.25,
];

$tervislikudlisandid = [
    'k&otildervitsaseemned' => 1,
    'kitsejuust' => 1.5,
    'kurk' => 1,
    'peet' => 1.5,
    'muna' => 1.25,
    'sibul' => 0.5
];


if ($_POST['tyyp'] === 'Tava') {
    $burger = new Burger('Burger', 'loomaliha', 'valge', 5.0, $_POST['lisand1'], $lisandid[$_POST['lisand1']], $_POST['lisand2'], $lisandid[$_POST['lisand2']], $_POST['lisand3'], $lisandid[$_POST['lisand3']], $_POST['lisand4'], $lisandid[$_POST['lisand4']]);
} elseif ($_POST['tyyp'] === 'Tervis'){
    $burger = new TervislikBurger('kana', 5.0, $_POST['lisand1'], $lisandid[$_POST['lisand1']], $_POST['lisand2'], $lisandid[$_POST['lisand2']], $_POST['lisand3'], $lisandid[$_POST['lisand3']], $_POST['lisand4'], $lisandid[$_POST['lisand4']], $_POST['tervisliklisand1'], $tervislikudlisandid[$_POST['tervisliklisand1']], $_POST['tervisliklisand2'], $tervislikudlisandid[$_POST['tervisliklisand2']]);
} else {
    $burger = new LuxBurger();
}

?>
<h1>Tellimine &otilde;nnestus</h1>

<?php

echo '<br>';
echo 'Komplekteeriti ' .$burger->nimi();
echo '<br>';
echo 'Hinnaga '. $burger->arvutaHind(). ' eurot';
echo '<br>';
echo '<br> Baashind on '. $burger -> baashind(). ' eurot ja lisandid:';
echo '<br>';
echo '<br>'.$burger ->lisand1().' hinnaga ' .$lisandid[$_POST['lisand1']]. ' eurot. <br>'. $burger ->lisand2().' hinnaga ' .$lisandid[$_POST['lisand2']]. ' eurot. <br>'.$burger ->lisand3().' hinnaga ' .$lisandid[$_POST['lisand3']]. ' eurot. <br>'. $burger ->lisand4().' hinnaga ' .$lisandid[$_POST['lisand4']]. ' eurot. <br>';
echo '<br>';
?>
