<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*// create 20 genuses! Bam!
        for ($i = 0; $i < 20; $i++) {
            $genus = new Genus();
            $genus->setName('Octopus'.rand(1, 100));
            $genus->setSubFamily('Octopodinae');
            $genus->setSpeciesCount(rand(100, 99999));

            $manager->persist($genus);
        }

        $manager->flush();*/

        // with nemlmio/alice v 2.0!!! new version 3.1 out!
        \Nelmio\Alice\Fixtures::load(
            __DIR__.'/fixtures.yml',
            $manager, [
            'providers' => [$this]
        ]);
    }

    public function genus()
    {
        $genera = [
            'Octopus',
            'Balaena',
            'Orcinus',
            'Hippocampus',
            'Asterias',
            'Amphiprion',
            'Carcharodon',
            'Aurelia',
            'Cucumaria',
            'Balistoides',
            'Paralithodes',
            'Chelonia',
            'Trichechus',
            'Eumetopias'
        ];

        $key = array_rand($genera);

        return $genera[$key];
    }
}