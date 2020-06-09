<?php
require_once '../inc/functions.php';

/*
 * Exo 4 : Luigi To The Rescue
 *
 * Luigi: Hi!
 * It seems like Mario is in trouble. I'm here to help!
 *
 * But, you know, Mario is my brother. I don't think we should have
 * a Mario class, and a Luigi class. Maybe, we can just pass our firstname
 * when we create the object?
 *
 * Oh, and I saw this is not programmed yet, but I want to say my punchline!
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Hero('Mario');
 *      echo $mario->hello(); // Display: "It's me, Mario!"
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2
 *
 *      $luigi = new Hero('Luigi');
 *      echo $luigi->hello(); // Display: "It's me, Luigi!"
 *      $luigi->up();
 *      $luigi->up();
 *      $luigi->takeHit();
 *      echo $luigi->getLives(); // Display: 4
 */

// Création de la classe Hero, ca y est on bosse en famille.
class Hero {
    public $name;
    private $lives;

    // Bon, les vies, tout ca, on commence à être rodé.
    public function __construct($name,$lives = 3) {
        $this->name = $name;
        $this->lives = $lives;      
    }

    // Fonction de présentation du personnage, c'est important la politesse
    // je retourne ce que le "echo" devras faire. J'avais commencer par faire un echo,
    // mais je me retrouvais avec 2 occurence de la phrase, sans changer de frangin...
    public function hello() {
        return "It's me, "."$this->name"."!";
    }

    // J'ai remis toutes les autres fonction pour le bon déroulement des exemples
    public function getLives() {
        return $this->lives;
    }
    // La fonction "Bowser" qui permet de soustraire une vie au compteur
    public function takeHit() {
        return $this->lives--;
    }

    // La fonction "Green Mushrroms" qui permet d'ajouter une vie au compteur
    public function up() {
        return $this->lives++;
    }

    
}

// Je vois bien que je ne suis pas le seule à m'amuser avec les commentaires

/*
 * Tests
 * Pas touche !
 */
check(4);
/*
$mamie = new Hero('Mamie PHP');
displayExo(4, method_exists($mamie, 'hello') && $mamie->hello() === "It's me, Mamie PHP!");*/
