<?php

namespace Infrastructure\Eloquent;

use Domain\Entity\User;
use Domain\Repository\UserRepositoryInterface;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserRepository extends Authenticatable implements UserRepositoryInterface
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id): ?User
    {
        // TODO: Implement findById() method.
    }
}
