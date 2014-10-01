<?php
namespace Yoda\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Yoda\EventBundle\Entity\Event;

class LoadEvents implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $event1 = new Event();
        $event1->setName('football match');
        $event1->setLocation('Dhaka');
        $event1->setDetails('testing details');
        $event1->setTime(new \DateTime('tomorrow'));
        $manager->persist($event1);
        $event2 = new Event();
        $event2->setName('football match2');
        $event2->setLocation('Barisal');
        $event2->setDetails('testing details1');
        $event2->setTime(new \DateTime('tomorrow noon'));
        $manager->persist($event2);
        $manager->flush();
    }
}