<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\News;

class NewsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<10; $i++) {
            $news=new News();
            $news->setTitle("article n° $i")
                ->setContent("contenu de l'article")
                ->setImage("http://placehold.it/350x150");
            
           $manager->persist($news);
        }

        $manager->flush();
    }
}
