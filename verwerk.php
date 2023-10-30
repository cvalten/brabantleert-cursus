<?php
//Definieer de variabelen als leeg.
$voornaam = $achternaam =$email=$bericht= "";
//Als er iets gepost is (de knop is ingedrukt)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Vul de variabelen met de juiste inhoud.
//TODO: Controleer of de waardes gevuld zijn en niet leeg.
    $voornaam = ($_POST['voornaam']);
    $achternaam = ($_POST['achternaam']);
    $email = ($_POST['email']);
    $datum = $_POST['datum'];
    $bericht = ($_POST['bericht']);
}
//Anders proberen ze iets wat niet mag
else{
    //En stuur je ze terug naar het contact formulier.
    header("Location: contact.php");
}

//Pas deze variabelen aan per nieuwe pagina.
    $title= "Mijn portfolio website!";
    $header ="Welkom bij mijn portfolio site!";
    include("includes/head.inc.php");
    include("includes/nav.inc.php");
?>
    <main style="border: 6px double rgb(136, 210, 136);">
<?php
print_r($_POST);
//TODO: Verwerk inhoud naar een excel bestand 
//Todo: Mail klant.
?>
    </main>
<?php
    include("includes/footer.inc.php");
?>