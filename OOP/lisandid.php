<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['tyyp'])) {
        echo $_POST['tyyp'];
    }
}

$lisandid = [
  'tomat' => 1,
  'juust' => 1.5,
  'kurk' => 1,
  'fetajuust' => 1.5,
  'muna' => 1.25,
  'sibul' => 0.5,
  'oliivid' => 1.25
];

$tervislikudlisandid = [
    'k&otildervitsaseemned' => 1,
    'kitsejuust' => 1.5,
    'kurk' => 1,
    'peet' => 1.5,
    'muna' => 1.25,
    'sibul' => 0.5
];
?>

<form action="komplekteerimine.php" method="post">
    <input style="display: none;" name="tyyp" value="<?php echo $_POST['tyyp']?>">

    <?php if ($_POST['tyyp'] !== 'Lux'){ ?>
    <h2>Tee lisandite valikud</h2>
    <label for="lisand1">Lisand 1</label>
    <select name="lisand1">
        <?php
        foreach ($lisandid as $nimi => $hind)
            echo '<option value="'.$nimi.'">'.$nimi.'</option>';
        ?>
    </select>

    <label for="lisand2">Lisand 2</label>
    <select name="lisand2">
        <?php
        foreach ($lisandid as $nimi => $hind)
            echo '<option value="'.$nimi.'">'.$nimi.'</option>';
        ?>
    </select>

    <label for="lisand3">Lisand 3</label>
    <select name="lisand3">
        <?php
        foreach ($lisandid as $nimi => $hind)
            echo '<option value="'.$nimi.'">'.$nimi.'</option>';
        ?>
    </select>

    <label for="lisand4">Lisand 4</label>
    <select name="lisand4">
        <?php
        foreach ($lisandid as $nimi => $hind)
            echo '<option value="'.$nimi.'">'.$nimi.'</option>';
        ?>
    </select>
    <?php if ($_POST['tyyp'] === 'Tervis'){ ?>
    <label for="tervisliklisand1">Tervislik lisand 1</label>
    <select name="tervisliklisand1">
        <?php

        foreach ($tervislikudlisandid as $nimi => $hind)
            echo '<option value="'.$nimi.'">'.$nimi.'</option>';

        ?>
    </select>
    <?php } ?>

    <?php if ($_POST['tyyp'] === 'Tervis'){ ?>
        <label for="tervisliklisand2">Tervislik lisand 2</label>
        <select name="tervisliklisand2">
            <?php

            foreach ($tervislikudlisandid as $nimi => $hind)
                echo '<option value="'.$nimi.'">'.$nimi.'</option>';

            ?>
        </select>
    <?php } ?>

<input type="submit" name="submit" value="Continue">
</form>
<?php } ?>
<?php if ($_POST['tyyp'] === 'Lux'){ ?>
<form action="komplekteerimine.php" method="post">
    <h3>Luksburgeri puhul lisandeid valida ei saa, aga Teie tellimusele on lisatud jook ja friikartulid.</h3>
<input type="submit" value="J &auml t k a">
</form>
<?php } ?>