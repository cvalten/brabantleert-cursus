<?php
//Pas deze variabelen aan per nieuwe pagina.
    $title= "Neem contact op!";
    $header ="Vul onderstaand formulier in :)";
    include("includes/head.inc.php");
    include("includes/nav.inc.php");
   // BEGIN Validatie formulier
//Definieer de variabelen als leeg.
$voornaam = $achternaam =$email=$bericht=$error= "";
$showform = true;
$errorCount = 0;

//Als er iets gepost is (de knop is ingedrukt)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Vul de variabelen met de juiste inhoud.
//TODO: Controleer of de waardes gevuld zijn en niet leeg.
    $voornaam = ($_POST['voornaam']);
    $achternaam = ($_POST['achternaam']);
    $email = ($_POST['email']);
//    $datum = $_POST['datum'];
    $bericht = ($_POST['bericht']);

    //Controleer of een variabele nog leeg is.

    if(empty($voornaam)){
        //Maak een error variabele aan voor de voornaam
        $errorVoornaam = "Voornaam is leeg!";
        $errorCount++;
    }
    if(empty($achternaam)){
        //Gebruik de standaard error variabele.
        $error .= "Achternaam is leeg! <br/>";
        $errorCount++;
    }
    if(empty($email)){
        $error .= "Email is  niet leeg!<br/>";
        $errorCount++;
    }
    //Valideer of ingevulde data gelijk is aan wat ik als developer wil dat het is.
    if($voornaam == "Cees"){
        $error .= "Naam is Cees!<br/>";
        $errorCount++;
    }

    if($errorCount == 0){
        $showform = false;
    }
}


?>
<main style="border: 6px double rgb(136, 210, 136);">
    <?=$error;?> <?=$errorCount;?>
    <?php
    //Controleer of showform nog true is (dus of er zijn fouten die gefixt moeten worden
    //Of het is de 1e keer dat de pagina geladen.
    if($showform == true)
    {
    ?>
    <form method="POST">
        <table>
        <tr>
          <td class="width-250">Voornaam:</td>
          <td><input type="text" name="voornaam" value="<?=$_POST['voornaam'] ??""?>" > <?=$errorVoornaam;?></td>
        </tr>
        <tr>
          <td class="width-250">Achternaam:</td>
          <td><input type="text" name="achternaam" value="<?=$_POST['achternaam'] ??"";?>" ></td>
        </tr>
        <tr>
          <td class="width-250">E-mail:</td>
          <td><input type="email" name="email" value="<?=$_POST['email'] ??"";?>" ></td>
        </tr>
    <!--    <tr>-->
    <!--      <td class="width-250">datum:</td>-->
    <!--      <td><input type="date" name="datum" required></td>-->
    <!--    </tr>-->
        <tr>
          <td class="width-250">Je bericht:</td>
          <td><textarea name="bericht"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Verzenden"></td>
        </tr>
      </table>
    </form>
        <?php
    }
    else
    {
     echo "Bedank voor het invullen van de site.";
    }
        ?>
</main>
<?php
    include("includes/footer.inc.php");
?>