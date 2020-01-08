<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++){
        	$article = new Articles();
        	$article->setTitle("Titre de l'article n°$i")
        			->setContent("<p>Contenu de l'article n°$i</p>")
        			->setImage("")
        			->setCreatedAt(new \DateTime());
        	$manager
        }

        $manager->flush();
    }
}
