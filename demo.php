<?php
/*
On veut demander à l'utilisateur de rentrernles horaires d'un magagin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/


// on demande à l'utilisateur de rentrer un créneaux
// On demande l'heure de début
// On demande l'heure de fin 
//On vérifie que l'heure de début < l'heure de fin 
// On demande si on veut rajouter un nouveau crenaux(o/n)
// On demande à l'utilusateur de rentrer une heure
// On affiche l'état d'ouverture du magasin
// Don , on va crée une variable qui va affiché les crenaux

$creneaux = [];

while(true){
$debut = (int) readline('Heure d\'ouverture : ');
$fin = (int) readline('Heure de fermeture : ');
if ($debut >= $fin){
    echo"Le créneaux ne peut pas etre enregistré car l\'heure de début ($debut) est supérieure à l'heure de fermeture ($fin)";
} else {
    // on crée une variable pour stoké les creaux dans un tableaux
    $creneaux[] = [$debut, $fin];
    $action = readline('Voulez vous enregister un nouveau créneau (o/n : ');
    if ($action ==='n') {
    break;
    }
}
}
 echo 'Le magasin est ouvert de ';
foreach ($creneaux  as $creanaux) {
    echo $creanaux [0]. 'h à ' . $creanaux[1] .'h';
}


// Une autre alternative!
// Ici, on met les horaires d'ouverture du magasin

/*$heure = (int)readline("A quelle heure voulez vous viser le magasin ?");
$creneauxTrouve = false;
foreach ($crenaux as $creneaux) {
if($heure>= $crenaux[0] && $heure <= $crenaux[1]){
    $creneauxTrouve = true;
break;
}
}
if($creneauxTrouve){
    echo 'Le magasin sera ouvert';
}else{
    echo 'Desolé, le magasin sera fermée';

   
}
    
}

print_r($creneaux);
