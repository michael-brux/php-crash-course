<?php
namespace Mattsmithdev;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Mattsmithdev\Product;

class ProductRepository extends EntityRepository
{
    private EntityManager $entityManager;

    public function __construct()
    {
        $this->entityManager = OrmHelper::getEntityManager();
        $entityClass = Product::class;
        $entityMetadata = $this->entityManager->getClassMetadata($entityClass);
        parent::__construct($this->entityManager, $entityMetadata);
    }

    public function insert(Product $product): int
    {
        $this->entityManager->persist($product);
        $this->entityManager->flush();

        return $product->getId();
    }

    public function update(Product $product): void
    {
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }

    public function delete(int $id): void
    {
        $product = $this->find($id);
        $this->entityManager->remove($product);
        $this->entityManager->flush();
    }

    public function deleteAll(): void
    {
        $products = $this->findAll();
        foreach ($products as $product) {
            $this->entityManager->remove($product);
        }
        $this->entityManager->flush();
    }

}
