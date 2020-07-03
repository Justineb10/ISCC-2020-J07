<?php
 $historique_commandes = array('5.49', '9.99', '5.49', '15.99', '25');
 $somme=0;
function afficher_commandes($historique_commandes) 
{
foreach($historique_commandes as $element){
echo("Une commande de $element € a été reçue. <br/>") ; 
$somme+= +$element;
}
echo("Le total des commandes est de $somme €.");
return;
}
afficher_commandes($historique_commandes);
?>