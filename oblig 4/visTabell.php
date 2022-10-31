<?php  /* vis-alle-poststeder */
/*
/*  Programmet skriver ut alle registrerte poststeder
*/
  
include("dbConnection.php"); /*tilkobling til db server utført */

$sqlsetning="*SELECT *  FROM Klasse";
$sqlresultat=mysqli_query($db,$sqlSetning) || die ("ikke mulig å hente fra databasen!")
/*SQL-Setningen sendt til db-server*/

$antallRader=mysqli_num_rows($sqlresultat); //antall rader i resultatet beregnet.

  print ("<h3>Registrerte Klasser</h3>");
  print ("<table border=1>"); 
  print ("<tr><th align=left>klassekode</th> <th align=left>klassenavn</th> <th align=left>studiumkode</th></tr>"); 

  for ($r=1;$r<=$antallRader;$r++) // lagde ekstra rader
    {
    $rad=mysqli_fetch_array($sqlresultat); //ny rad hentes fra ra spørringsresultatet
    $klassekode=$rad["klassekode"]; //eller $postnr=$rad[0]
    $klassenavn=$rad["klassenavn"]; //elelr postnr= $rad [1]
    $studiumkode=$rad["studiumkode"]; //elelr postnr= $rad [1]

          print ("<tr> <td> $klassekode </td> <td> $klassenavn </td> <td> $studiumkode </td> </tr>");
    }
  print ("</table>"); 
?>