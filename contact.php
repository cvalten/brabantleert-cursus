<?php
//Pas deze variabelen aan per nieuwe pagina.
    $title= "Neem contact op!";
    $header ="Vul onderstaand formulier in :)";
    include("includes/head.inc.php");
    include("includes/nav.inc.php");
?>
    <main style="border: 6px double rgb(136, 210, 136);">
<a href="verwerk.php?lang=nl">NL</a>
    <form method="POST" action="verwerk.php">
    <table>
    <tr>
      <td class="width-250">Voornaam:</td>
      <td><input type="text" name="voornaam" required></td>
    </tr>
    <tr>
      <td class="width-250">Achternaam:</td>
      <td><input type="text" name="achternaam"></td>
    </tr>
    <tr>
      <td class="width-250">E-mail:</td>
      <td><input type="email" name="email" required></td>
    </tr>
    <tr>
      <td class="width-250">datum:</td>
      <td><input type="date" name="datum" required></td>
    </tr>
    <tr>
      <td class="width-250">Je bericht:</td>
      <td><textarea name="bericht"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Verzenden"></td>
    </tr>
  </table>
    </form>
</main>
<?php
    include("includes/footer.inc.php");
?>