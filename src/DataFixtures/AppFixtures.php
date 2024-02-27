<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Créer un utilisateur de test
        $user = new User();
        $user->setUsername('test_user');
        $user->setEmail('test@example.com');
        $user->setPassword('test_password');

        $manager->persist($user);
        $manager->flush();
    }
}
