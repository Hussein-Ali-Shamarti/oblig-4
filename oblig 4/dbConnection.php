<?php  /* db-tilkobling */
/*
/*  Programmet foretar tilkobling til database-server og valg av database
*/

  $host="localhost";
  $port="8889";
  $user="258066";
  $password="G3wd8ctN"; /*mysql passord */
  $database="258066";     /* verdier satt for host, user, password og database for tilkobling til databaseserver */
 
$db=mysqli_connect($host,$user,$password,$database)or die ("Ikke regristrert bruker! Regristrer deg via Filezilla!");

?>