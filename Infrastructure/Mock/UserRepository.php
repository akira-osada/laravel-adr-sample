<?php

namespace Infrastructure\Mock;

use Domain\Entity\User;
use Domain\Repository\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id): ?User
    {
        return new User([
            'name' => 'hogehoge',
            'email' => 'hoge@fuga.com',
        ]);
    }
}
