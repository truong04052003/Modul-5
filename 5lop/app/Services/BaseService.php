<?php
namespace App\Services;

use App\Services\ServiceInterface;

class BaseService implements ServiceInterface{
    public $repository;

    public function all($request){
        return $this->repository->all($request);
    }

    public function find($id){
        return $this->repository->find($id);
    }

    // public function create($data){
    //     return $this->repository->create($data);
    // }

    public function update($id, $data){
        return $this->repository->update($id, $data);
    }

    public function destroy($id){
        return $this->repository->destroy($id);
    }
    public function store($data){
        return $this->repository->store($data);
    }
    // public function getTrash(){
    //     return $this->repository->getTrash();
    // }
}