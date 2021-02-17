<?php

namespace App\DataFixtures;

use App\Entity\Animes;
use App\Entity\Mangas;
use App\Entity\Seasons;
use App\Entity\Works;
use App\Entity\CollectionFavoris;
use App\Entity\User;
use App\Entity\News;
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

        $Works4 = new Works;
        $Works4->setTitle("Beastars saison - 2");
        $Works4->setCategory("Thriller");
        $Works4->setType("Shonen");
        $Works4->setOrigin("Japan");
        $Works4->setAbstract("Bienvenue, dans l'oeuvre Beastars - saison 2");

        $manager->persist($Works4);

        $Works5 = new Works;
        $Works5->setTitle("My Hero Academia - saison 5");
        $Works5->setCategory("Nekketsu");
        $Works5->setType("Shonen");
        $Works5->setOrigin("Japan");
        $Works5->setAbstract("Bienvenue, dans l'oeuvre My Hero Academia - saison 5");

        $manager->persist($Works5);
        
        $Works6 = new Works;
        $Works6->setTitle("Miss Kobayashi's Dragon Maid - saison 5");
        $Works6->setCategory("Comédie");
        $Works6->setType("Seinen");
        $Works6->setOrigin("Japan");
        $Works6->setAbstract("Bienvenue, dans l'oeuvre Miss Kobayashi's Dragon Maid - saison 5");

        $manager->persist($Works6);

        $Works7 = new Works;
        $Works7->setTitle("Ōsama Ranking");
        $Works7->setCategory("Fantasy");
        $Works7->setType("Seinen");
        $Works7->setOrigin("Japan");
        $Works7->setAbstract("Bienvenue, dans l'oeuvre Ōsama Ranking");

        $manager->persist($Works7);

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

        $Animes4 = new Animes;
        $Animes4->setWorks($Works4);
        $Animes4->setTitle("Beastars saison - 2");
        $Animes4->setEpisodes("12");
        $Animes4->setAbstract("Adaptation en anime du manga BEASTARS de Paru Itagaki. L'histoire nous plonge dans un univers d'animaux anthropomorphes. Au sein de la pension Cherryton cohabitent en harmonie herbivores et carnivores. La consommation de viande est prohibée et les dortoirs sont séparés par régime alimentaire afin d'éviter toute tentation. Tout semble aller pour le mieux... mais chassez le naturel, il revient au galop ! Le corps sans vie de l'alpaga Tem est en effet retrouvé déchiqueté un soir ce qui ravive la méfiance chez les herbivores ! Très vite, les soupçons se dirigent vers Legoshi parce qu'il était l'ami proche de Tem et surtout parce qu'il est un loup. Pourtant, Legoshi est d'un naturel timide et discret qui fait tout son possible pour empêcher son instinct carnivore de prendre le dessus. Mais ce ne sont que de vains efforts face au fléau de discrimination dont il est victime... Et c'est dans ce climat de terreur que les élections du prochain Beastar approchent à grands pas ! Le Beastar étant le leader des animaux qui pourra ramener la paix à l'école. Et le favori n'est autre que le charismatique et imposant cerf Louis, président du club de théâtre qui va user de tout pour parvenir à ses fins !");
        $Animes4->setStudio("Orange");
        $Animes4->setSpecialedition("");
        $Animes4->setOav("");
        $Animes4->setBroadcast("Netflix");

        $manager->persist($Animes4);

        $Animes5 = new Animes;
        $Animes5->setWorks($Works5);
        $Animes5->setTitle("My Hero Academia saison - 5");
        $Animes5->setEpisodes("25");
        $Animes5->setAbstract("Dans un monde où 80 % de la population possède un super‑pouvoir appelé alter, les héros font partie de la vie quotidienne. Et les super‑vilains aussi ! Face à eux se dresse l'invincible All Might, le plus puissant des héros ! Le jeune Izuku Midoriya en est un fan absolu. Il n'a qu'un rêve : entrer à la Hero Academia pour suivre les traces de son idole. Le problème, c'est qu'il fait partie des 20 % qui n'ont aucun pouvoir... Son destin est bouleversé le jour où sa route croise celle d'All Might en personne ! Ce dernier lui offre une chance inespérée de voir son rêve se réaliser. Pour Izuku, le parcours du combattant ne fait que commencer !");
        $Animes5->setStudio("Bones");
        $Animes5->setSpecialedition("");
        $Animes5->setOav("");
        $Animes5->setBroadcast("ADN");

        $manager->persist($Animes5);

        $Animes6 = new Animes;
        $Animes6->setWorks($Works6);
        $Animes6->setTitle("Miss Kobayashi's Dragon Maid - saison 5");
        $Animes6->setEpisodes("13");
        $Animes6->setAbstract("Adapté du manga Kobayashi-san Chi no Maid Dragon de Cool Kyoushinsha. Kobayashi est une jeune salariée vivant seule jusqu'à ce que Tooru, une dragonne qui a pris forme humaine vienne vivre avec elle. Tooru considère les humains comme des êtres inférieurs et inutiles. Après avoir été sauvée par Kobayashi, elle décide de mettre ses préjugés de côté et d'aider la jeune salariée dans diverses tâches.");
        $Animes6->setStudio("Kyoto Animation");
        $Animes6->setSpecialedition("");
        $Animes6->setOav("");
        $Animes6->setBroadcast("Crunchyroll");

        $manager->persist($Animes6);

        $Animes7 = new Animes;
        $Animes7->setWorks($Works7);
        $Animes7->setTitle("Ōsama Ranking");
        $Animes7->setEpisodes("25");
        $Animes7->setAbstract("L'histoire suit les aventures amusantes et attendrissantes de Bodge, un tout petit prince qui, du haut de son jeune âge, passe son temps à fuir la réalité du royaume. Fils d'un roi hautement respecté, celui-ci ne pense qu'à s'amuser... Il va bientôt faire la rencontre de Kage, un drôle de personnage avec qui il va vite se lier d'amitié.");
        $Animes7->setStudio("Wit Studio");
        $Animes7->setSpecialedition("");
        $Animes7->setOav("");
        $Animes7->setBroadcast("Crunchyroll");

        $manager->persist($Animes7);

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

        $Seasons1 = new Seasons;
        $Seasons1->setAnimes($Animes4);
        $Seasons1->setSeason("Hiver");
        $Seasons1->setSeasondate(2021);

        $manager->persist($Seasons1);

        $Seasons2 = new Seasons;
        $Seasons2->setAnimes($Animes5);
        $Seasons2->setSeason("Printemps");
        $Seasons2->setSeasondate(2021);

        $manager->persist($Seasons2);

        $Seasons3 = new Seasons;
        $Seasons3->setAnimes($Animes6);
        $Seasons3->setSeason("Été");
        $Seasons3->setSeasondate(2021);

        $manager->persist($Seasons3);

        $Seasons4 = new Seasons;
        $Seasons4->setAnimes($Animes7);
        $Seasons4->setSeason("Automne");
        $Seasons4->setSeasondate(2021);

        $manager->persist($Seasons4);

        $User1 = new User;
        $User1->setUsername("Cheuns");
        $User1->setRoles(['admin']);
        $User1->setPassword("admin");

        $manager->persist($User1);

        $User2 = new User;
        $User2->setUsername("Toto");
        $User2->setRoles(['user']);
        $User2->setPassword("user");

        $manager->persist($User2);

        $Collection1 = new CollectionFavoris;
        $Collection1->setUser($User1);
        $Collection1->setName("MaCollection");

        $manager->persist($Collection1);

        $Collection2 = new CollectionFavoris;
        $Collection2->setUser($User2);
        $Collection2->setName("MaCollection");

        $manager->persist($Collection2);
        
        $Article1 = new News;
        $Date1 = new \DateTime('now');
        $Article1->setUser($User1);
        $Article1->setTitle("Bienvenue sur mon site");
        $Article1->setContent("Mon site est en cours de construction");
        $Article1->setDate($Date1);
    
        $manager->persist($Article1);

        $manager->flush();
    }
}