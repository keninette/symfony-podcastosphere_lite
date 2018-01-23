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
            'title'                 => 'L\'apéro du Captain'
            , 'description_short'   =>  ''
            , 'description_long'    =>  ''
            , 'category'            =>  'High-tech'
        );
        $podcasts[] = array(
            'title'                 => 'L\'improbable podcast'
            , 'description_short'   =>  ''
            , 'description_long'    =>  ''
            , 'category'            =>  'Divertissement'
        );
        $podcasts[] = array(
            'title'                 => 'Super Gamerside'
            , 'description_short'   =>  ''
            , 'description_long'    =>  ''
            , 'category'            =>  'Jeu-video'
        );
        $podcasts[] = array(
            'title'                 => 'ZQSD'
            , 'description_short'   =>  ''
            , 'description_long'    =>  ''
            , 'category'            =>  'Jeu-video'
        );
        $podcasts[] = array(
            'title'                 => 'Quid novi'
            , 'description_short'   =>  ''
            , 'description_long'    =>  ''
            , 'category'            =>  'Divertissement'
        );
        
        foreach($podcasts as $podcast) {
            
        }

        $manager->flush();
    }
}
