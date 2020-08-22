<?php

namespace App\Repositories;
/*
* in charge of all processing and injecting into the controllers
*/
abstract class ResourceRepository
{

    protected $model;

    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        return $this->getById($id)->update($inputs);
    }

    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }

    public function destroyApi($id)
    {
        return $this->getById($id)->delete();

    }

	public function getAll()
    {
        return $this->model->all();
    }


}
