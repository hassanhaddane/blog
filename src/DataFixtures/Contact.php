<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new \App\Entity\Contact();

        $contact->setName('Haddane');
        $manager->persist($contact);
        // $product = new Product();
        // $manager->persist($product);
        $manager->flush();
    }
}
