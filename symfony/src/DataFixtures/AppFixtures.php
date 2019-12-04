<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # Categories
        $category1 = new Category();
        $category1->setName('Hi-Tech');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Спорт');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Кино');
        $manager->persist($category3);

        # Articles
        $article1 = new Article();
        $article1->setTitle('Путин подписал закон о запрете продаж смартфонов без российского ПО');
        $article1->setText('Президент одобрил новое правило продажи смартфонов и других устройств в России.');
        $article1->addCategory($category1);
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle('Почему Дзюба не праздновал гол и кого назвал сектантами?');
        $article2->setText('Корреспондент «Матч ТВ» в Петербурге встретил Артема Дзюбу у зенитовской раздевалки сразу после победы над «Спартаком».');
        $article2->addCategory($category2);
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('Критики одобрили игру Козловского в «Викингах»');
        $article3->setText('Российский актер исполнил роль князя Олега в популярном канадско-ирландском сериале');
        $article3->addCategory($category3);
        $manager->persist($article3);

        # Users
        $user = new User();
        $user->setApiToken('admin_api_token');
        $user->setUsername('admin');
        $user->setPassword('admin');
        $manager->persist($user);

        $manager->flush();
    }
}
