<?php

namespace App\Repository;

use App\Entity\Podcast;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PodcastRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Podcast::class);
    }

    public function findLatest($limit) {
        return $this->createQueryBuilder('p')
                    ->orderBy('p.creationDate', 'desc')
                    ->setMaxResults($limit)
                    ->getQuery()
                    ->getResult();
    }
}
