<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\entity\Users;

class UsersFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        /*for ($i=1; $i<=10; $i++) {
            $user=new Users();
            $user->setId($i)
                ->setNom("nom $i")
                ->setPrenom("Penom $i")
                ->setAge($i);
                
            $manager->persist($user);
        }*/
        $manager->flush();
    }
}
