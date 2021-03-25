<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repository
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all instances of a model.
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Create new record in the database.
     * 
     * @param array $data
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update an existing record with a given id
     * 
     * @param int $id
     */
    public function update(array $data, $id)
    {
        $existingRecord = $this->model->find($id);
        return $this->model->update($data);
    }

    /**
     * Delete an existing record with id
     * 
     * @param int $id
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * Get a single record with a given id
     */
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get the associated model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the associated model
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Eager load database relationships.
     */
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}
