<?php

class Database
{

    private static $pdo = null;

    public static function connect()
    {
        try
        {
        	require_once('Bdd/mdp.php');
            self::$pdo = new PDO(DSN_BDD,USER_BDD,MDP_BDD);
        }
        catch (PDOException $e)
        {
            die($e-> getMessage());
            exit();
        }
        return self::$pdo;
    }

    public static function disconnect()
    {
        self::$pdo = null;
    }
}

/**
*
* INFO ENTREPRISE UTILISATRICE
*
**/

$nomEnt = "Progiplus";
$telFixeEnt = "05 05 05 05 05";
$telMobileEnt = "06 06 06 06 06";
$emailEnt = "contact@progiplus.fr";
$rueEnt = "22 rue des Genies";
$codePostalEnt = "33000";
$villeEnt = "Bordeaux";
$siret = "1234567890123";
$infoEnt =
	$nomEnt .'</br>
	Tel : '. $telFixeEnt.'</br>
	Mobile : '.$telMobileEnt.'</br>
	Email : '.$emailEnt.'</br>
	'.$rueEnt.'</br>
	'.$codePostalEnt.' '. $villeEnt .'</br>
	Siret : '.$siret;

$dateActuel = date("d/m/Y");

?>
