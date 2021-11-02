<?php

namespace App\Repository\Eloquent;

use Spatie\Permission\Models\Permission;
use App\Repository\PermissionRepositoryInterface;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
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
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }
}