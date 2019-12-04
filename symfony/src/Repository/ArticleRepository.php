<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function save(Article $article)
    {
        $this->_em->persist($article);
        $this->_em->flush($article);
    }

    public function delete(Article $article)
    {
        $this->_em->remove($article);
        $this->_em->flush($article);
    }

    public function findActiveById($id)
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->createQueryBuilder('a')
            ->where('a.deleted_at IS NULL')
            ->andWhere('a.id = :id')
            ->setParameter('id', $id);

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }

    public function search($filter, $categories)
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->createQueryBuilder('a')
            ->where('a.deleted_at IS NULL');

        if (!empty($filter)) {
            $queryBuilder
                ->andWhere('MATCH_AGAINST(a.title, a.text) AGAINST(:searchterm boolean) > 0')
                ->setParameter('searchterm', $filter);
        }

        if (!empty($categories)) {
            $queryBuilder
                ->innerJoin('a.categories', 'c', 'WITH', 'c.id IN (:categories)')
                ->setParameter('categories', $categories);
        }

        return $queryBuilder->getQuery()->getResult();
    }
}
