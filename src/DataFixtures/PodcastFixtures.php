<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Podcast;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Creates a few podcasts and saves them into db
 *
 * @author kbj
 */
class PodcastFixtures extends Fixture {

    public function load(ObjectManager $manager)
    {
        $podcasts = [];
        
        $podcasts[] = array(
            'name'                 => 'L\'apéro du Captain'
            , 'description_short'   =>  'Le podcast numéro 1 sur le High Tech'
            , 'description_long'    =>  '
                                            L\'apéro du Captain, c\'est une émission live un lundi sur deux dès 21h30 ou en download sur iTunes et notre blog. Brillament animé par Captain Web, Kwakos, Manox, Lord Ton Père. 
                                            Pour connaître la date du prochain live, suivez notre compte twitter!
                                        '
            , 'category'            =>  'High-tech'
            , 'url'                 =>  'http://www.captainweb.net/'
            , 'img'                 =>  'adc.jpeg'
        );
        
        $podcasts[] = array(
            'name'                 => 'Super Gamerside'
            , 'description_short'   =>  'Podcast Jeux-vidéo, consoles et PC'
            , 'description_long'    =>  '
                                            Gamerside est un projet de podcasts audio sur les jeux vidéo, lancé par des potes trentenaires se connaissant depuis l\'enfance.
                                            Avec Kich à la basse, Ponch, la brillante Eskarina, le bodybuilder roux, Robin, et plein d\'autres (ouais, non, vraiment y a du monde) !
                                        '
            , 'category'            =>  'Jeu-video'
            , 'url'                 =>  'https://www.gamerside.fr'
            , 'img'                 =>  'sg.jpg'
        );
        $podcasts[] = array(
            'name'                 => 'ZQSD'
            , 'description_short'   =>  'Le podcast Jeux-vidéo n°1 (ou n°2 on sait pas trop)'
            , 'description_long'    =>  '
                                            ZQSD, c\'est le podcast mensuel sur les jeux vidéo PC réalisé par l\'équipe qui a coulé le magazine Joystick.
                                            Au programme : critiques, actus, blindtests idiots, et des pangolins. Plein.
                                        '
            , 'category'            =>  'Jeu-video'
            , 'url'                 =>  'http://zqsd.fr'
            , 'img'                 =>  'zqsd.jpeg'
        );
        $podcasts[] = array(
            'name'                 => 'Quid novi'
            , 'description_short'   =>  'Le podcast en toge et en sandalette'
            , 'description_long'    =>  'Des news parfois, des hors séries, et des JDR en ce moment. Animé par Barberouss, et sublimé par Randallflagg, Apollinerd, Musica, Madt, M La Maudite et keninette.'
            , 'category'            =>  'Divertissement'
            , 'url'                 =>  'http://quidnovipdc.com/'
            , 'img'                 =>  'qn.jpg'
        );
        
        foreach($podcasts as $podcast) {
            $thisPodcast = new Podcast();
            $thisPodcast->setCategory($podcast['category']);
            $thisPodcast->setName($podcast['name']);
            $thisPodcast->setDescriptionShort($podcast['description_short']);
            $thisPodcast->setDescriptionLong($podcast['description_long']);
            $thisPodcast->setImg($podcast['img']);
            $thisPodcast->setUrl($podcast['url']);
            
            $manager->persist($thisPodcast);
        }

        $manager->flush();
    }
}
