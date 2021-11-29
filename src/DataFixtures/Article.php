<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Article extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new \App\Entity\Article();


        $article->setNom('ABCD');
        $manager->persist($article);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
