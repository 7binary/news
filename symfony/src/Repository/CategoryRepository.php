<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * @param $ids
     * @return Category[]
     */
    public function findAllByIds($ids)
    {
        if (empty($ids)) {
            return [];
        }

        return $this->findBy(['id' => array_map('intval', $ids)]);
    }

    /**
     * @param Category $category
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Category $category)
    {
        $this->_em->persist($category);
        $this->_em->flush($category);
    }

    /**
     * @param Category $category
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function delete(Category $category)
    {
        $this->_em->remove($category);
        $this->_em->flush($category);
    }
}
