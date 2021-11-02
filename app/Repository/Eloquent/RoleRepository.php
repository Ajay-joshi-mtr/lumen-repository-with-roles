<?php

namespace App\Repository\Eloquent;

use Spatie\Permission\Models\Role;
use App\Repository\RoleRepositoryInterface;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
}