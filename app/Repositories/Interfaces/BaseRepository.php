<?php

namespace App\Repositories\Interfaces;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface BaseRepository
{
    public function paginate(int $perPage = 10): LengthAwarePaginator;
}
