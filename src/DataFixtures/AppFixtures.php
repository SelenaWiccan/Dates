<?php

namespace App\DataFixtures;

use App\Entity\Crud;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Créer un utilisateur de test
        $user = new User();
        $user->setMail('test@example.com');
        $user->setMdp('test_password');
        $user->setNom('test_user');
        $user->setPrenom('Test');

        $manager->persist($user);
        $manager->flush();

        // Créer une entité Crud de test
        $crud = new Crud();
        $crud->setNom('test_nom');
        $crud->setPrenom('test_prenom');
        $crud->setDate(new \DateTime('now'));

        $manager->persist($crud);
        $manager->flush();
    }

}
