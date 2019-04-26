<?php
namespace Domain\Repository;

use Domain\Entity\User;

interface UserRepositoryInterface
{
    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id): ?User;
}