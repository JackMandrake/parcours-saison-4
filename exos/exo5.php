<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Full Mario!
 *
 * Add these to the Hero class:
 *  - A favorite color.
 *  - To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
 *  - To be able to be invicible when eat a star.
 *
 * See tests at the bottom of this file for more info :)
 * 
 * Don't panic, this time, there will be a lot of Fatal Errors until you finish this "exo"
 */

class Hero {
    public $name;
    public $color;
    private $lives;
    public $mushroom;
    public $isBig;
    public $hasStar;
    public $isInvicible;


    public function __construct($name,$color,$mushroom=false,$isBig= false,$lives = 3,$hasStar = false) {
        $this->name = $name;
        $this->color = $color;
        $this->lives = $lives;
        $this->mushroom = $mushroom;
        $this->isBig = $isBig;
        $this->hasStar = $hasStar;
    }

    // Fonction pour le nombre de vies
    public function getLives() {
        return $this->lives;
    }

    // Fonction bottage de fesses, avec condition pour l'étoile et le champignons
    // Doit réagir différement en fonction du statut de chacun
    public function takeHit() {
        if ($this->hasStar = true) {
            return $this->lives;
        } else if ($this->isBig = true) {
            //$this->isBig = false;
            //return $this->lives;
            return $this->isBig = false;
        } else {
            return $this->lives--;
        }
    }

    // Fonction Heal, parce qu'une vie est précieuse - Une vie est une vie - Jean Luc Picard
    public function up() {
        return $this->lives++;
    }

    // Fonction couleur du perso... bon on va pas se mentir, je ne lui vois pas trop d'utilité... à moins que...
    public function getColor() {
        return $this->color;
    }

    // Fonction qui déclanche le statut isBig, il se désactive en cas de takeHit, que j'ai essayé de gérer dans le takeHit
    public function eatMushroom() {
        /* if ($this->mushroom = true) {
            return $this->isBig = true;
        } else {
            return false;
        } */
        return $this->isBig = true;
    }

    // Fonction qui déclenche le statut hasStar, qui empeche de prendre des dégâts, que j'ai essayé de gérer dans le takeHit
    public function receiveStar() {
        return $this->hasStar = true;
    }

    // Fonction qui confirme le statut d'invincibilité du perso...
    public function hasStar() {
        return $this->hasStar = true;
    }

    // Fonction qui fait que le statut hasStar passe à false, un timer ou un nombre de coup max avant de la perdre serais plus roleplay
    // Mais ca rajoute de la difficulté là où il n'y a pas la place
    public function vanishStar() {
        return $this->hasStar = false;
    }

    // Fonction qui confirme le statut de "gros" du perso, au même titre que la fonction hasStar, je pense qu'il y a plus à en faire que je ne l'ai fait
    public function isBig() {
        //if ($this->mushroom = true) {
        return $this->isBig = true;
        //}
    }

}

/**
 * Ce bonus était bien sympathique, je le referais avec l'aide de l'auto-correction
 * Je pense que je ne dois pas être loin de la vérité, au moins dans la logique
 * par contre je pense qu'il manque des intéractions entre les fonctions, genre takeHit 
 * qui agis sur le vie, sur le statut isBig, mais qui est inactif lorsque hasStar
 */

 
/*
 * Tests
 * Pas touche !
 */
$mario = new Hero('Mario', 'red');
$test = (
    $mario->getColor() === 'red'
    && $mario->isBig() === false
    && $mario->hasStar() === false
    && $mario->getLives() === 3
);
if ($test) {
    $mario->takeHit();
    $test = $mario->getLives() === 2;
    if($test){
        $mario->up();
        $mario->eatMushroom();
        $test = $mario->isBig() === true;
        if ($test) {
            $mario->takeHit();
            $test = (
                $mario->isBig() === false
                && $mario->getLives() === 3
            );
            if ($test) {
                $mario->receiveStar();
                $test = $mario->hasStar() === true;
                if ($test) {
                    $mario->takeHit();
                    $mario->takeHit();
                    $mario->takeHit();
                    $test = $mario->getLives() === 3;
                    
                    if($test){
                        $mario->eatMushroom();
                        $mario->takeHit();
                        $mario->takeHit();
                        $mario->up();
                        $mario->vanishStar();
                        $test = (
                            $mario->getLives() === 4
                            && $mario->hasStar() === false
                            && $mario->isBig() === true
                        );
                    }
                }
            }
        }
    }
}
displayExo(5, $test);
