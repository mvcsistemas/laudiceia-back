<?php

namespace MVC\Base;

use Illuminate\Database\Eloquent\Model;

class MVCModel extends Model {

    public $timestamps = false;

    public function index()
    {
        return $this->query();
    }

    public function showById($id)
    {
        $query = $this->index();

        if (Is_Array($id)) {
            $params = $id;
        } else {
            if (Is_Array($this->primaryKey)) {
                $chave = $this->primaryKey[0];
            } else {
                $chave = $this->primaryKey;
            }

            $params[$chave] = $id;
        }

        return $this->filter($query, $params)->firstOrFail();
    }

    public function showByUuid($uuid)
    {
        $query = $this->index();
        $params = ['uuid' => $uuid];

        return $this->filter($query, $params)->firstOrFail();
    }

    public function updateRecordByUuid($uuid, array $data)
    {
        return $this->findByUuid($uuid)->update($data);
    }

    public function updateRecordById($id, array $data)
    {
        return $this->findOrFail($id)->update($data);
    }

    public function deleteRecordByUuid($uuid)
    {
        return $this->findByUuid($uuid)->delete();
    }

    public function deleteRecordById($id)
    {
        return $this->findOrFail($id)->delete();
    }
}
