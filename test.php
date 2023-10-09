<?php
############
# Auteur: C van Alten
# versie: 1.0
############
$naam ="Cees";
$leeftijd = 35;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- dit is commentaar -->
<?php
echo "Hallo $naam!";
?>
<hr/>
<?php
echo "$naam is $leeftijd jaar oud! <br>";
//TODO: functiomschrijving maken
############
# dit is ook commentaar
############
// Functie om geboortejaar te laten zien.
$huidigJaartal = 2023;
$geboortejaar = $huidigJaartal-$leeftijd;
echo "Je bent geboren in $geboortejaar";
?>
</body>
</html>