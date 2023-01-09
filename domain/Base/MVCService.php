<?php

namespace MVC\Base;

class MVCService {

    public function index()
    {
        return $this->model->index();
    }

    public function showById($id)
    {
        return $this->model->showById($id);
    }

    public function showByUuid($uuid)
    {
        return $this->model->showByUuid($uuid);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function updateByUuid($uuid, array $data)
    {
        return $this->model->updateRecordByUuid($uuid, $data);
    }

    public function updateById($id, array $data)
    {
        return $this->model->updateRecordById($id, $data);
    }

    public function deleteByUuid($uuid)
    {
        return $this->model->deleteRecordByUuid($uuid);
    }

    public function deleteById($id)
    {
        return $this->model->deleteRecordById($id);
    }

    public function lookup(array $params)
    {
        if (method_exists($this->model, 'lookup')) {
            return $this->model->lookup($params);
        }

        return [];
    }

    public function filter(\Illuminate\Database\Eloquent\Builder $query, array $params)
    {
        if (method_exists($this->model, 'filter')) {
            $query = $this->model->filter($query, $params);
        }

        return $query;
    }
}
