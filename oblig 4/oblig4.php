<?php
?>
   
  <h1>Oblig 4</h1>
  <h2>-Index1 <br>
    -Vennlingst fyll inn for å gå videre.</h2>
    

  <hr>
  <h3>Klasse</h3>
  <form method="post" action="" id="oblig3" name="oblig3">
    klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
    klassenavn <input type="text" id="klassenavn" name="klassenavn" required /> <br/>
    studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
  </form>
<?php
if (isset($_POST ["fortsett"]))
{
  $klassekode=$_POST ["klassekode"];
  $klassenavn=$_POST ["klassenavn"];
  $studiumkode=$_POST ["studiumkode"];


  if (!$klassekode || !$klassenavn || !$studiumkode)
    {
      print ("Alle feltene må fylles ut");

    }
  else
    {
      include("dbConnection.php");  /* tilkobling til database-serveren utført og valg av database foretatt */


      $sqlSetning= "INSERT INTO Klasse VALUES ('$klassekode','$klassenavn','$studiumkode');";

      mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
        /* SQL-setning sendt til database-serveren */

      print ("F&oslash;lgende poststed er n&aring; registrert: $klassekode $klassenavn $studiumkode"); 

?>
  <br></br>
  <br></br>
  
  <form method="post" action="student.php" id="student" name="Student">
        brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
        fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
        etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
        klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
    
        <input type="submit" value="Fortsett" id="btn" name="btn"/>
        <input type="reset" value="Nullstill" id="delete" name="delete"/> <br />
      </form>  
        <br>


 <?php

 $filnavn="klasse.txt";
 $filoperasjon="a";
 $fil = fopen($filnavn, $filoperasjon);
  $klassekode=$_POST ["klassekode"];
  $klassenavn=$_POST ["klassenavn"];  
  $studiumkode=$_POST ["studiumkode"]; 
  
 
  if (!$klassekode || !$klassenavn  || !$studiumkode )
    {
     echo "feil";
 }
 else 
 {
 $linje= $klassekode . ";" . $klassenavn . ";" . $studiumkode;
 
 fwrite($fil, $linje);
 echo "Følgende student er nå registrert: <br>";
 echo "$klassekode <br>";
 echo "$klassenavn <br>";
 echo "$studiumkode <br>";
 }
 
 fclose ($fil); 
 ?>

 <?php  
$filnavn="student.txt";
$filoperasjon="a";
$fil = fopen($filnavn, $filoperasjon);
 $brukernavn=$_POST ["brukernavn"];
 $fornavn=$_POST ["fornavn"];  
 $etternavn=$_POST ["etternavn"]; 
 $klassekode=$_POST ["klassekode"];   



 if (!$brukernavn || !$fornavn  || !$etternavn  || !$klassekode )
   {
    echo "feil";
}
else 
{
$linje= $brukernavn . ";" . $fornavn . ";" . $etternavn . ";" . $klassekode;

fwrite($fil,$linje);
echo "Følgende student er nå registrert: <br>";
echo "$brukernavn <br>";
echo "$fornavn <br>";
echo "$etternavn <br>";
echo "$klassekode <br>";

}
fclose($fil); 


 ?>
 
