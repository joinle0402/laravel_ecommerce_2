<?php

namespace App\Repositories\Implementations;

use App\Repositories\Interfaces\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class BaseRepositoryImplementation implements BaseRepository
{
    public function __construct(protected Model $model) {}

    public function paginate(int $perPage = 10): LengthAwarePaginator
    {
        return $this->model->query()->paginate($perPage);
    }
}
