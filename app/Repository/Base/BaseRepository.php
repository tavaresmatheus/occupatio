<?php

namespace App\Repository\Base;

use App\Repository\Base\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @return Collection
     */
    public function findById(int $id): Collection
    {
        return $this->model->find($id);
    }

    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     * @param array $newInformation
     * @param array $oldInformation
     * @return bool
     */
    public function update(int $id, array $newInformation, array $oldInformation): bool
    {
        $data = $this->model->find($id);

        $updatedData = $data->$oldInformation;
        $updatedData = $newInformation;

        return $this->model->save($updatedData);
    }

    /**
     * @param int $id
     * @return int
     */
    public function delete(int $id): int
    {
        return $this->model->delete($id);
    }
}