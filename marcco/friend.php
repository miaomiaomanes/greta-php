<?php 

function roulette(int $nGagnant, string $pariNb):bool
{
$nombre = $nGagnant; 
$nbAleatoire = rand(0, 36);
//$isOdd = $nombre % 2;

if(!empty($pariUtilisateur))
{
    $res = roulette($nbAleatoire, $pariUtilisateur);
    return "\nUtilisateur a gagné son pari nombre ? " . ($res ? "VOUS AVEZ GAGNE" : " PERDU");
    return "Tirage au sort: " . $nbAleatoire;


$nGagnant = intval($pariNb) === $nombre;



return $nGagnant;
    }
}
return "\nNuméro gagnant est: " . //($isOdd ? "Impair" : "Pair");

//$ppInt = $pariPair === 'pair' ? 0 : 1;


$pariUtilisateur = $argv[1];

roulette($nbAleatoire, $pariUtilisateur);





?>