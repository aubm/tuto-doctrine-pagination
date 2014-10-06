<?php

namespace AB\BlogBundle\DataFixtures\ORM;

use AB\BlogBundle\Entity\Tag;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTagData implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    function load(ObjectManager $manager)
    {
        $tag1 = new Tag("tag1");
        $tag2 = new Tag("tag2");
        $tag3 = new Tag("tag3");

        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    function getOrder()
    {
        return 1;
    }
}