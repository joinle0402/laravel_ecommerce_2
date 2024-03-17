<?php

namespace App\Services\Interfaces;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface UserService
{
    public function paginate(int $perPage = 10): LengthAwarePaginator;
}
