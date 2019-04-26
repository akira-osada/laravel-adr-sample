<?php
namespace Domain\Usecase;

use Domain\Repository\UserRepositoryInterface as UserRepository;

class ShowUserUsecase
{
    /** @var \Domain\Repository\UserRepositoryInterface */
    private $repository;

    /**
     * @param UserRepository $repository
     */
    public function __constructt(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function run(int $id)
    {
        return $this->repository->findById($id);
    }
}