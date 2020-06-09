<?php
require_once '../inc/functions.php';

/*
 * Exo 1 : Mario Comes To Life
 *
 * Hello! It's me, Mario!
 *
 * Oh, I'm sorry, I'm not speaking French right now.
 * But I've been told you're a developer, so I figure
 * you speak English, at least a little.
 *
 * And for Peach's sake, you're a student in a school
 * named “O’clock”, so you HAVE to be able to read English!
 *
 * So, where were we?
 * OK, I'm Mario! But right now, I am not programmed yet.
 *
 * Can you write me a PHP class to make me exist?
 * Just a bare class nammed `Mario`, with just one property: `lives`.
 * In this game, I start with 3 lives. Oh, and this property
 * should be public knowledge…
 *
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->lives; // Display: 3
 */

// Création de la classe "Mario" qui est, selon Mac Lesggy dans sa vidéo
// de présentation de la PlayStation, un pizzaiolo... Mais on ne lui en
// voudra pas trop.
class Mario {

    // On déclare la propriétés de la classe, les vies
    public $lives;

    // On déclare la méthode "construct" afin de lui mettre le paramètre "vies"
    public function __construct($lives = 3) {
        // On fait référence à l'objet en cours d'utilisation
        $this->lives = $lives; 
    }
}

// Et maintenant, allons dépenser toutes ces vies dans les canalisations
// J'aurais tout aussi bien pu faire "public $lives = 3;"



/*
 * Tests
 * Do not touch.
 */
check(1);
