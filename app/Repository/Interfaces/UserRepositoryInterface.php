<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App\Repositories
 */
interface UserRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param int $id
     * @return Collection
     */
    public function findById(int $id): Collection;

    // /**
    //  * @param mixed $field
    //  * @param mixed $value
    //  * @return Collection
    //  */
    // public function findByParam(mixed $field, mixed $value): Collection;

    /**
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * @param int $id
     * @param array $newInformation
     * @param array $oldInformation
     * @return bool
     */
    public function update(int $id, array $newInformation, array $oldInformation): bool;

    /**
     * @param int $id
     * @return int
     */
    public function delete(int $id): int;
}