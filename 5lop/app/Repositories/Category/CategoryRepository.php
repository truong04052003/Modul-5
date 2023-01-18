<?php
namespace App\Repositories\Eloquents;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\EloquentRepository;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }


    public function paginate($request){
        $result = $this->model->paginate();
        return $result;
    }
}