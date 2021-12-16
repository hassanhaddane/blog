<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TpContact extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $lists = [
            ["prenom1", "nom1", 10, true],
            ["prenom2", "nom2", 20, false],
            ["prenom3", "nom3", 30, true],
        ];

        foreach ($lists as $list) {
            $tpcontact = new \App\Entity\TPContact();
            $tpcontact->setFirstname($list[0]);
            $tpcontact->setName($list[1]);
            $tpcontact->setAge($list[2]);
            $tpcontact->setNewsletter($list[3]);
            $manager->persist($tpcontact);
        }

        $manager->flush();
    }
}