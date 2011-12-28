
<HTML>
<HEAD>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
     <TITLE>SGBD FILM</TITLE>
</HEAD>
<BODY>
<h1><center>SGBD FILM</center></h1>
<h2><center>Liste des films</center></h2>
<br><br>
<?php
//Inclure le fichier ouvrirBD.php (retirer le message "Ouverture de la base")
include("ouvrirBD.php");
echo  "<table align='center' border='1' cellspacing='0'>";
echo  "<tr><td align='center' bgcolor='#CCCCCC'>TITRE</td>";
echo  "<td align='center' bgcolor='#CCCCCC'>ANNEE</td>";
echo  "<td align='center' bgcolor='#CCCCCC'>REALISATEUR</td>";
echo  "<td align='center' bgcolor='#CCCCCC'>LIEN IMAGE</td>";
echo  "<td align='center' bgcolor='#CCCCCC'>DOSSIER</td>";
echo  "</tr>";
try
{
$rep = $bdd->query('SELECT * FROM mesfilms');
// On affiche les données dans un tableau
while ($donnees = $rep->fetch())
{
   echo "<tr>";
   echo "<td>".$donnees['titre']."</td>";
   echo "<td>".$donnees['annee']."</td>";
   echo "<td>".$donnees['realisateur']."</td>";
  echo "<td>".$donnees['image']."</td>";
   echo "</tr>";
}
$rep->closeCursor(); // Termine le traitement de la requête
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
</BODY></HTML>

