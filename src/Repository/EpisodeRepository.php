<?php

namespace App\Repository;

use App\Entity\Episode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class EpisodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Episode::class);
    }

    public function findLatest($limit) {
        return $this->createQueryBuilder('e')
                    ->orderBy('e.releaseDate', 'desc')
                    ->setMaxResults($limit)
                    ->getQuery()
                    ->getResult();
    }
}
