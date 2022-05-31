<?php

namespace App\Repository;

use App\Repository\Base\BaseRepository;
use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected Model $model;

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

    // /**
    //  * @param mixed $field
    //  * @param mixed $value
    //  * @return Collection
    //  */
    // public function findByParam(mixed $field, mixed $value): Collection
    // {
    //     return $this->model->where($field, $value);
    // }

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
    public function delte(int $id): int
    {
        return $this->model->delete($id);
    }
}