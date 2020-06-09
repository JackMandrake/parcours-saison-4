<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Bowser Is Coming
 *
 * Bowser: Mouhahahahahahahahaaaaaaa! It's me, Bowser!
 * Don't be mad, the game would not be fun if there is no bad guy in it.
 *
 * So. I want a way to kill Mario's life when I throw a turtle shell on him :)
 * Can you create me a method `takeHit`, and decrement Mario's lives when it's being used?
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3 (display because of the "echo")
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2 (display because of the "echo")
 *
 * ---
 *
 * Mario: Heeeeey, what are you doing here?!?
 * …
 * Well…
 * …
 * OK, it's fair. A method to kill me. Nice.
 * But I want a method to gain 1up! I love these green mushrooms…
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->up();
 *      $mario->takeHit();
 *      $mario->up();
 *      echo $mario->getLives(); // Display: 4
 */
class Mario {

    // On déclare la propriété de la classe toujours en "private"
    // inaccessible en dehors de la classe
    private $lives;

    // On déclare la méthode "construct" afin de lui mettre le paramètre "vies" comme sur l'exo1 et 2
    public function __construct($lives = 3) {
        // Toujours pareil à l'exo1
        $this->lives = $lives;
    }

    // Pour récupérer le nombre de vie, on créer une fonction pour renvoyer le Nb de vie en dehors de la classe
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

// Merci Mario ! Mais notre Princesse est dans un autre château !

/*
 * Tests
 * Pas touche !
 */
check(3);
