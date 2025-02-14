<?php
require_once '../inc/functions.php';

/*
 * Exo 2 : Please Respect My Privacy
 *
 * Aaaaah, I'm aliiiiive !
 *
 * Well... Now that I'm a human being, I have rights, OK? #MarioLivesMatter
 * As every other humain being, I have the right to privacy.
 * I'm not fond of my lives being public like that.
 *
 * Can you create me a `getLives()` method, that return the amount of lives that I have?
 * And of course, the property needs to be private now.
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      echo $mario->lives; // Fatal Error
 */

 // Création de la classe Mario (on aurais pu changer pour Wario ou Luigi)
class Mario {

    // On déclare la propriété de la classe mais cette fois ci en "private"
    // inaccessible en dehors de la classe
    private $lives;

    // On déclare la méthode "construct" afin de lui mettre le paramètre "vies" comme sur l'exo1
    public function __construct($lives = 3) {
        // Toujours pareil à l'exo1
        $this->lives = $lives;
    }

    // Pour récupérer le nombre de vie, on créer une fonction pour renvoyer le Nb de vie en dehors de la classe
    public function getLives() {
        // et on retourne la variable "vies"
        return $this->lives;
    }
}

// Je suis curieux de savoir si tous les commentaires sont lu...



/*
 * Tests
 * Do not touch.
 */
check(2);