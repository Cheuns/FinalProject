<?php

namespace App\DataFixtures;

use App\Entity\Animes;
use App\Entity\Mangas;
use App\Entity\Works;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Works1 = new Works;
        $Works1->setTitle("Naruto");
        $Works1->setCategory("Nekketsu");
        $Works1->setType("Shonen");
        $Works1->setOrigin("Japan");
        $Works1->setAbstract("Bienvenue, dans l'oeuvre Naruto");

        $manager->persist($Works1);

        $Works2 = new Works;
        $Works2->setTitle("One Piece");
        $Works2->setCategory("Nekketsu");
        $Works2->setType("Shonen");
        $Works2->setOrigin("Japan");
        $Works2->setAbstract("Bienvenue, dans l'oeuvre One Piece");

        $manager->persist($Works2);

        $Works3 = new Works;
        $Works3->setTitle("Dragon Ball");
        $Works3->setCategory("Nekketsu");
        $Works3->setType("Shonen");
        $Works3->setOrigin("Japan");
        $Works3->setAbstract("Bienvenue, dans l'oeuvre Dragon Ball");

        $manager->persist($Works3);

        $Animes1 = new Animes;
        $Animes1->setWorks($Works1);
        $Animes1->setTitle("Naruto");
        $Animes1->setEpisodes("220");
        $Animes1->setAbstract("Dans le village de Konoha vit Naruto, un jeune garçon détesté et craint des villageois. Il est craint du fait qu'il détient en lui Kyuubi (démon renard à neuf queues) d'une incroyable force, qui a tué un grand nombre de personnes. Le ninja le plus puissant de Konoha à l'époque, le quatrième Hokage, Minato Namikaze, réussit à sceller ce démon dans le corps de Naruto. Malheureusement il y laissa la vie. C'est ainsi que douze ans plus tard, Naruto rêve de devenir le plus grand Hokage de Konoha afin que tous le reconnaissent à sa juste valeur. Mais la route pour devenir Hokage est très longue et Naruto sera confronté à un bon nombre d'épreuves et devra affronter de nombreux ennemis pour atteindre son but !");
        $Animes1->setStudio("Studio Pierrot");
        $Animes1->setSpecialedition("");
        $Animes1->setOav("");
        $Animes1->setBroadcast("ADN");

        $manager->persist($Animes1);

        $Animes2 = new Animes;
        $Animes2->setWorks($Works2);
        $Animes2->setTitle("One Piece");
        $Animes2->setEpisodes("960");
        $Animes2->setAbstract("Gloire, fortune et puissance, c'est ce que possédait Gold Roger, le tout puissant roi des pirates, avant de mourir sur l'échafaud. Mais ses dernières paroles ont éveillées bien des convoitises, et lança la fabuleuse 'ère de la piraterie', chacun voulant trouver le fabuleux trésor qu'il disait avoir laissé.");
        $Animes2->setStudio("Toei Animation");
        $Animes2->setSpecialedition("");
        $Animes2->setOav("");
        $Animes2->setBroadcast("Crunchyroll");

        $manager->persist($Animes2);

        $Animes3 = new Animes;
        $Animes3->setWorks($Works3);
        $Animes3->setTitle("Dragon Ball");
        $Animes3->setEpisodes("153");
        $Animes3->setAbstract("Alors qu'elle parcourt les routes de montagnes à moto, Bulma fait une bien étrange rencontre en la personne de Sangoku, un petit garçon étonnamment fort, résistant et possédant une queue, comme les singes. Il possède un trésor qu'elle recherche, une boule de cristal, mais ne veut pas la lui céder, c'est un cadeaux que lui a laissé son grand-père Sangohan. Ils trouvent finalement un compromis, et Sangoku part avec elle à la recherche des 7 boules de cristal dont on dit qu'elles exaucent n'importe quel souhait une fois réunis.");
        $Animes3->setStudio("Toei Animation");
        $Animes3->setSpecialedition("");
        $Animes3->setOav("");
        $Animes3->setBroadcast("Daylimotion");

        $manager->persist($Animes3);

        $Mangas1 = new Mangas;
        $Date1 = new \DateTime('09/20/1999');
        $Mangas1->setWorks($Works1);
        $Mangas1->setBooks("Naruto");
        $Mangas1->setAbstract("Dans le village de Konoha vit Naruto, un jeune garçon détesté et craint des villageois. Il est craint du fait qu'il détient en lui Kyuubi (démon renard à neuf queues) d'une incroyable force, qui a tué un grand nombre de personnes. Le ninja le plus puissant de Konoha à l'époque, le quatrième Hokage, Minato Namikaze, réussit à sceller ce démon dans le corps de Naruto. Malheureusement il y laissa la vie. C'est ainsi que douze ans plus tard, Naruto rêve de devenir le plus grand Hokage de Konoha afin que tous le reconnaissent à sa juste valeur. Mais la route pour devenir Hokage est très longue et Naruto sera confronté à un bon nombre d'épreuves et devra affronter de nombreux ennemis pour atteindre son but !");
        $Mangas1->setEditor("Kana");
        $Mangas1->setReleasedate($Date1);

        $manager->persist($Mangas1);
        
        $Mangas2 = new Mangas;
        $Date2 = new \DateTime('07/22/1997');
        $Mangas2->setWorks($Works2);
        $Mangas2->setBooks("One Piece");
        $Mangas2->setAbstract("Gloire, fortune et puissance, c'est ce que possédait Gold Roger, le tout puissant roi des pirates, avant de mourir sur l'échafaud. Mais ses dernières paroles ont éveillées bien des convoitises, et lança la fabuleuse 'ère de la piraterie', chacun voulant trouver le fabuleux trésor qu'il disait avoir laissé.");
        $Mangas2->setEditor("Glénat");
        $Mangas2->setReleasedate($Date2);

        $manager->persist($Mangas2);

        $Mangas3 = new Mangas;
        $Date3 = new \DateTime('10/10/1984');
        $Mangas3->setWorks($Works3);
        $Mangas3->setBooks("Dragon Ball");
        $Mangas3->setAbstract("Alors qu'elle parcourt les routes de montagnes à moto, Bulma fait une bien étrange rencontre en la personne de Sangoku, un petit garçon étonnamment fort, résistant et possédant une queue, comme les singes. Il possède un trésor qu'elle recherche, une boule de cristal, mais ne veut pas la lui céder, c'est un cadeaux que lui a laissé son grand-père Sangohan. Ils trouvent finalement un compromis, et Sangoku part avec elle à la recherche des 7 boules de cristal dont on dit qu'elles exaucent n'importe quel souhait une fois réunis.");
        $Mangas3->setEditor("Glénat");
        $Mangas3->setReleasedate($Date3);

        $manager->persist($Mangas3);

        $manager->flush();
    }
}