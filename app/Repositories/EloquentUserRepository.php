<?php

namespace App\Repositories;

use App\User;
use App\Repositories\Interfaces\UserRepository;

class EloquentUserRepository extends EloquentRepository implements UserRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}