<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Article extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $lists = [
            ["Nom1", "slug1", "test1"],
            ["Nom2", "slug2", "test2"],
            ["Nom3", "slug3", "test3"],
            ["Nom4", "slug4", "test4"],
            ["Nom5", "slug5", "test5"],
            ["Nom6", "slug6", "test6"]
        ];

        foreach ($lists as $list) {
            $article = new \App\Entity\Article();
            $article->setName($list[0]);
            $article->setSlug($list[1]);
            $article->setContent($list[2]);
            $manager->persist($article);
        }

        $manager->flush();
    }
}