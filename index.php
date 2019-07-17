<?php 

include "classCat.php";


echo '<br>';
$couleur ='bleu';

   
function verificationCouleur($couleur)

{
    $couleurValide = ['noir','bleu','jaune'];
for ($i=0 ; $i< count($couleurValide); $i++)
{  
if ($couleur == $couleurValide[$i])
{
    return $couleurValide[$i];
}
}
return'entrer une couleur valide';
}






$pepito = new Cat("Pépito",  verificationCouleur("") ,"");

echo $pepito->couleur ;

/*echo $pepito->marcher(); 
echo $pepito->marcher();
echo $pepito->marcher();
echo $pepito->marcher();
echo $pepito->marcher();
echo $pepito->marcher();
echo $pepito->marcher();
*/





