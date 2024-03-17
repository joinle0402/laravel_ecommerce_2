<?php

namespace App\Services\Implementations;

use App\Repositories\Interfaces\UserRepository;
use App\Services\Interfaces\UserService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserServiceImplementation implements UserService
{
    public function __construct(protected UserRepository $repository) {}

    public function paginate(int $perPage = 10): LengthAwarePaginator
    {
        return $this->repository->paginate($perPage);
    }
}
