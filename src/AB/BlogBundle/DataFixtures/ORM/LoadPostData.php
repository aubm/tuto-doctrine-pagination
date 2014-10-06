<?php

namespace AB\BlogBundle\DataFixtures\ORM;

use AB\BlogBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nubs\RandomNameGenerator\Vgng;

class LoadPostData implements FixtureInterface, OrderedFixtureInterface
{

    /**
     * {@inheritdoc}
     */
    function load(ObjectManager $manager)
    {
        $name_generator = new Vgng();
        $tags = $manager->getRepository('ABBlogBundle:Tag')->findAll();

        for ($i = 0; $i < 100; $i++) {
            $post = new Post();
            $post->setTitle($name_generator->getName());
            for ($j = 0; $j < mt_rand(1, 3); $j++) {
                $post->addTag($tags[$j]);
            }
            $manager->persist($post);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    function getOrder()
    {
        return 2;
    }
}