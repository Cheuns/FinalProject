<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $UserAdmin = new User;
        $UserAdmin->setUsername("Cheuns");
        $UserAdmin->setRoles(['Admin']);
        $UserAdmin->setPassword("Notche55");

        $manager->persist($UserAdmin);

        $User1 = new User;
        $User1->setUsername("Ippo");
        $User1->setRoles(['Utilisateur']);
        $User1->setPassword("Makunouchi");

        $manager->persist($User1);

        $manager->flush();
    }
}
